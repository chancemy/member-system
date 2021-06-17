@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">帳戶管理</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header"><h2>帳戶管理</h2></div>
            <div class="card-body">

            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection

