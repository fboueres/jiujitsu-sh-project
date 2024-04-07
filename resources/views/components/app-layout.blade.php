<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        />
    </head>
    <body class="flex flex-1 flex-nowrap bg-white">
        <aside
            class="flex h-screen w-72 flex-col from-white via-zinc-100 to-zinc-200 py-6"
        >
            <figure
                class="mx-auto mb-6 flex aspect-square h-36 items-center rounded-full border-8 border-zinc-200 p-3"
            >
                <img src="/img/sidebar-img.png" alt="ADM Faixa Preta Ícone" />
            </figure>
            <hr class="mx-3 mb-5 border-zinc-300" />
            <ul class="flex-1 px-3 py-1">
                <li
                    class="mb-3 transform rounded-lg bg-gradient-to-br transition-transform duration-300 hover:scale-105 active:scale-95 active:duration-200"
                >
                    <a
                        href="{{ route('students.index') }}"
                        class="block h-full w-full rounded-lg p-3 text-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-300"
                    >
                        <i
                            class="fa-solid fa-graduation-cap fa-lg inline-block align-middle"
                        ></i>
                        <span class="ml-3 inline-block align-middle">
                            Alunos
                        </span>
                    </a>
                </li>
                <li
                    class="mb-3 transform rounded-lg bg-gradient-to-br transition-transform duration-300 hover:scale-105 active:scale-95 active:duration-200"
                >
                    <a
                        href="#"
                        class="block h-full w-full rounded-lg p-3 text-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-300"
                    >
                        <i
                            class="fa-solid fa-id-card-clip fa-lg inline-block align-middle"
                        ></i>
                        <span class="ml-3 inline-block align-middle">
                            Professores
                        </span>
                    </a>
                </li>
                <li
                    class="mb-3 transform rounded-lg bg-gradient-to-br transition-transform duration-300 hover:scale-105 active:scale-95 active:duration-200"
                >
                    <a
                        href="#"
                        class="block h-full w-full rounded-lg p-3 text-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-300"
                    >
                        <i
                            class="fa-solid fa-chalkboard-user fa-lg inline-block align-middle"
                        ></i>
                        <span class="ml-3 inline-block align-middle">
                            Turmas
                        </span>
                    </a>
                </li>
            </ul>
        </aside>
        <main
            {{ $attributes->merge(['class' => 'h-screen w-full overflow-y-auto']) }}
        >
            {{ $slot }}
        </main>
    </body>
</html>
