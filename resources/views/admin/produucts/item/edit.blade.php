@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<style>
    .photo{
        width: 200px;
        height: 200px;
        background-position: center;
        background-size: cover;
        border: 1px solid #000;
        position: relative;

    }
    .del-img-btn {
        position: absolute;
        top: 10px;
        left: 15px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: red;
        color: white;
        cursor: pointer;

    }

</style>
@endsection
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ asset('/admin/products/item') }}">產品品項</a></li>
            <li class="breadcrumb-item active" aria-current="page">編輯產品</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            <h2>編輯產品</h2>
        </div>
        <div class="card-body">
            <form action="{{ asset('/admin/products/item/edit') }}/{{ $productData->id }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="product_name">品名</label>
                    <input type="text" class="form-control" id="product_name" aria-describedby="emailHelp"
                        placeholder="輸入產品種類" required name="product_name" value="{{ $productData->product_name }}">
                </div>
                <div class="form-group">
                    <label for="product_price">價格</label>
                    <input type="text" class="form-control" id="product_price" aria-describedby="emailHelp"
                        placeholder="輸入產品種類" required name="product_price" value="{{ $productData->product_price }}">
                </div>
                <div class="form-group">
                    <label for="descript">內容</label>
                    <textarea class="form-control" id="descript" name="descript" rows="3"
                        required>{{ $productData->descript }}</textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="form-group col-12">
                            <label for="main_photo">產品主要圖片</label>
                            <input type="file" class="form-control" id="main_photo" name="main_photo">
                        </div>
                        <div class="form-group col-12">
                            <div class="border border-success">
                                <label for="descript">產品主要圖片</label>

                                <div class="col-4" style="position: relative">
                                    <div mainphoto-id="{{ $productData->id }}"
                                        class="del-img-btn d-flex justify-content-center align items-center">X</div>
                                    <img src="{{ $productData->main_photo }}" alt="">
                                </div>

                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="photos">產品其他圖片</label>
                            <input multiple type="file" class="form-control" id="photos" name="photos[]">
                        </div>
                        <div class="form-group col-12">
                            <div class=" border border-success">

                                <label for="descript">產品其他圖片</label>

                                <div class="photo-frame d-flex flex-warp">
                                    @foreach ($productData->img as $photo)
                                    <div class="photo" style=" background-image: url('{{ $photo->photo }}');">
                                        <div data-id="{{ $photo->id }}"class="del-img-btn d-flex justify-content-center align items-center">X</div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="product_type">種類</label>
                    <select class="form-control" id="product_type" name="product_type_id">
                        @foreach ($typeData as $item)
                        @if ($item->id == $productData->id)
                        <option selected value="{{ $item->id }}">{{ $item->type_name }}</option>
                        @else
                        <option value="{{ $item->id }}">{{ $item->type_name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">更新</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    // $('.del-img-btn').click(function(){
        //     var boolean  = confirm('確定要刪除嗎 ? ');
        //     var parent_ele = $(this).parent();
        //     console.log(parent_ele);
        //     var id = $(this).attr('data-id');
        //     console.log(id);
        //     var formdata = new FormData();
        //     formdata.append('id',id);
        //     formdata.append('_token','{{ csrf_token() }}')
        //     if(boolean){
        //         fetch('/admin/deleteImage', {
        //             'method': 'post',
        //             'body': formdata
        //         }).then(function (response) {

        //         }).then(function (result) {
        //             alert('刪除成功!');
        //             parent_ele.remove();
        //         });
        //     }
        // })

        var delBtns = document.querySelectorAll('.del-img-btn');
        delBtns.forEach(function(delBtn){
            delBtn.addEventListener('click',function () {
                console.log('點到');
                var hasPhotosId = this.hasAttribute('data-id');
                var hasMainPhotoId = this.hasAttribute('mainphoto-id');
                var id = '';
                var formData = new FormData();
                formData.append('_token','{{ csrf_token() }}');

                if(hasPhotosId){

                    id = this.getAttribute('data-id');
                    console.log('找到其他圖片');
                    formData.append('imgType','photos')
                }else if(hasMainPhotoId){
                    id = this.getAttribute('mainphoto-id');
                    console.log('找到主要圖片');
                    formData.append('imgType','mainPhoto')

                }
                var parentElement = this.parentElement;
                formData.append('id',id);
                var boolean  = confirm('確定要刪除嗎 ? ');
                if(boolean){
                    fetch('/admin/deleteImage',{
                    'method' : 'POST',
                    'body' : formData
                    }).then(function (response) {
                        return response.text();
                    }).then(function (result) {

                        if(result == 'success'){
                            alert('刪除成功');
                            parentElement.remove();
                        }
                    })
                }

            });
        });
</script>
@endsection
