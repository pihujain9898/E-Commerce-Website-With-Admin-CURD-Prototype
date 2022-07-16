@extends('layouts.main')

@section('main-section')
    <video autoplay loop class="home-header-bg" muted plays-inline id="bgVideo">
        <source src="img/bg.mp4" type="video/mp4" playbakrate>
    </video>
    <script>
        var vid = document.getElementById("bgVideo");
        vid.playbackRate = 0.5;
    </script>
    <div class="form-wrapper">

        <form action="{{url('/login')}}" method="post" name="myform">
            @csrf
            <h3 style="border-bottom: 2px solid rgb(223, 223, 223); padding-bottom:.6em">Login here</h3>
            @if (Session::has('error'))
            <span class="text-danger">{{ Session::get('error') }}</span>
            @endif
            <div class="form-item">
                <input type="text" name="user" required="required" placeholder="Username" autofocus required value="{{old("user")}}"></input>
                <span class="text-danger">
                    @error('user')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="form-item">
                <input type="password" name="password" required="required" placeholder="Password" required></input>
                <span class="text-danger">
                    @error('password_new')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="button-panel">
                <input type="submit" class="button" title="Log In" name="login" value="Login"></input>
            </div>
        </form>
        <div class="reminder">
            <center>
                <a href="{{ url('auth/facebook') }}"><img class="login-icon" src="{{ asset('img/facebook.png') }}" alt="Google Icon"></a>
                <a href="{{ url('auth/google') }}"><img class="login-icon" src="{{ asset('img/search.png') }}" alt="Google Icon"></a>
                <a href="{{ url('auth/github') }}"><img class="login-icon" src="{{ asset('img/github.png') }}" alt="Google Icon"></a>
            </center>
            <a href="/signup" id="siginup-page">Not a member? Sign up now</a>
            <p><a href="#">Forgot password?</a></p>
        </div>
    </div>
@endsection