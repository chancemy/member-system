@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ asset('/') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">聯絡我們</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header"><h2>聯絡我們</h2></div>
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
                                        <th>信箱</th>
                                        <th>主旨</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($record as $key => $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}l</td>
                                            <td>{{ $item->title }}</td>
                                            <td>
                                                <a href="{{ asset('/admin/contact_us/read') }}/{{ $item->id }}"  type="button" class="btn btn-outline-success user-confirm" >查看</a>
                                                <form  style="display: inline-block"  class="from-delete" action="{{ asset('/admin/contact_us/delete') }}/{{ $item->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button  type="submit" class="btn btn-outline-danger admin-confirm " >刪除</button>
                                                </form>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );

            var fromDelete = document.querySelectorAll('.from-delete');

            fromDelete.forEach(ele => {
                ele.onclick = function(e){
                    console.log('???');
                    e.preventDefault();
                    var boolean = confirm('確定要刪除留言 ? ')
                    if(boolean){
                        ele.submit();
                    }else{
                        alert('取消刪除');
                    }
                }
            });
        </script>
@endsection

