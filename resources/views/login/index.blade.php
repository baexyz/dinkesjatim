<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link href="/css/signin.css" rel="stylesheet">

</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="/login" method="POST">
            @csrf
            <img class="mb-4" src="/icon/provjatim.png" alt="" width="70" height="100">
            <h1 class="h3 mb-3 fw-normal">Login Admin</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="username" autofocus>
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="password">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; Dinkes Jatim 2022</p>
        </form>
    </main>



</body>

</html>
