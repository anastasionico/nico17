<!DOCTYPE html>
<html lang="en">
    
<head>
    <title>anastasionico.uk | Login </title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <link rel="stylesheet" href="matrixAdmin/css/bootstrap.min.css" />
    <link rel="stylesheet" href="matrixAdmin/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="matrixAdmin/css/matrix-login.css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

    <style type="text/css">
        body{
            font-family: Comfortaa;
        }
    </style>
</head>
    <body>
        <div id="loginbox">            
            
            <form class="form-vertical" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
				<div class="control-group normal_text"> 
                    <h3>Anastasio<span>nico.uk</span></h3>
                </div>



                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lb"><i class="fa fa-user" aria-hidden="true"></i></span>
                            
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                            
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lb"><i class="fa fa-lock" aria-hidden="true"></i></span>

                            <input id="password" type="password"  name="password" required placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- <div class="control-group">
                    <div class="controls">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div> --}}
                <div class="form-actions">
                    {{-- <span class="pull-left">
                        <a href="{{ route('password.request') }}" class="flip-link btn btn-info" id="to-recover">Lost password?</a>
                    </span> --}}
                    <span class="pull-right">
                        <button type="submit" class="btn btn-success">Login</button>
                    </span>
                </div>
            </form>

            {{-- forgotten password form --}}
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="matrixAdmin/js/jquery.min.js"></script>  
        <script src="matrixAdmin/js/matrix.login.js"></script> 
    </body>

</html>
