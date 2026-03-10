@use('Illuminate\Support\Str')
@use('Illuminate\Support\Facades\Storage')
@extends('layouts.frontend')


@section('content')
    @include('frontend.services.hero')
    @include('frontend.services.services')

 @endsection