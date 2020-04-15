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
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </painel>

</modal>

@endsection
