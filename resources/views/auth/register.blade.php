@extends('auth.layout')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="card form-holder my-5">
                    <div class="card-body">
                        <h1>Register</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif

                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="form-group py-2">
                                {{-- <label>Name</label> --}}
                                <input type="text" name="name" class="form-control" placeholder="name" />
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>

                            <div class="form-group py-2">
                                {{-- <label>Email</label> --}}
                                <input type="email" name="email" class="form-control" placeholder="Email" />
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="form-group py-2">
                                {{-- <label>Password</label> --}}
                                <input type="password" name="password" class="form-control" placeholder="Password" />
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group py-2">
                                {{-- <label>Confirm Password</label> --}}
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Password Confirmation" />
                            </div>

                            <div class="row">
                                <div class="col-8 text-left">
                                    
                                </div>
                                <div class="col-4 text-right">
                                    <input type="submit" class="btn btn-primary" value=" Register " />
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('login') }}" class="btn btn-link">Already have an Account? Log In.</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection