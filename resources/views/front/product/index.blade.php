@extends('layouts.template')
@section('css')
    <style>
        .photo{
            width: 100px;
            height: 100px;

            background-size: cover;
            background-position: center;
            border: 1px solid red;

        }
    </style>
@endsection
@section('main')
    <div class="container">
        <div class="row my-3">
            <a href="/user/products/item" class="btn btn-primary mr-3">All</a>
                @foreach ($typeDatas as $typeData)
                <a href="/user/products/item?type_id={{ $typeData->id }}" class="btn btn-primary mr-3">{{ $typeData->type_name }}</a>
                @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($productDatas as  $productData)
                <div class="card col-3" style="width: 18rem;">
                    <img src="{{ $productData->main_photo }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $productData->product_name }}</h5>
                    <p class="card-text">{{ $productData->product_price }}</p>
                    <p class="card-text">{{ $productData->descript }}</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#model{{ $productData->id }}">
                        詳細介紹
                    </button>
                    </div>
                </div>

                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="model{{ $productData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $productData->product_name }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ $productData->main_photo }}" class="card-img-top" alt="...">
                            <p class="card-text">{{ $productData->product_price }}</p>
                            <p class="card-text">{{ $productData->descript }}</p>
                            @foreach ($productData->img as $photos)
                                <div class="photo" style="background-image: url('{{ $photos->photo }}');"></div>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script>
@endsection
