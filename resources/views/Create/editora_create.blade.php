<x-app-layout>
    <link href="/css/criar.css" rel="stylesheet" type="text/css" />

    <div class="p-6">
        <div class="conteiner">
            <div class="card">
                <form class="card-form" action="{{ route('editoras.store') }}" method="post">
                    @csrf
                    @if ($errors->any())
                    <div
                        class="bg-red-100 dark:bg-red-900 border-l-4 border-red-500 dark:border-red-700 text-red-900 dark:text-red-100 p-3 rounded-lg mb-4">
                        @foreach ($errors->all() as $error)
                            <p class="text-sm font-semibold">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                    <div class="input">
                        <input class="input-field" type="text" name="nome" value="{{ old('nome') }}">
                        <label class="input-label">Nome*</label>
                    </div>

                    <div class="input">
                        <input id="telefone_editora" class="input-field" type="text" name="telefone" value="{{ old('telefone') }}">
                        <label class="input-label">Telefone*</label>
                    </div>

                    <div class="input">
                        <input class="input-field" type="text" name="email" value="{{ old('email') }}">
                        <label class="input-label">Email*</label>
                    </div>

                    <div class="input">
                        <input class="input-field" type="text" name="site" value="{{ old('site') }}">
                        <label class="input-label">Site*</label>
                    </div>

                    <div class="action">
                        <button type="submit" class="action-button">Adicionar</button>
                    </div>

                    <p class="card-info">Preencha os campos abaixo para adicionar uma nova editora ao catálogo.</p>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('telefone_editora').addEventListener('input', function(event) {
            let input = event.target.value;

            input = input.replace(/\D/g, '');

            if (input.length > 11) {
                input = input.substring(0, 11);
            }
            if (input.length <= 2) {
                input = input.replace(/^(\d{0,2})/, '($1');
            } else if (input.length <= 7) {
                input = input.replace(/^(\d{2})(\d{0,5})/, '($1) $2');
            } else {
                input = input.replace(/^(\d{2})(\d{5})(\d{0,4})/, '($1) $2-$3');
            }

            event.target.value = input;
        });
       </script>
</x-app-layout>
