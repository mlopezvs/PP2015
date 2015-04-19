@extends('layouts.admin')

{{-- Page title --}}
@section('title')
Administrador
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css -->
{{ HTML::style('admin/css/only_dashboard.css') }}
<!--end of page level css-->
@stop


{{-- Page content --}}
@section('content_admin')
<section class="content-header">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li class="active">
            <a href="#"> <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                Home
            </a>
        </li>
    </ol>
</section>
<section class="content">

</section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop