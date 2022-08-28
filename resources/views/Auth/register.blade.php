@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1 class="text-center">Registration Form</h1>
            <div class="card">
                <div class="container">
                    <main class="form-registration w-100 m-auto mt-3">
                        <form>
                            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72"
                                height="57"> --}}

                            <h5 class="h5 mb-3 fw-normal text-muted text-center">Please Register</h5>
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="name" placeholder="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="username">
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control" id="floatingPassword"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Register</button>
                            {{-- <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p> --}}
                        </form>
                        <small class="d-block text-center mt-3 mb-3">Already registered?
                            <a href="/login">Login Now !!!</a>
                        </small>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
