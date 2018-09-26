@extends('adminlte::page')
@section('title', 'Funcionários')
@section('content_header')
<h1>Funcionários</h1>
<ol class="breadcrumb">
    <li><a href="">Dashboard</a></li>
    <li><a href="">Funcionários</a></li>
</ol>

@stop
@section('content')
<div class="box">
    <div class="box-header">
        <a href="{{ 'admin/create-employee' }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden></i> Cadastrar</a>
    </div>
    <div class="col-sm-4">
        <div class="box-body">
            @include('admin.includes.alerts')
            
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ $employees }}</h3>
                    <h4> Funcionários cadastrados </h4>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">Ver Todos <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
</div>
@stop