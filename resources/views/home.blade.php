<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>Brainiac | Sistemas Expertos</title>

      <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

      <style>
         @import url('https://fonts.googleapis.com/css?family=Alegreya+Sans');
         body {
            font-family: 'Alegreya Sans', sans-serif;
            padding: 30px;
            padding-left: 50px;
            padding-right: 50px;
            background: url('images/bg-img.jpg');
            width: 100%;
            overflow-x: hidden;
         }

         .spinner-ps {
            width: 80px;
            height: 80px;
            border: 2px solid #f3f3f3;
            border-top: 3px solid #f25a41;
            border-radius: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            animation: spin 1s infinite linear;
         }

         @keyframes spin {
            from {
               transform: rotate(0deg);
            }
            to {
               transform: rotate(360deg);
            }
         }

         #overlay-ps {
            height: 100%;
            width: 100%;
            background: rgba(119, 117, 117, 0.4);
            position: fixed;
            left: 0;
            top: 0;
         }
      </style>

   </head>
   <body>
      <div id="overlay-ps">
         <div class="spinner-ps"></div>
      </div>
      <div id="app"></div>

      <script src="{{ asset('/js/app.js') }}"></script>
      <script>
         $(window).on('load', function() {
            $('#overlay-ps').css('display', 'none');
         });
      </script>
   </body>
</html>
