@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ asset('/home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">種類管理</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header"><h2>種類管理</h2></div>
            <div class="card-body">
                @if (Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('message') }}
                </div>
                @endif
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <a href="{{ asset('/admin/products/type/create') }}"  type="button" class="btn btn-success user-confirm" >新增</a>
                        </div>
                        <div class="col-12">
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>種類</th>
                                        <th>數量</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($typeData as $key => $item)
                                        <tr>
                                            <td>{{ $item->type_name }}</td>
                                            <td>{{ $item->product->count() }}</td>
                                            <td>
                                                <a href="{{ asset('/admin/products/type/editView') }}/{{ $item->id }}"  type="botton" class="btn btn-outline-success user-confirm" >編輯</a>
                                                <form  action="{{ asset('/admin/products/type/delete') }}/{{ $item->id }}" method="POST" style="display: inline-block"  class="from-delete" >
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

    $('.from-delete').click(function(e){
        e.preventDefault();
        var boolean = confirm('確定是否要刪除種類');
        if(boolean){
            $('.from-delete').submit();
        }else{
            alert('取消刪除');
        }
    })
</script>
@endsection

