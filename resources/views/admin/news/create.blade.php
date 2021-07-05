@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ asset('admin/news') }}">最新消息管理</a></li>
              <li class="breadcrumb-item active" aria-current="page">新增最新消息</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header"><h2>新增消息</h2></div>
            <div class="card-body">
                <form method="POST" action="{{ asset('/admin/news/create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="type" class="col-md-2 col-form-label text-md-right">分類</label>

                        <div class="col-md-10">
                            <select class="form-control" id="type" name="type">
                                @foreach ($news as $key => $item)
                                    <option>{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label text-md-right" >標題</label>

                        <div class="col-md-10">
                            <input id="title" type="text" class="form-control" name="title"  required autocomplete="name" autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="img" class="col-md-2 col-form-label text-md-right">圖片</label>

                        <div class="col-md-10">
                            <input type="file" name="img" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-2 col-form-label text-md-right">內容</label>

                        <div class="col-md-10">
                            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                        </div>
                    </div>


                    <div class="form-group row mb-0">
                        <div class="col-md-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">
                                新增
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 300,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true
            });

        });
    </script>
@endsection

