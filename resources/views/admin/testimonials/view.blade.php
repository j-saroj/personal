@extends('admin.layout.admin-layout')
@section('body')

                <x-admin.table-view :values="$testimonial" :fields="['name', 'description', 'designation']"
                    edit_route="admin.testimonial.edit" />

@endsection
