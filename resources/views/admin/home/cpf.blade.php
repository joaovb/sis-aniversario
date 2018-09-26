@extends('adminlte::page')

@section('title', 'Consultar CPF')

@section('content_header')
   <h1>Comprovante de Situação Cadastral no CPF</h1>

        <ol class="breadcrumb">
        <li><a href="">Dashborad</a></li>
        <li><a href="">Consultar CPF</a></li>
    </ol>
@stop

@section('content') 

<div class="box">
        <div class="box-header">
        <h3>Consulta de CPF</h3>
           <p>Informe abaixo a numeração do CPF,sem pontos e vírgulas e clique e verificar.</p>
        </div>
        <div class="box-body">

        @include('admin.includes.alerts')

        <form method="POST" action="{{ route('admin.cpf-check') }}">
        
            {!! csrf_field() !!}
            
            <div class="form-group">
                <input type="text" name="cpf" class="form-control" placeholder="Digite o CPF:">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Verificar</button>
            </div>
        </form>

        </div>
               
    </div>
@stop