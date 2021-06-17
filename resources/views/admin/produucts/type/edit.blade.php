@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ asset('/admin/products/type') }}">種類管理</a></li>
              <li class="breadcrumb-item active" aria-current="page">編輯種類</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header"><h2>編輯種類</h2></div>
            <div class="card-body">
                <form action="{{ asset('/admin/products/type/edit') }}/{{ $oldTypeData->id }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="type_name">種類</label>
                      <input type="text" class="form-control" id="type_name" aria-describedby="emailHelp" placeholder="輸入產品種類" required name="type_name" value="{{ $oldTypeData->type_name }}">
                    </div>
                    <button type="submit" class="btn btn-primary">更新</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection

