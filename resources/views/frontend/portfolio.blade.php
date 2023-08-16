@extends('frontend.main_master')
@section('main')
{{-- THE MAIN PORTFOLIO PAGE --}}
@php
$homeslides = App\Models\HomeSlide::find(1);
@endphp
@section('title')
Galeria | {{ $homeslides->title }}
@endsection
 
