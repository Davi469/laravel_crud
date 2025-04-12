<x-app-layout>
    <link href="/css/criar.css" rel="stylesheet" type="text/css" />

    <div class="p-6">
        @if (session()->has('message'))
            <div class="text-green-500 mb-4">
                {{ session()->get('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="conteiner">
            <div class="card">
                <form class="card-form" action="{{ route('editoras.store') }}" method="post">
                    @csrf

                    <div class="input">
                        <input class="input-field" type="text" name="nome" value="{{ old('nome') }}">
                        <label class="input-label">Nome</label>
                    </div>

                    <div class="input">
                        <input class="input-field" type="text" name="telefone" value="{{ old('telefone') }}">
                        <label class="input-label">Telefone</label>
                    </div>

                    <div class="input">
                        <input class="input-field" type="text" name="email" value="{{ old('email') }}">
                        <label class="input-label">Email</label>
                    </div>

                    <div class="input">
                        <input class="input-field" type="text" name="site" value="{{ old('site') }}">
                        <label class="input-label">Site</label>
                    </div>

                    <div class="action">
                        <button type="submit" class="action-button">Adicionar</button>
                    </div>

                    <p class="card-info">Preencha os campos abaixo para adicionar uma nova editora ao catálogo.</p>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
