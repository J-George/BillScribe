<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BillScribe</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700,800&display=swap" rel="stylesheet">        
        <link rel="stylesheet" type="text/css" href="css/app.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div id="app">
            <app></app>
        </div>
        <script type="text/javascript" src="js/vueapp.js"></script>
    </body>
</html>