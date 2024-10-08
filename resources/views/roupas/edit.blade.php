<x-app-layout>

    <h5>Alterar Categoria</h5>

    <form action="/roupa/{{$roupa->id}}" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
            <div class="col">
            <div class="col">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{$roupa->nome}}"/>
            </div>
            <div class="col">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" name="marca" class="form-control" value="{{$roupa->marca}}"/>
            </div>
            <div class="col">
                <label for="tamanho" class="form-label">Tamanho:</label>
                <input type="text" name="tamanho" class="form-control" value="{{$roupa->tamanho}}"/>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>