<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link href="{{asset('admin/assets/img/LOGOthawat.png')}}" rel="icon">
  <link rel="stylesheet" href="{{asset('admin/assetslogin/login.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>เข้าสู่ระบบ</header>
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="field ">
        <div class="input-area">
          <input id="username" type="username" placeholder="Username" name="username" >
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Username can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input id="password" type="password" placeholder="Password" name="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
      <input type="submit" value="Login">
    </form>
    <div class="sign-txt">Not yet member? <a href="{{ route('register') }}">Signup now</a></div>
  </div>
  <script src="{{asset('admin/assetslogin/login.js')}}"></script>
</body>
</html>