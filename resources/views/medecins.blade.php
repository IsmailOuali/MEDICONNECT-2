<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center py-6 px-4 mt-2">
            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
            <div class="flex items-center justify-between w-full md:w-auto">
                <a href="/" aria-label="Home">MEDICONNECT</a>
                <div class="-mr-2 flex items-center md:hidden">
                <button type="button" id="main-menu" aria-label="Main menu" aria-haspopup="true" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg stroke="currentColor" fill="none" viewBox="0 0 24 24" class="h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                </div>
            </div>
            </div>
            <div class="hidden md:flex md:space-x-10">
                <a href="/profile"
                    class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Profil</a>
                <a href="#"
                    class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Consultation</a>
                <a href="/booking"
                    class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Prendre un rendez-vous</a>
                <a href="https://docs.pingping.io" target="_blank"
                    class="font-medium text-gray-500 hover:text-gray-900 transition duration-150 ease-in-out">Medecins</a>
                </div>
                <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                <span class="inline-flex">
                    <a href="/login" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium text-blue-600 hover:text-blue-500 focus:outline-none transition duration-150 ease-in-out">
                    Login
                    </a>
                </span>
                <span class="inline-flex rounded-md shadow ml-2">
                    <a href="/register" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 transition duration-150 ease-in-out">
                        Creer un compte
                    </a>
                </span>
            </div>
        </nav>
        <section class="bg-gray-100 h-screen flex items-center justify-center">
            <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
                    <a href="#" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                        View all
                    </a>
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        <li class="py-3 sm:py-4">
                            <div class="flex items-center ">
                                <div class="flex-1 min-w-0 ms-4">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Bonnie Green
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        email@windster.com
                                    </p>
                                </div>
                                <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    <a class="text-blue-300 underline" href="">ajouter au favoris</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </section>


        <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>