@extends('principal')
@section('conteudo')
<h1>Lista de Residencias</h1>
    <table class="table">
    @foreach($residencias as $r)
        <tr>
            <td>{{$r->residencia_descricao}}</td>
            <td>{{$r->residencia_comodos}}</td>
            <td>{{$r->residencia_numero}}</td>
        </tr>
    @endforeach
    </table>

@stop