@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1 class="text-center">LOGIN</h1>
            <div class="card">
                <div class="container">
                    <main class="form-signin w-100 m-auto mt-3">
                        <form>
                            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72"
                                height="57"> --}}

                            <h5 class="h5 mb-3 fw-normal text-muted text-center">Please Login</h5>

                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>

                            {{-- <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div> --}}
                            <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Login</button>
                            {{-- <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p> --}}
                        </form>
                        <small class="d-block text-center mt-3 mb-3">Not registered?
                            <a href="/register">Register now !!!</a>
                        </small>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
