<section class="relative mb-6 flex flex-wrap rounded-lg border-2 px-3 py-5">
    <h2
        class="absolute -top-4 left-4 bg-white px-3 text-xl font-bold text-slate-800"
    >
        Dados do Aluno
    </h2>
    <div class="flex w-3/4 flex-wrap gap-3">
        <div class="w-5/12">
            <label
                class="text-md mb-2 block font-bold"
                for="student[full_name]"
            >
                Nome Completo
                <span class="text-red-400">*</span>
            </label>
            <input
                type="text"
                required
                name="student[full_name]"
                value="{{ old('student.full_name', @$student->full_name) }}"
                class="w-full appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div class="w-3/12">
            <label class="text-md mb-2 block font-bold" for="student[cpf]">
                CPF
            </label>
            <input
                type="text"
                name="student[cpf]"
                value="{{ old('student.cpf', @$student->cpf) }}"
                class="w-full appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div class="w-3/12">
            <label
                class="text-md mb-2 block font-bold"
                for="student[birth_date]"
            >
                Data de Nascimento
            </label>
            <input
                type="date"
                name="student[birth_date]"
                value="{{ old('student.birth_date', @$student->birth_date) }}"
                class="w-full appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div class="w-5/12">
            <label
                class="text-md mb-2 block font-bold"
                for="name=student[email]"
            >
                E-mail
                <span class="text-red-400">*</span>
            </label>
            <input
                type="email"
                required
                name="student[email]"
                value="{{ old('student.email', @$student->email) }}"
                class="w-full appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div class="w-3/12">
            <label class="text-md mb-2 block font-bold" for="student[gender]">
                Gênero
            </label>
            <select
                class="w-full appearance-none rounded border bg-white px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
                name="student[gender]"
            >
                <option disabled selected value>Selecione</option>
                <option
                    value="M"
                    @if (old('student.gender', @$student->gender) == 'M') selected @endif
                >
                    Masculino
                </option>
                <option
                    value="F"
                    @if (old('student.gender', @$student->gender) == 'F') selected @endif
                >
                    Feminino
                </option>
            </select>
        </div>
        <div class="w-3/12">
            <label
                class="text-md mb-2 block font-bold"
                for="student[enrollment_date]"
            >
                Data de Matrícula
            </label>
            <input
                type="date"
                name="student[enrollment_date]"
                value="{{ old('student.enrollment_date', @$student->enrollment_date) }}"
                class="w-full appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div class="w-5/12">
            <label
                class="text-md mb-2 block font-bold"
                for="student[phone_number]"
            >
                Número de Telefone
            </label>
            <input
                type="text"
                name="student[phone_number]"
                value="{{ old('student.phone_number', @$student->phone_number) }}"
                class="w-full appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div class="w-3/12">
            <label class="text-md mb-2 block font-bold">Turmas do Aluno</label>
            <a
                href="#"
                class="block w-full appearance-none rounded border px-3 py-2 text-center leading-tight shadow transition-transform duration-200 ease-in-out hover:scale-105 focus:outline-none active:scale-95 active:duration-200"
            >
                <i class="fa-solid fa-arrow-up-right-from-square fa-md"></i>
            </a>
        </div>
        <div class="w-3/12">
            <label
                class="text-md mb-3 block font-bold"
                for="student[is_paying]"
            >
                Aluno pagante?
            </label>
            <div class="flex flex-wrap justify-between px-5">
                <label
                    for="student[is_paying]-true"
                    class="cursor-pointer leading-tight"
                >
                    Sim
                    <input
                        type="radio"
                        name="student[is_paying]"
                        id="student[is_paying]-true"
                        class="ml-2 cursor-pointer"
                        value="1"
                        @if (old('student.is_paying', @$student->is_paying)) checked @endif
                    />
                </label>
                <label
                    for="student[is_paying]-false"
                    class="cursor-pointer leading-tight"
                >
                    Não
                    <input
                        type="radio"
                        name="student[is_paying]"
                        id="student[is_paying]-false"
                        class="ml-2 cursor-pointer"
                        value="0"
                        @if (!old('student.is_paying', @$student->is_paying)) checked @endif
                    />
                </label>
            </div>
        </div>
    </div>
    <div class="w-1/4 text-center">
        <label class="text-md mb-2 block font-bold" for="student[picture]">
            Foto do Aluno
        </label>
        <span
            class="mx-auto mb-6 flex aspect-square h-36 items-center rounded-full border-8 border-zinc-200 p-3"
        >
            <i class="fa-solid fa-user w-full text-7xl"></i>
        </span>
        <button
            type="button"
            class="w-24 appearance-none rounded border px-3 py-2 leading-tight shadow transition-transform duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-slate-300 active:scale-90"
        >
            <i class="fa-solid fa-upload fa-md"></i>
        </button>
    </div>
