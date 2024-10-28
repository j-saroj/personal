@extends('admin.layout.admin-layout')
@section('body')

<x-admin.table-view :values="$ourvalue" :fields="['title', 'description']" edit_route="admin.edit.our-values" />

@endsection
