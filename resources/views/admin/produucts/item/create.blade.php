@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ asset('/admin/products/item') }}">產品品項</a></li>
              <li class="breadcrumb-item active" aria-current="page">新增產品</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header"><h2>新增產品</h2></div>
            <div class="card-body">
                <form action="{{ asset('/admin/products/item/update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="product_type">種類</label>
                        <select class="form-control" id="product_type" name="product_type_id">
                            @foreach ($productsData as $item)
                                <option value="{{ $item->id }}">{{ $item->type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="product_name">品名</label>
                      <input type="text" class="form-control" id="product_name" aria-describedby="emailHelp" placeholder="輸入產品種類" required name="product_name">
                    </div>
                    <div class="form-group">
                        <label for="product_price">價格</label>
                        <input type="text" class="form-control" id="product_price" aria-describedby="emailHelp" placeholder="輸入產品種類" required name="product_price">
                    </div>
                    {{-- <div class="form-group row">
                        <label for="size" class="col-12">尺碼</label>
                        <div class="col-12">
                            @foreach ($checked as $size)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" checked type="checkbox" id="{{ $size }}" value="{{ $size }}"
                                    name="size[]">
                                <label class="form-check-label" for="{{ $size }}">{{ $size }}</label>
                            </div>
                            @endforeach
                            @foreach ($noChecked as $size)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="{{ $size }}" value="{{ $size }}"
                                    name="size[]">
                                <label class="form-check-label" for="{{ $size }}">{{ $size }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div> --}}
                    {{-- <div class="form-group row">
                        <label for="color" class="col-12">現有顏色</label>
                        @foreach ($productData->color as $color)
                            <div class="col-2 mb-3 color-frame">
                                <div data-color="{{ $color }}" data-id="{{ $productData->id }}" class="delete-color-btn"><i class="fad fa-times"></i></div>
                                <input type="color" class="form-control" class="btn-color" value="{{ $color }}"  name="color[]">
                            </div>
                        @endforeach
                        <div class="col-12 mb-3">
                            <button type="button" id="new-color-btn" class="btn btn-outline-info">新增顏色</button>
                        </div>
                        <div class="color-group col row">
                            <div class="col-2 mb-3 color-frame">
                                <div class="delete-color-btn"><i class="fad fa-times"></i></div>
                                <input type="color" class="form-control" class="btn-color"  name="color[]">
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="descript">內容</label>
                        <textarea class="form-control" id="descript" name="descript" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="main_photo">產品主要圖片</label>
                        <input type="file" class="form-control" id="main_photo"  name="main_photo">
                    </div>
                    <div class="form-group">
                        <label for="photos">產品其他圖片</label>
                        <input multiple type="file" class="form-control" id="photos"  name="photos[]">
                    </div>

                    <button type="submit" class="btn btn-primary">新增</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

