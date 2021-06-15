@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <h1>帳戶管理</h1>
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
                            <th>編輯帳戶</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($memberData as $key => $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    <button href="{{ asset('/account/edit') }}/{{ $item->id }}"  type="submit" class="btn btn-outline-success user-confirm" >編輯</button>
                                    <button href="{{ asset('/account/delete') }}/{{ $item->id }}"   type="botton" class="btn btn-outline-danger admin-confirm" >刪除</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection

