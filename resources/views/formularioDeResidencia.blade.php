@extends('principal')
@section('conteudo')
<form action="/produtos/adiciona" method="post">

    <input type="hidden" name="_token"value="{{ csrf_token()}}" />

    <div class="form-group">
        <label>Descrição</label>
        <input name="descricao" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Comodos</label>
        <input name="comodos" class="form-control"/>
    </div>

    <div class="form-group">
        <label>Numero</label>
        <input name="numero" class="form-control"/>
    </div>
    
    <button class="btn btn-primary" type="submit">Cadastrar</button>
</form>
@stop