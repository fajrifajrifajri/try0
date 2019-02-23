<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{config('app.name', 'Jasbuweb')}}</title>
<!--    <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans%7COswald" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/reset.css')}}">
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('inc.navbar')
        @yield('content')
        @include('inc.footer')
    </body>
</html>