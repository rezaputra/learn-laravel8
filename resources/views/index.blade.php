<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                @include('component.header')
            </div>
        </div>

        <div class="row">
            <div class="col">
                <p>home pages</p>
                @for ($i = 1; $i <= 10; $i++)
                  <p> this is loop {{ $i }}  </p>
                
                @endfor
            </div>

        </div>

        <div class="row">
            <div class="col fixed-bottom">
                @include('component.footer')
            </div>
        </div>
    </div>
</body>
</html>