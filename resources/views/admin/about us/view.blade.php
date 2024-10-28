@extends('admin.layout.admin-layout')
@section('body')
    <div class="page-header">
        <h3 class="page-title">

            <div class="">About Us</div>
        </h3>
        <div class="page-header">
            <div class="container">

                <x-admin.table-view :values="$about_us" :fields="['title', 'description', 'page_name']" edit_route="admin.about_us.edit" />

            </div>
        </div>
    </div>
@endsection
