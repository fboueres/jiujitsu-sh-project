<x-app-layout>
    <form
        action="{{ route('students.update', $student) }}"
        method="post"
        class="flex h-full flex-col text-slate-800"
    >
        <div class="mx-3 mt-3 flex items-baseline justify-between">
            <h1 class="text-3xl font-bold">Editar Aluno</h1>
            <div class="flex flex-wrap gap-3">
                <a
                    href="{{ URL::previous() }}"
                    class="appearance-none rounded border px-3 py-2 leading-tight shadow transition-transform duration-200 ease-in-out focus:outline-none active:scale-90"
                >
                    <i class="fa-solid fa-arrow-left fa-md"></i>
                    <span class="text-md pl-3 font-bold">Voltar</span>
                </a>
                <button
                    type="submit"
                    class="appearance-none rounded border px-3 py-2 leading-tight shadow transition-transform duration-200 ease-in-out focus:outline-none active:scale-90"
                >
                    <i class="fa-solid fa-pen-to-square fa-md"></i>
                    <span class="text-md pl-3 font-bold">Salvar</span>
                </button>
            </div>
        </div>
        <hr class="mx-3 mt-3 border-zinc-300" />
        @csrf
        <div class="flex-1 overflow-y-auto px-3 py-6">
            @include('students._form')
        </div>
    </form>
</x-app-layout>
