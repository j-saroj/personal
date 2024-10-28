@extends('layouts.main')

@section('content')
    <!-- Page Title -->
    <div class="page-title page-title-default title-size-small title-design-centered color-scheme-light title-blog">
        <div class="container">
            <header class="entry-header">
                <h1 class="entry-title"></h1>
            </header>
        </div>


        <x-client.team-component :teams="$teams" />

    </div>

@endsection
