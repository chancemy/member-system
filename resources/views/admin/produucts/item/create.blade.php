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
                <form action="{{ asset('/admin/products/item/update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="product_name">品名</label>
                      <input type="text" class="form-control" id="product_name" aria-describedby="emailHelp" placeholder="輸入產品種類" required name="product_name">
                    </div>
                    <div class="form-group">
                        <label for="product_price">價格</label>
                        <input type="text" class="form-control" id="product_price" aria-describedby="emailHelp" placeholder="輸入產品種類" required name="product_price">
                      </div>
                      <div class="form-group">
                        <label for="descript">內容</label>
                        <textarea class="form-control" id="descript" name="descript" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="product_type">種類</label>
                        <select class="form-control" id="product_type" name="product_type_id">
                            @foreach ($productsData as $item)
                                <option value="{{ $item->id }}">{{ $item->type_name }}</option>
                            @endforeach
                          </select>
                      </div>
                    <button type="submit" class="btn btn-primary">新增</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

