<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-sky-800 p-8">
    @session('message')
        <div class="bg-green-100 outline outline-green-700 text-green-700 rounded-md flex justify-center items-center w-fit h-fit py-1 px-4 z-10 mx-auto">
            {{session('message')}}
        </div>
    @endsession
    {{ $slot }}
</body>
</html>