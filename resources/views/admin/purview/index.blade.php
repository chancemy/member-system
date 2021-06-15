@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <h1>權限管理</h1>
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
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );

        var adminConfirm = document.querySelectorAll('.admin-confirm')  //權限變更為管理者
        var userConfirm = document.querySelectorAll('.user-confirm')    //權限變更為使用者

        console.log(adminConfirm);
        adminConfirm.forEach(ele => {                           //遍歷admin按鈕抓到的class
            console.log(ele);
            ele.onclick = function(e){                          //當被點擊時preventDefault()停止連結功能
                e.preventDefault();
                var boolean =  confirm('確定要變更權限 ?');
                if(boolean){
                    document.location.href = ele.href;          //將網頁跳轉到連結上的herf網址 因為使用 a 連結故無法用 submit() -> 只能用 form 表單
                }else{
                    alert('取消變更')
                }
            }
        });

        userConfirm.forEach(ele => {
            console.log(ele);
            ele.onclick = function(e){
                e.preventDefault();
                console.log(ele.name);

                if(ele.name == 'admin'){                                      // 使用 a 連結上的 ele.name => name="{{ $item->role }}" 帶入後端傳出來的 role 判斷目前帳號權限
                    boolean =  confirm('此帳號目前為管理者確定要變更為使用者 ?'); //與上面同樣概念 不同的是 當要將管理者降為使用者時跳出另外提示
                    if(boolean){
                        document.location.href = ele.href;
                    }else{
                        alert('取消變更')
                    }
                }else{
                    var boolean =  confirm('確定要變更權限 ?');
                    if(boolean){
                        document.location.href = ele.href;
                    }else{
                        alert('取消變更')
                    }
                }

            }
        });
    </script>
@endsection
