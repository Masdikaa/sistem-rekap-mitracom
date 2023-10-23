@extends('layouts.simple')

@section('content')
    <!-- Hero -->
    <div class="hero bg-body-extra-light overflow-hidden">
        <div class="hero-inner">

            {{-- Container Form --}}
            <div class="content content-full text-center">

                <img class="my-4" src="{{ asset('build/assets/mitracom-icon.png') }}"
                    style=" width: 30%;
                      height: 30%;
                      max-width: 100%;
                      max-height: 100%;
                     "
                    alt="Mitracom">

                {{-- <h4 class="fw-bold mb-2">
                    Mitra<span class="fw-normal"><span class="text-city">com</span></span>
                </h4>

                <p class="fs-lg fw-medium text-muted mb-4">
                    Solusi Problem Komputer Anda
                </p> --}}

                <div class="row justify-content-center mb-4">

                    <div class="col-md-6 col-xl-4">
                        <div class="block block-rounded h-100 mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title text-start">Sign In to Your Account</h3>
                            </div>
                            <div class="block-content fs-sm p-3">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginError') }}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                <form action="/authenticate" method="POST">
                                    @csrf

                                    <div class="form-group text-start">
                                        <label class="text-muted" for="exampleInputEmail1">
                                            Username
                                        </label>
                                        <input type="text" class="form-control" id="usernamea" name="username" aria-describedby="emailHelp">
                                    </div>

                                    <div class="form-group text-start mt-4 md-4">
                                        <label class="text-muted" for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>

                                    <button class="btn btn-primary px-4 mt-4" type="submit">Login</button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            {{-- End Container Form --}}
        </div>
    </div>
    <!-- END Hero -->
@endsection
