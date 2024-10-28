@extends('admin.layout.admin-layout')
@section('body')

                    <x-admin.table :values="$services" view_route="admin.service.view" edit_route="admin.service.edit"
                        add_route="admin.add.service" delete_route="admin.service.delete" :hidden_field="['id','created_at','updated_at']"/>


@endsection
