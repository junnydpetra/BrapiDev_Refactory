
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

        <title>Sign In</title>

        <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    </head>

    <body class="text-center">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-person-bounding-box"
                    viewBox="0 0 16 16"> <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/></svg><br>

                    <form method="post" action="{{route('auth')}}">
                        @csrf
                        <div class="form-group">
                            <label for="inputEmail" class="sr-only mt-1">Email</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="sr-only mt-2">Password</label>
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="pt-2"><button class="btn btn-lg btn-primary btn-block" type="submit">
                            Entrar
                        </button></div>
                    </form>

                    <div class="checkbox mt-1">
                        <label>
                            <input type="checkbox" value="remember-me">Lembrar
                        </label>
                    </div>
                 </div>
            </div>
        </div>
    </body>
</html>
