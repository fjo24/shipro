@extends('layouts.admin')

@section('title', 'Shipro Internacional')

@section('content')
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<div class="right_col" role="main">
    <div class="row">
        <div class="col-sm-12">
            {!!Form::open(['route'=>'orders.store', 'method'=>'POST', 'files' => true])!!}
            <div class="col-sm-4">
                    <div class="form-group col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Remitente</div>
                            <div class="panel-body">
                                <div class="form-group col-md-12">
                                    {!!Form::label('Apellido y Nombre:')!!}
                                    {!!Form::text('nombre', null , ['class'=>'input-large', 'placeholder'=>'Apellidos y nombre', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!!Form::label('Email:')!!}
                                    {!!Form::text('email', null , ['class'=>'input-large', 'placeholder'=>'Correo Electronico', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12 no-margin-bottom">
                                    <div class="form-group col-md-6 no-padding-left">
                                        <div class="form-group">
                                            {!!Form::label('Tipo:')!!}
                                            {!!Form::text('document_type', null , ['class'=>'input-medium', 'placeholder'=>'Tipo de doc', 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            {!!Form::label('Documento:')!!}
                                            {!!Form::text('document_num', null , ['class'=>'input-medium', 'placeholder'=>'num de doc', 'required'])!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    {!!Form::label('Celular:')!!}
                                    {!!Form::text('telephone', null , ['class'=>'input-large', 'placeholder'=>'Telefono', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!!Form::label('Pais origen:')!!}
                                    {!!Form::text('from_country', null , ['class'=>'input-large', 'placeholder'=>'Seleccione pais', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12 no-margin-bottom">
                                    <div class="form-group col-md-6 no-padding-left">
                                        <div class="form-group">
                                            {!!Form::label('Calle:')!!}
                                            {!!Form::text('street', null , ['class'=>'input-medium', 'placeholder'=>'Calle', 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            {!!Form::label('Altura:')!!}
                                            {!!Form::text('altura', null , ['class'=>'input-medium', 'placeholder'=>'Alturo', 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 no-padding-left">
                                        <div class="form-group col-md-6 no-padding-left">
                                            <div class="form-group">
                                                {!!Form::label('Piso:')!!}
                                                {!!Form::text('floor', null , ['class'=>'input-small', 'placeholder'=>'Piso', 'required'])!!}
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                {!!Form::label('Dpto:')!!}
                                                {!!Form::text('departament', null , ['class'=>'input-small', 'placeholder'=>'Dpto', 'required'])!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            {!!Form::label('Codigo Postal:')!!}
                                            {!!Form::text('postal_code', null , ['class'=>'input-medium', 'placeholder'=>'Codigo Postal', 'required'])!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 no-margin-bottom">
                                    <div class="form-group col-md-6 no-padding-left">
                                        <div class="form-group">
                                            {!!Form::label('Ciudad:')!!}
                                            {!!Form::text('city', null , ['class'=>'input-medium', 'placeholder'=>'Ciudad', 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            {!!Form::label('Estado:')!!}
                                            {!!Form::text('state', null , ['class'=>'input-medium', 'placeholder'=>'Estado', 'required'])!!}
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group col-md-12">
                                        {!!Form::label('Otra info:')!!}
                                        {!!Form::text('info', null , ['class'=>'input-large', 'placeholder'=>'Otra info', 'required'])!!}
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="form-group col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Destinatario</div>
                            <div class="panel-body">
                                <div class="form-group col-md-12">
                                    {!!Form::label('Apellido y Nombre:')!!}
                                    {!!Form::text('name', null , ['class'=>'input-large', 'placeholder'=>'Apellidos y nombre', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!!Form::label('Email:')!!}
                                    {!!Form::text('email', null , ['class'=>'input-large', 'placeholder'=>'Correo Electronico', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12 no-margin-bottom">
                                    <div class="form-group col-md-6 no-padding-left">
                                        <div class="form-group">
                                            {!!Form::label('Tipo:')!!}
                                            {!!Form::text('document_type', null , ['class'=>'input-medium', 'placeholder'=>'Tipo de doc', 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            {!!Form::label('Documento:')!!}
                                            {!!Form::text('document_num', null , ['class'=>'input-medium', 'placeholder'=>'num de doc', 'required'])!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    {!!Form::label('Celular:')!!}
                                    {!!Form::text('telephone', null , ['class'=>'input-large', 'placeholder'=>'Telefono', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!!Form::label('Pais destino:')!!}
                                    {!!Form::text('to_country', null , ['class'=>'input-large', 'placeholder'=>'Seleccione pais', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12 no-margin-bottom">
                                    <div class="form-group col-md-6 no-padding-left">
                                        <div class="form-group">
                                            {!!Form::label('Calle:')!!}
                                            {!!Form::text('street', null , ['class'=>'input-medium', 'placeholder'=>'Calle', 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            {!!Form::label('Altura:')!!}
                                            {!!Form::text('street_height', null , ['class'=>'input-medium', 'placeholder'=>'Altura', 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 no-padding-left">
                                        <div class="form-group col-md-6 no-padding-left">
                                            <div class="form-group">
                                                {!!Form::label('Piso:')!!}
                                                {!!Form::text('floor', null , ['class'=>'input-small', 'placeholder'=>'Piso', 'required'])!!}
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                {!!Form::label('Dpto:')!!}
                                                {!!Form::text('departament', null , ['class'=>'input-small', 'placeholder'=>'Dpto', 'required'])!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            {!!Form::label('Codigo Postal:')!!}
                                            {!!Form::text('postal_code', null , ['class'=>'input-medium', 'placeholder'=>'Codigo Postal', 'required'])!!}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 no-margin-bottom">
                                    <div class="form-group col-md-6 no-padding-left">
                                        <div class="form-group">
                                            {!!Form::label('Ciudad:')!!}
                                            {!!Form::text('city', null , ['class'=>'input-medium', 'placeholder'=>'Ciudad', 'required'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="form-group">
                                            {!!Form::label('Estado:')!!}
                                            {!!Form::text('state', null , ['class'=>'input-medium', 'placeholder'=>'Estado', 'required'])!!}
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-group col-md-12">
                                        {!!Form::label('Otra info:')!!}
                                        {!!Form::text('info', null , ['class'=>'input-large', 'placeholder'=>'Otra info', 'required'])!!}
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="form-group col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Datos del envio</div>
                            <div class="panel-body">
                                <div class="form-group col-md-12">
                                    {!!Form::label('Servicio:')!!}
                                    <!-- select -->
                                    {!!Form::text('service', null , ['class'=>'input-large', 'placeholder'=>'Seleccione servicio', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!!Form::label('Documento o muestra:')!!}
                                    <!-- select dos opciones documento/muestra -->
                                    {!!Form::text('service', null , ['class'=>'input-large', 'placeholder'=>'Seleccione servicio', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12">
                                    {!!Form::label('Fecha:')!!}
                                    {!!Form::text('date', null , ['class'=>'input-large', 'placeholder'=>'Fecha', 'required'])!!}
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="form-group col-md-4">
                                        {!!Form::label('Peso:')!!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <input type="weight" id="weight" class="input-large" onchange="suma();" />
                                    </div>
                                </div>
                                <div class="form-group col-md-12 no-padding-left">
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            {!!Form::label('Largo:')!!}

                                            <input type="long" id="long" class="input-small" onchange="suma();" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            {!!Form::label('Ancho:')!!}
        
                                            <input type="width" id="width" class="input-small" onchange="suma();" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            {!!Form::label('Alto:')!!}
                                
                                        <input type="height" id="height" class="input-small" onchange="suma();" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="form-group col-md-8">
                                        {!!Form::label('Peso volumetrico:')!!}
                                        </div>
                                        <div class="form-group col-md-4">
                                        {!!Form::text('volumetric_weight', null , ['class'=>'input-large', 'placeholder'=>'', 'required', 'disabled' => 'true', 'id'=>'volumetric_weight'])!!}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="form-group col-md-8">
                                            <span class="label_peso_a_calcular" style="font-size: 17px;
    font-weight: bold;">El peso aplicable al calculo: </span> 
                                        </div>
                                        <div class="form-group col-md-4">
                                            <h3 class="peso_a_calcular text-left"><span class="label label-info" id="resultado">0</span></h3>
                                        </div>
                                            {!!Form::hidden('total', null , ['class'=>'input-large input-total', 'placeholder'=>'', 'required', 'disabled' => 'true', 'id'=>'total'])!!}
                                    </div>
                                    <input type="button" value="suma">
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="text-center col-md-12 col-sm-12 no-padding">
                    <button class="btn btn-primary right" name="action" type="submit">
                        Continuar y Guardar
                    </button>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('js/form.js')}}"></script>
@endsection