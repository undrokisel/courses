<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM' crossorigin='anonymous'>
    </script>



    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-around">
        <a class="navbar-brand" href="{{route('home')}}">Home page</a>
        <form action="{{ route('logout') }}" id="logout" class="d-none" method="POST">
            @csrf
        </form>
        <button form="logout" type="submit" class='text-dark btn btn-outline'>Logout</button>
    </nav>

    <div class="container">

        <main>
            @yield('content')
        </main>

    </div>

</body>

</html>