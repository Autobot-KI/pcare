@extends('backend.layouts.app')

@section('title') @lang("Panel PCARE") @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs />
@endsection

@section('content')


@include("backend.includes.dashboard_demo_data")

@endsection