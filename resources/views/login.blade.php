@extends('layouts.simply')
@section('title', 'Login Mitracom')
@section('content')

    <section class="container">

        <div class="login-container">
            <div class="circle circle-one"></div>
            <div class="form-container">

                @if ($errors->any())
                    <div class="alert alert-primary">
                        <span>
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </span>
                    </div>
                @endif

                @if (session('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <img src="{{ asset('build/assets/login-illustration.png') }}" alt="illustration" class="illustration" />
                <h1 class="opacity">Mitracom</h1>

                <form action="/authenticate" method="POST">

                    @csrf
                    <input type="text" name="username" id="username" placeholder="Username" />
                    <input type="password" name="password" id="password" placeholder="Password" />

                    <button type="submit" class="opacity">LOGIN</button>

                </form>

                <div class="register-forget opacity">
                    <span>Solusi Problem Komputer Anda</span>
                </div>
            </div>
            <div class="circle circle-two"></div>
        </div>

    </section>

@endsection
