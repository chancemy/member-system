@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <style>
        .del-img-btn{
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
            <div class="card-header"><h2>編輯產品</h2></div>
            <div class="card-body">
                <form action="{{ asset('/admin/products/item/edit') }}/{{ $oldItemData->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="product_name">品名</label>
                      <input type="text" class="form-control" id="product_name" aria-describedby="emailHelp" placeholder="輸入產品種類" required name="product_name" value="{{ $oldItemData->product_name }}">
                    </div>
                    <div class="form-group">
                        <label for="product_price">價格</label>
                        <input type="text" class="form-control" id="product_price" aria-describedby="emailHelp" placeholder="輸入產品種類" required name="product_price" value="{{ $oldItemData->product_price }}">
                    </div>
                    <div class="form-group">
                        <label for="descript">內容</label>
                        <textarea class="form-control" id="descript" name="descript" rows="3" required>{{ $oldItemData->descript }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-12" >
                                <label for="descript">產品圖片</label>
                            </div>
                            @foreach ($oldPhotos as $productImg)
                                <div  class="col-4" style="position: relative">
                                    <div data-id="{{ $productImg->id }}" class="del-img-btn d-flex justify-content-center align items-center">X</div>
                                    <img  src="{{ $productImg->photo }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="form-group">
                            <label for="photos">產品圖片</label>
                            <input multiple type="file" class="form-control" id="photos"  name="photos[]">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="product_type">種類</label>
                    <select class="form-control" id="product_type" name="product_type_id">
                        @foreach ($productsData as $item)
                            @if ($item->id == $oldItemData->id)
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
        $('.del-img-btn').click(function(){
            var boolean  = confirm('確定要刪除嗎 ? ');
            var parent_ele = $(this).parent();
            console.log(parent_ele);
            var id = $(this).attr('data-id');
            console.log(id);
            var formdata = new FormData();
            formdata.append('id',id);
            formdata.append('_token','{{ csrf_token() }}')
            if(boolean){
                fetch('/admin/deleteImage', {
                    'method': 'post',
                    'body': formdata
                }).then(function (response) {

                }).then(function (result) {
                    alert('刪除成功!');
                    parent_ele.remove();
                });
            }
        })


    </script>
@endsection

