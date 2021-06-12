
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>halaman login</title>
        <link href="{{ secure_asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    </head>
    <body>
        <form class="box" action="/proses" method="POST">
            @csrf
            <h1>Login</h1>
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
            
        </form>
        <script type="text/javascript" src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
    </body>
    
</html>
