@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">最新消息</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header"><h2>最新消息</h2></div>
            <div class="card-body">
                 @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="col-12 mb-3">
                                <a href="{{ asset('/admin/news/createView') }}"  type="button" class="btn btn-success user-confirm" >新增消息</a>
                            </div>
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>種類</th>
                                        <th>日期</th>
                                        <th>標題</th>
                                        <th>圖片</th>
                                        <th>內容</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newsData as $key => $item)
                                        <tr>
                                            <td>{{ $item->type }}</td>
                                            <td>{{ $item->publish_date }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td><img width="200px" src="{{ $item->img }}" alt=""></td>
                                            <td>{{ $item->content }}</td>
                                            <td>
                                                <a href="{{ asset('/admin/news/editView') }}/{{ $item->id }}"  type="button" class="btn btn-outline-success user-confirm" >編輯</a>
                                                <form  style="display: inline-block"  class="from-delete" action="{{ asset('/admin/news/delete') }}/{{ $item->id }}" method="POST">
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
                    var boolean = confirm('確定要刪除帳號 ? ')
                    if(boolean){
                        ele.submit();
                    }else{
                        alert('取消刪除');
                    }
                }
            });
        </script>
@endsection

