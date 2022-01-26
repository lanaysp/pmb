@extends('layouts.auth-master')

@section('content')
<div class="col-12">
    <div class="row">
        <div class="card card-primary col-7">
            <div class="card-header"></div>
            <div class="card-body">
                <iframe width="720" height="400" src="https://www.youtube.com/embed/fLFiz_y9YdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="card card-primary col-5">
            <div class="card-header"><h4>Register</h4></div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input id="nisn" type="number" class="form-control{{ $errors->has('nisn') ? ' is-invalid' : '' }}" name="nisn" tabindex="1" placeholder="NISN" value="{{ old('nisn') }}" autofocus>
                    <div class="invalid-feedback">
                        {{ $errors->first('nisn') }}
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="name">NAMA LENGKAP</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" tabindex="1" placeholder="Full name" value="{{ old('name') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="pob">TEMPAT LAHIR</label>
                    <input id="pob" type="text" class="form-control{{ $errors->has('pob') ? ' is-invalid' : '' }}" name="pob" tabindex="1" placeholder="Tempat Lahir" value="{{ old('pob') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('pob') }}
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="dob">TGL LAHIR</label>
                    <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" tabindex="1" placeholder="Tanggal Lahir" value="{{ old('dob') }}" >
                    <div class="invalid-feedback">
                        {{ $errors->first('dob') }}
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="tlp">NO HANDPHONE</label>
                    <input id="tlp" type="text" class="form-control{{ $errors->has('tlp') ? ' is-invalid' : '' }}" name="tlp" tabindex="1" placeholder="No Handphone" value="{{ old('tlp') }}">
                    <div class="invalid-feedback">
                        {{ $errors->first('tlp') }}
                    </div>
                    </div>


                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" name="email" tabindex="1" value="{{ old('email') }}" autofocus>
                    <div class="invalid-feedback">
                    {{ $errors->first('email') }}
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    Register
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="mt-5 text-muted text-center">
 Already have an account? <a href="{{ route('login') }}">Sign In</a>
</div>
@endsection
