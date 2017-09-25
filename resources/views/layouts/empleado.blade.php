<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
   <title>ONLY API</title>
</head>
<body>
<br><br><br>
   <div class="container">
      <div class='alert alert-primary'>Cuadros estadisticos</div>
    @yield('content')
   </div>

   @stack('cuadro1')
   @stack('cuadro2')
</body>
</html>