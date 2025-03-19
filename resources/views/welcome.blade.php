@extends('layouts.app')

@section('tittle', 'Index - Mentor BootStrap Template')

@section('content')
  @include('components.hero')
  @include('components.about')
  @include('components.counts')
  @include('components.why-us')
  @include('components.features')
  @include('components.courses')
  @include('components.trainers')
@endsection