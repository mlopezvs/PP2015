@extends('layouts.admin')

{{-- Page title --}}
@section('title')
Nueva categoría
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
{{ HTML::style('admin/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}
{{ HTML::style('admin/css/pages/form_layouts.css') }}
@stop


{{-- Page content --}}
@section('content_admin')
<section class="content-header">
    <!--section starts-->
    <h1>Agregar nueva categoría</h1>
</section>
<!--section ends-->
<section class="content">
    <!--main content-->
    <div class="row">
        <!--row starts-->
        <div class="col-lg-12">

            <!--basic form starts-->
            <div class="panel panel-danger">
                <div class="panel-body border">
                    {{ Form::open(['route' => 'administrador.categories.store', 'method' => 'POST', 'class' => 'form-horizontal form-bordered', 'files' => 'true']) }}

                            <div class="form-group @if($errors->has('titulo')) has-error @endif">
                                {{ Form::label('titulo', 'Titulo', ['class' => 'col-md-3 control-label']) }}
                                <div class="col-md-9">
                                    {{ Form::text('titulo', null, ['class' => 'form-control']) }}
                                    {{ $errors->first('titulo', '<span class="help-block">:message</span>') }}
                                </div>
                            </div>

                            <div class="form-group @if($errors->has('design')) has-error @endif">
                                {{ Form::label('design', 'Diseño', ['class' => 'col-md-3 control-label']) }}
                                <div class="col-md-9">
                                    <label class="checkbox-inline">
                                        {{ Form::radio('design', '0', 'checked',  ['id' => 'design-normal', 'class' => 'design']) }}
                                        Normal
                                    </label>
                                    <label class="checkbox-inline">
                                        {{ Form::radio('design', '1', null,  ['id' => 'design-portada', 'class' => 'design']) }}
                                        Portada
                                    </label>
                                    {{ $errors->first('design', '<span class="help-block">:message</span>') }}
                                </div>
                            </div>

                            <div id="portada">

                                <div class="form-group">
                                    {{ Form::label('logo', 'Logo', ['class' => 'col-md-3 control-label']) }}
                                    <div class="col-md-9">
                                        {{ Form::file('logo') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('imagen', 'Imagen', ['class' => 'col-md-3 control-label']) }}
                                    <div class="col-md-9">
                                        {{ Form::file('imagen') }}
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    {{ Form::label('imagen_descripcion', 'Titulo de imagen', ['class' => 'col-md-3 control-label']) }}
                                    <div class="col-md-9">
                                        {{ Form::text('imagen_descripcion', null, ['class' => 'form-control']) }}
                                        {{ $errors->first('imagen_descripcion', '<span class="help-block">:message</span>') }}
                                    </div>
                                </div>

                             </div>

                            <div class="form-group @if($errors->has('publicar')) has-error @endif">
                                {{ Form::label('publicar', 'Publicar', ['class' => 'col-md-3 control-label']) }}
                                <div class="col-md-9">
                                    <label class="checkbox-inline">
                                        {{ Form::radio('publicar', '1', null,  ['id' => 'publicar']) }}
                                        Si
                                    </label>
                                    <label class="checkbox-inline">
                                        {{ Form::radio('publicar', '0', null,  ['id' => 'publicar']) }}
                                        No
                                    </label>
                                    {{ $errors->first('publicar', '<span class="help-block">:message</span>') }}
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    {{ Form::submit('Guardar', ['class' => 'btn btn-responsive btn-primary btn-md']) }}
                                    <a href="{{ route('administrador.categories.index') }}" class="btn btn-responsive btn-default btn-md">Cancelar</a>
                                </div>
                            </div>

                    {{ Form::close() }}
                </div>
            </div>

        </div>
        <!--md-6 ends-->

    </div>
    <!--main content ends-->
</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
{{ HTML::script('admin/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}

<script>
$(document).on("ready", function(){

    $("#portada").hide();

    $(".design").on("click", function(){
        var valor = $(this).val();
        if(valor == 1){
            $("#portada").show();
        }else{
            $("#portada").hide();
        }
    });

});
</script>
@stop