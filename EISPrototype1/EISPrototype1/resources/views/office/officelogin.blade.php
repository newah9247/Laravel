<!DOCTYPE  html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Office-Login</title>
        <link rel="stylesheet" href="/css/officelogin.css"/>
        @include("layouts.Head");

    </head>
    <body>
        @include("layouts.Header");
        <br/>
        <h1 id="office-login" >Office Login</h1>
        <br/>
        
        <div id="login-entry-box" >
            <label for="username" class="entryLabel">Username</label>
            <input type="text" id="username" class="text-input" name="username"><br><br>
            <label for="password" class="entryLabel">Password</label>
            <input type="text" id="password" class="text-input" name="password"><br><br>
            <br>
            <a href="{{ route('officemain') }}" > <button type="Login" class="btn btn-danger">Login</button> </a>
        </div>
        <br/>
        <br/>
    </body>
    @include("layouts.Footer");
</html>
