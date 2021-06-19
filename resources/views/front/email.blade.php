@extends('layouts.master')

@section('main')
    <div class="container-contact100">
        <div class="wrap-contact100">
            <div class="contact100-pic js-tilt" data-tilt>
                <img src="{{ asset('img/img-01.png') }}" alt="IMG">
            </div>

            <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
                @csrf
                <span class="contact100-form-title">Me contacter</span>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <input class="input100" type="text" name="name" placeholder="Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i></span>
                    @error('name')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Subject is required">
                    <input class="input100" type="text" name="subject" placeholder="subject">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i></span>
                    @error('subject')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>


                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <textarea class="input100" name="content" placeholder="Message"></textarea>
                    <span class="focus-input100"></span>
                    @error('content')
                    <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn">
                        Envoyer
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
