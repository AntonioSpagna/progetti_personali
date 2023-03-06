<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <title>Aulab Post</title>
</head>
<body>
    <x-navbar/>
    <div class=" my-5">
        {{$slot}}
    </div>
    <script src="https://kit.fontawesome.com/58c29b2b44.js" crossorigin="anonymous"></script>
</body>
</html>