</section>
<div class="flex gap-x-3">
    <section
        class="relative flex w-1/2 flex-wrap gap-3 rounded-lg border-2 px-3 py-5"
    >
        <h2
            class="absolute -top-4 left-4 bg-white px-3 text-xl font-bold text-slate-800"
        >
            Endereço do Aluno
        </h2>
        <div>
            <label class="text-md mb-2 block font-bold" for="address[cep]">
                CEP
            </label>
            <input
                type="text"
                name="address[cep]"
                value="{{ old('address.cep', @$student->address->cep) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label class="text-md mb-2 block font-bold" for="address[uf]">
                Estado
            </label>
            <input
                type="text"
                name="address[uf]"
                value="{{ old('address.uf', @$student->address->uf) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label class="text-md mb-2 block font-bold" for="address[cidade]">
                Cidade
            </label>
            <input
                type="text"
                name="address[cidade]"
                value="{{ old('address.cidade', @$student->address->cidade) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label class="text-md mb-2 block font-bold" for="address[bairro]">
                Bairro
            </label>
            <input
                type="text"
                name="address[bairro]"
                value="{{ old('address.bairro', @$student->address->bairro) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label class="text-md mb-2 block font-bold" for="address[rua]">
                Rua
            </label>
            <input
                type="text"
                name="address[rua]"
                value="{{ old('address.rua', @$student->address->rua) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label class="text-md mb-2 block font-bold" for="address[numero]">
                Número
            </label>
            <input
                type="text"
                name="address[numero]"
                value="{{ old('address.numero', @$student->address->numero) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
    </section>
    <section
        class="relative flex w-1/2 flex-wrap gap-3 rounded-lg border-2 px-3 py-5"
    >
        <h2
            class="absolute -top-4 left-4 bg-white px-3 text-xl font-bold text-slate-800"
        >
            Responsáveis do Aluno
        </h2>
        <div>
            <label
                class="text-md mb-2 block font-bold"
                for="guardians[0][full_name]"
            >
                Nome Completo
            </label>
            <input
                type="text"
                name="guardians[0][full_name]"
                value="{{ old('guardians.0.full_name', @$student->guardians[0]['full_name']) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label
                class="text-md mb-2 block font-bold"
                for="guardians[1][full_name]"
            >
                Nome Completo
            </label>
            <input
                type="text"
                name="guardians[1][full_name]"
                value="{{ old('guardians.1.full_name', @$student->guardians[1]['full_name']) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label class="text-md mb-2 block font-bold" for="guardians[0][cpf]">
                CPF
            </label>
            <input
                type="text"
                name="guardians[0][cpf]"
                value="{{ old('guardians.0.cpf', @$student->guardians[0]['cpf']) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label class="text-md mb-2 block font-bold" for="guardians[1][cpf]">
                CPF
            </label>
            <input
                type="text"
                name="guardians[1][cpf]"
                value="{{ old('guardians.1.cpf', @$student->guardians[1]['cpf']) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label
                class="text-md mb-2 block font-bold"
                for="guardians[0][affiliation]"
            >
                Afiliação
            </label>
            <input
                type="text"
                name="guardians[0][affiliation]"
                value="{{ old('guardians.0.affiliation', @$student->guardians[0]['affiliation']) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
        <div>
            <label
                class="text-md mb-2 block font-bold"
                for="guardians[1][affiliation]"
            >
                Afiliação
            </label>
            <input
                type="text"
                name="guardians[1][affiliation]"
                value="{{ old('guardians.1.affiliation', @$student->guardians[1]['affiliation']) }}"
                class="appearance-none rounded border px-3 py-2 leading-tight shadow focus:outline-none focus:ring-2 focus:ring-slate-300"
            />
        </div>
    </section>
</div>
