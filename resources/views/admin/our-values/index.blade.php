@extends('admin.layout.admin-layout')
@section('body')

<x-admin.table :values="$ourvalues" add_route="admin.add.our-values" view_route="admin.view.our-values" edit_route="admin.edit.our-values" delete_route="admin.delete.our-values" :hidden_field="['id','created_at','updated_at']" />


@endsection
