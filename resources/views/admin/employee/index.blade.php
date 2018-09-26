@extends('adminlte::page')

@section('title', 'Novo Funcionário')

@section('content_header')
    <h1>Novo Funcionário</h1>

        <ol class="breadcrumb">
        <li><a href="">Dashborad</a></li>
        <li><a href="">Funcionários</a></li>
        <li><a href="">Novo Funcionário</a></li>
    </ol>
@stop

@section('content') 

<div class="box">
        <div class="box-header">
           <h3> Novo Funcionário </h3>
        </div>
        <div class="box-body">

        @include('admin.includes.alerts')

        <form method="POST" action="{{ route('employee.create') }}">
        
            {!! csrf_field() !!}
            
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nome do Funcionário">
            </div>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="E-mail do Funcionário">
            </div>
            <div class="form-group">
                <input type="text" name="department" class="form-control" placeholder="Departamento">
            </div>
            <div class="form-group">
                <p class="h6">Data de Nascimento</p>
                <input type="date" name="birthdate" class="form-control">
            </div>
            <div class="form-group">
                <p class="h6">Sexo</p>
                <select name="genre" class="form-control">
                    <option>Masculino</option>
                    <option>Feminino</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>

        </div>
               
    </div>
@stop