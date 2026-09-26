@extends('layouts.customers-app')

@section('title', 'Beranda')

@section('content')
    
        @include('components.customers.hero')

        @include('components.customers.services')

        @include('components.customers.stationery')

        @include('components.customers.about')

        @include('components.customers.contact')

@endsection