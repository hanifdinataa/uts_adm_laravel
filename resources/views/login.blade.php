@extends('layouts.main')

@section('content')
    <main class="form-signin w-100 m-auto">
        <div class="row justify-content-center mt-4">
            <div class="col-4">
                <form method="post" action="/login">
                    @csrf  
                    
                    {{-- <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">   --}}  {{---tambah gambar ---}}

                    <h1 class="h3 mb-3 fw-normal text-center">SILAHKAN LOGIN</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"
                            name="email">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="form-check text-start my-3">
                        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>
                    <button class="btn btn-primary w-100 py-2  " type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-body-secondary text-center">&copy; {{ date('D-Y-T')}}</p>
                </form>
            </div>
        </div>


    </main>
@endsection
