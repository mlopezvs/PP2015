@extends('layouts.reportero-admin')

{{-- Page title --}}
@section('title')
Agregar nuevo registro
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
{{ HTML::style('admin/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}
{{ HTML::style('admin/css/pages/form_layouts.css') }}

{{-- DATETIME PICKER --}}
{{ HTML::style('admin/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css') }}

{{-- TAGS --}}
{{ HTML::style('admin/vendors/tags/bower_components/bootstrap/assets/css/docs.css') }}
{{ HTML::style('admin/vendors/tags/dist/bootstrap-tagsinput.css') }}
{{ HTML::style('admin/vendors/tags/assets/app.css') }}
@stop


{{-- Page content --}}
@section('content_admin')
<section class="content-header">
    <!--section starts-->
    <h1>
        Agregar nuevo registro
    </h1>
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
                    {{ Form::open(['route' => 'reportero-ciudadano.posts.store', 'method' => 'POST', 'class' => 'form-horizontal form-bordered', 'files' => 'true']) }}

                        <div class="form-group @if($errors->has('titulo')) has-error @endif">
                            {{ Form::label('titulo', 'Titulo', ['class' => 'col-md-3 control-label']) }}
                            <div class="col-md-9">
                                {{ Form::text('titulo', null, ['class' => 'form-control']) }}
                                {{ $errors->first('titulo', '<span class="help-block">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('descripcion')) has-error @endif">
                            {{ Form::label('descripcion', 'Descripción', ['class' => 'col-md-3 control-label']) }}
                            <div class="col-md-9">
                                {{ Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '3',
                                'onkeydown' => 'limitText(this.form.descripcion,this.form.countdown,220);',
                                'onkeyup' => 'limitText(this.form.descripcion,this.form.countdown,220);']) }}
                                <span class="help-block">Caracteres permitidos:
                                    <strong>
                                        <input name="countdown" type="text" style="border:none; background:none;" value="220" size="3" readonly id="countdown">
                                    </strong>
                                </span>
                                {{ $errors->first('descripcion', '<span class="help-block">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('contenido')) has-error @endif">
                            {{ Form::label('contenido', 'Contenido', ['class' => 'col-md-3 control-label']) }}
                            <div class="col-md-9">
                                {{ Form::textarea('contenido', null, ['id' => 'ckeditor_full', 'class' => 'form-control']) }}
                                {{ $errors->first('contenido', '<span class="help-block">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('imagen')) has-error @endif">
                            {{ Form::label('imagen', 'Imagen', ['class' => 'col-md-3 control-label']) }}
                            <div class="col-md-9">
                                {{ Form::file('imagen') }}
                                {{ $errors->first('imagen', '<span class="help-block">:message</span>') }}
                            </div>
                        </div>

                        <div class="form-group @if($errors->has('video')) has-error @endif">
                            {{ Form::label('video', 'Video (Youtube)', ['class' => 'col-md-3 control-label']) }}
                            <div class="col-md-6">
                                <div class="form-group input-group">
                                    <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
                                    {{ Form::text('video', null, ['class' => 'form-control']) }}
                                </div>
                                {{ $errors->first('video', '<span class="help-block">:message</span>') }}
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group">
                            <div class="col-md-12 text-right">
                                {{ Form::submit('Guardar', ['class' => 'btn btn-responsive btn-primary btn-md']) }}
                                <a href="{{ route('reportero-ciudadano.posts.index') }}" class="btn btn-responsive btn-default btn-md">Cancelar</a>
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
{{ HTML::script('admin/vendors/ckeditor/ckeditor.js') }}
{{ HTML::script('admin/vendors/ckeditor/adapters/jquery.js') }}
<script>
$(function() {
    // CKEditor Full
    CKEDITOR.replace( 'ckeditor_full', {
        uiColor: '#c6c6c6',
        toolbar: [
            [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
            [ 'FontSize', 'TextColor', 'BGColor' ]
        ]
    });
});
</script>

{{-- DATETIME PICKER --}}
{{ HTML::script('admin/vendors/datetimepicker/js/bootstrap-datetimepicker.js') }}
<script>
$(".form_datetime4").datetimepicker({
      format: "dd MM yyyy - hh:ii",
      linkField: "mirror_field",
      linkFormat: "yyyy-mm-dd hh:ii:00"
});
</script>

{{-- TAGS --}}
{{ HTML::script('admin/js/forms/jquery.tagsinput.min.js') }}
{{ HTML::script('admin/js/forms/jquery.select2.min.js') }}
<script>
$(".selectMultiple").select2();
</script>
@stop