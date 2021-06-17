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
                 @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>姓名</th>
                                        <th>E-mail</th>
                                        <th>目前權限</th>
                                        <th>更改權限</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($memberData as $key => $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->role }}</td>
                                            <td>
                                                <a href="{{ asset('/admin/purview/update/user') }}/{{ $item->id }}" name="{{ $item->role }}" type="botton" class="btn btn-outline-success user-confirm" >使用者</a>
                                                <a href="{{ asset('/admin/purview/update/admin') }}/{{ $item->id }}"   type="botton" class="btn btn-outline-danger admin-confirm" >管理者</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection

