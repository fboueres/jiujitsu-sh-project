<x-app-layout class="flex flex-col text-slate-800">
    <div class="mx-3 mt-3 flex items-baseline justify-between">
        <h1 class="text-3xl font-bold">Lista de Alunos</h1>
        <div class="flex flex-wrap gap-3">
            <a
                href="{{ URL::previous() }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow transition-transform duration-200 ease-in-out hover:scale-105 focus:outline-none active:scale-95 active:duration-200"
            >
                <i class="fa-solid fa-arrow-left fa-md"></i>
                <span class="text-md pl-3 font-bold">Voltar</span>
            </a>
            <a
                href="{{ route('students.create') }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow transition-transform duration-200 ease-in-out hover:scale-105 focus:outline-none active:scale-95 active:duration-200"
            >
                <i class="fa-regular fa-square-plus fa-md"></i>
                <span class="text-md pl-3 font-bold">Cadastrar Novo Aluno</span>
            </a>
        </div>
    </div>
    <hr class="mx-3 my-3 border-zinc-300" />
    <div class="mb-6 flex-1 overflow-y-auto px-3">
        <table class="w-full table-auto">
            <thead class="sticky top-0 bg-slate-200">
                <tr>
                    <th class="px-2 py-2">Nome</th>
                    <th class="px-2 py-2">Gênero</th>
                    <th class="px-2 py-2">E-mail</th>
                    <th class="px-2 py-2">Número</th>
                    <th class="px-2 py-2">Data da Matrícula</th>
                    <th class="px-2 py-2">Ações</th>
                </tr>
            </thead>
            <tbody class="overflow-y-auto">
                @foreach ($students as $student)
                    <tr>
                        <th class="border px-4 py-4">
                            {{ $student->full_name }}
                        </th>
                        <th class="border px-4 py-4">
                            {{ $student->gender == 'M' ? 'Masculino' : 'Feminino' }}
                        </th>
                        <th class="border px-4 py-4">
                            {{ $student->email }}
                        </th>
                        <th class="phone-number border px-4 py-4">
                            {{ $student->phone_number }}
                        </th>
                        <th class="border px-4 py-4">
                            {{ date('d/m/y', $student->phone_number) }}
                        </th>
                        <th class="border px-4 py-4">
                            <div class="flex flex-wrap justify-between">
                                <a
                                    href="{{ route('students.edit', $student) }}"
                                    class="appearance-none rounded border px-3 py-2 leading-tight shadow transition-transform duration-200 ease-in-out hover:scale-105 focus:outline-none active:scale-95 active:duration-200"
                                >
                                    <i
                                        class="fa-solid fa-chalkboard-user fa-md"
                                    ></i>
                                </a>
                                <a
                                    href="{{ route('students.edit', $student) }}"
                                    class="appearance-none rounded border px-3 py-2 leading-tight shadow transition-transform duration-200 ease-in-out hover:scale-105 focus:outline-none active:scale-95 active:duration-200"
                                >
                                    <i
                                        class="fa-solid fa-pen-to-square fa-md"
                                    ></i>
                                </a>
                                <a
                                    href="{{ route('students.edit', $student) }}"
                                    class="appearance-none rounded border px-3 py-2 leading-tight shadow transition-transform duration-200 ease-in-out hover:scale-105 focus:outline-none active:scale-95 active:duration-200"
                                >
                                    <i
                                        class="fa-regular fa-trash-can fa-md"
                                    ></i>
                                </a>
                            </div>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
