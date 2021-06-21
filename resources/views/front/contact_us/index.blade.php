@extends('layouts.template')
@section('css')

@endsection
@section('main')
<!--Section: Contact v.2-->
<section class="mb-4 container">
    @if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
    @endif
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">有任何問題請聯絡我們謝謝</p>
    <div class="row">
        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="{{ asset('/index/contact_us/store') }}" method="POST">
                <!--Grid row-->
                @csrf
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6 ">
                        <div class="md-form mb-0">
                            <label for="name" class="">姓名</label>

                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                name="name" class="form-control" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">信箱</label>

                            <input type="text" id="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" class="form-control" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="title" class="">主旨</label>

                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-12">
                        <div class="md-form">
                            <label for="content">內容</label>

                            <textarea type="text" id="content" name="content" rows="2" class="form-control md-textarea"
                                required></textarea>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left">
                    <button type="submit" class="btn btn-outline-success mt-2">送出</button>
                </div>
            </form>

            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
@endsection
@section('js')

@endsection
