<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bgColor text-white    ">
    <nav class=" flex  justify-around  p-4    z-50  border-b-blue-900  border-b-2">

        <div class="flex items-center gap-2">
        <img src="/images/logoicon.png" class=" w-4 h-4" alt="">
            <p class=" text-xl ">Logo</p>
        </div>
        <div class=" ">
                <a class=" ml-8 " href="">nav</a>
                <a class=" ml-8 " href="">nav</a>
                <a class=" ml-8 " href="">nav</a>
                <a class=" ml-8 " href="">nav</a>
                <a href="/login">
                    <button class=" bg-yellow-200 py-1 px-4 text-black rounded-lg ml-8">Login</button>
                </a>

        </div>

    </nav>
    <header class="">
        <div class=" h-screen      flex items-center justify-center">
            <div class="flex flex-col z-50">
                <p class=" text-5xl ">Visualiza tus calificaciones <br> en nuestra web</p>
                <a href="/login" class="  ">
                    <button class="cursor-pointer hover:bg-blue-800 duration-300 bg-blue-500 p-1 px-4 w-full mt-4   rounded-lg ">Inicia sesión ahora</button>
                </a>

            </div>

            <img src="/images/img.png" class=" z-10" alt="">
        </div>
        <img src="/images/hero.png" alt="xdd" class=" -z-50  absolute  bottom-0 h-screen left-0  object-cover     ">
    </header>

</body>
</html>
