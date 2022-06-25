@extends('frontend.layouts.app')

@section('title', ucfirst($page))

@section('content')

@include('frontend.partials.' . $page)

@endsection
