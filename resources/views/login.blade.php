<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    {{$errmsg=""}}
    <center>
          <form action="login" method="POST">
              @csrf
            <br>
            <label for="uname">Username:</label>
            <input type="text" name="uname" id="uname"><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password"><br><br>
            <input type="submit" value="Login"><br>
            {{Session::get('message')}}

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
            </form>
      </center>
</body>
</html>
