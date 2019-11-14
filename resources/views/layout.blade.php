<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <style>
        body{
            padding-top: 48px;
        }
        .is-complete{
           text-decoration: line-through; 
        }
    </style>
</head>
<body>
    <div class="container">

        @yield('content')

    </div>
</body>
</html>