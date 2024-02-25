<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      @vite('resources/css/app.css')

</head>
<body class="  h-screen">
                        <div
                            class=' bg-white flex h-screen rounded-lg drop-shadow-lg items-center'>
                            <div  class='w-full lg:w-1/2 px-5 md:px-16'>
                                <h3 class=' block text-4xl text-center lg:text-start font-medium italic mb-12'>Bienvenido de nuevo</h3>

                                <div class='flex flex-col gap-2 mb-8'>
                                    <label htmlFor="email" class='text-xl'>Correo</label>
                                    <input
                                        type="email"
                                        placeholder="Escribe tu correo"
                                        id="email"
                                        required
                                        class='text-lg placeholder:text-[#b1b1b1] placeholder:italic placeholder:font-light border-[1.5px] border-[#b1b1b1] px-3 py-2 rounded-lg ring-0 focus:outline-none focus:border-sky-500'
                                    />
                                </div>
                                <div class='flex flex-col gap-2 mb-6'>
                                    <label htmlFor="password" class='text-xl'>Contraseña</label>
                                    <input
                                        type="password"
                                        placeholder="*****"
                                        id="password"
                                        required
                                        class='text-lg placeholder:text-[#b1b1b1] placeholder:italic placeholder:font-light border-[1.5px] border-[#b1b1b1] px-3 py-2 rounded-lg ring-0 focus:outline-none focus:border-sky-500'
                                    />
                                </div>
                                <div class='flex flex-col mt-12'>
                                    <a href="/grades">
                                        <button type="submit" class='bg-[#043873] w-full h-14 text-white text-xl rounded-lg mb-12'>
                                            Iniciar Sesión
                                        </button>
                                    </a>
                                </div>

                            </div>
                        
                            <div class='w-1/2 '>
                                <img
                                src="/images/logo.jpg" alt="Descripción de la imagen"
                                    class='bg-center h-screen object-cover rounded-r-lg drop-shadow-md'
                                />
                            </div>
                        </div>
                    </body>
</html>