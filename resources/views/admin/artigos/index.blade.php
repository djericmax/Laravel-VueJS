@extends('layouts.app')

@section('content')
<pagina tamanho="12">
    <painel titulo="Lista de artigos">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        
        <modallink tipo="link" nome="meuModalTeste" titulo="Criar" css="info"></modallink>

        <tabela-lista
        v-bind:titulos="['#','Título','Descrição','Carga horária']"
        v-bind:itens="[[1, 'PHP OO', 'Curso de PHP OO','240 horas'],[2, 'Vue JS', 'Curso de Vue JS','320 horas'],[3, 'Net Core', 'Curso de .Net Core','420 horas']]"
        ordem="desc" ordemcol="1"
        criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="123321123321"
        
        
        
        ></tabela-lista>
        
    </painel>
</pagina>

<modal nome="meuModalTeste">

    <painel titulo="Adicionar">
    <formulario css="" action="#" method="put" enctype="multipart/form-data" token="12345">
        <div class="form-group">
            <label for="titulo">Titulos</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título"> 
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição">
        </div>
        <div class="form-group">
            <label for="cargahoraria">Carga horária</label>
            <input type="text" class="form-control" id="cargahoraria" name="cargahoraria" placeholder="Carga horária">
        </div>
        <button class="btn btn-info">Adicionar</button>
    </formulario>
    </painel>

</modal>

@endsection
