<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title> Login </title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->
    <!-- Bootstrap core CSS -->
<!-- <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->

<style type="text/css">
		*{
		margin: 0px;
		padding: 0px;
	}
	body{
		font-size: 120%;
		background: #DBE8E7;
    text-align:center;
	}
	.header{
		width: 30%;
		margin:50px auto 0px;
		color: white;
		background: #CE0052;
		text-align: center;
		border:1px solid #CE0052;
		border-bottom: none;
		border-radius: 10px 10px 0px 0px;
		padding: 20px;
	}
	form{
		width: 30%;
		height: auto;
		margin: 0px auto;
		padding: 20px;
		border: 1px solid #CE0052;
		background: white;
		border-radius: 0px 0px 10px 10px;
	}
	.form-floating{
		margin: 10px 0px 10px 0px;
		}
	.form-floating label{
		display: block;
		text-align: left;
		margin: 3px;
	}
	.form-floating input{
		height: 30px;
		width:  93%;
		padding:  5px 10px;
		font-size: 16px;
		border-radius: 5px;
		border: 1px solid gray;
	}
	.btn{
		padding: 10px;
		font-size: 15px;
		color:white;
		background: #D10F5D;
		border:none;
		border-radius: 5px;
	} 
</style>

    <!-- Custom styles for this template -->
    <!-- <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet"> -->
  </head>



  <body >

	<div class="header">
		<h2>login</h2>
	</div>
  
  <form method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}
    
    <div class="form-floating">
    <label for="floatingInput">Email address</label>
    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="floatingInput" placeholder="Name@gmail.com" value="{{ old('email') }}">
      @if($errors->has('email'))
      <div class="invalid-feedback">
        {{ $errors->first('email')}}
      </div>
    @endif
    </div>
    
    <div class="form-floating">
      <label for="floatingPassword">Password</label>
      <input type="password" name="password" id="inputpassword" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="floatingPassword" placeholder="Password">
      @if($errors->has('password'))
      <div class="invalid-feedback">
        {{ $errors->first('password')}}
      </div>
    @endif
    </div>
    
    <div class="checkbox mb-4">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    
    <div class="form-floating">
    	<button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
	</div>
  </form>
  
  </body>
</html>