<nav class="bg-gray-800 border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('public.index') }}" class="flex items-center">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Examen Final</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400  dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col md:items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-800 md:flex-row md:space-x-8 md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('public.index') }}"
                        class="{{ request()->routeIs('public.index') ? 'nav-select' : 'nav-unselect' }}"
                        aria-current="page">Inicio</a>
                </li>
                <li>
                    <a href="{{ route('estudiantes.index') }}"
                        class="{{ request()->routeIs('estudiantes.index') ? 'nav-select' : 'nav-unselect' }} ">Estudiantes</a>
                </li>
                <li>
                    <a href="{{ route('carreras.index', ['id'=>1]) }}"
                        class="{{ request()->routeIs('carreras.index') ? 'nav-select' : 'nav-unselect' }} ">Carreras</a>
                </li>
                <li>
                    <a href="{{ route('carrera.index', ['id'=>1]) }}"
                        class="{{ request()->routeIs('carrera.index') ? 'nav-select' : 'nav-unselect' }} ">Carreras VUE</a>
                </li>
                <li>
                    @auth
                        <div class="hidden md:block">
                            @include('layouts.navigation')
                        </div>

                        <a href="{{ route('public.index') }}"
                            class="block md:hidden py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 md:px-3 md:py-2 md:font-bold md:text-center md:text-white md:bg-blue-400 md:hover:bg-blue-500 md:rounded-lg">Iniciar
                            Sesion</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
