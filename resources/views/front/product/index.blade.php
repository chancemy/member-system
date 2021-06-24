@extends('layouts.template')
@section('css')

@endsection
@section('main')
    <div class="container">
        <div class="row">
            @foreach ($productDatas as $productData)
                <div class="card col-3" style="width: 18rem;">
                    <img src="{{ $productData->main_photo }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $productData->product_name }}</h5>
                    <p class="card-text">{{ $productData->product_price }}</p>
                    <p class="card-text">{{ $productData->descript }}</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $productData->id }}">
                        詳細介紹
                    </button>
                    </div>
                </div>

                <div class="modal fade" id="{{ $productData->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          ...
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
