@extends('layouts.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title page-title-default title-size-small title-design-centered color-scheme-light title-blog">
        <div class="container">
            <header class="entry-header">
                <h1 class="entry-title"></h1>
            </header>
        </div>
{{--
    @if ($services->count() == 0)
        <div class="container">
            <div class="alert alert-danger" role="alert">
                No services found.
            </div>
        </div>
    @endif --}}

        <x-client.portfolio-component :product="$product" />

    </div>

@endsection
