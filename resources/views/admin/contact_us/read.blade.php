@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ asset('admin/news') }}">聯絡我們</a></li>
            <li class="breadcrumb-item active" aria-current="page">查看聯絡我們</li>
        </ol>
    </nav>
    <form>
        <div class="form-group">
            <label for="title">主旨</label>
            <input readonly type="text" class="form-control" id="title" placeholder="{{ $record->title }}">
        </div>
        <div class="form-group">
            <label for="content">內容</label>
            <textarea readonly class="form-control" id="content" rows="3">{{ $record->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="name">姓名</label>
            <input readonly type="text" class="form-control"  id="name"
                placeholder="{{ $record->name }}">

        </div>
        <div class="form-group">
            <label for="email">信箱</label>
            <input readonly type="text"  class="form-control" id="email"
                placeholder="{{ $record->email }}">

        </div>
        <a href="{{ asset('admin/contact_us') }}"><button type="button" class="btn btn-outline-dark">返回</button></a>
    </form>
</div>
@endsection

@section('js')
@endsection
