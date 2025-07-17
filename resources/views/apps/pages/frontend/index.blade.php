@extends('layouts.main')

@section('title', 'Accueil')

@section('content')
    @include('components.widgets.hero')

    @include('components.widgets.howItWork')

    @include('components.widgets.about')

    @include('components.widgets.service')

    @include('components.widgets.featuredMachines')

    @include('components.widgets.category')

    @include('components.widgets.testimonial')
@endsection
