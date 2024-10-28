@extends('admin.layout.admin-layout')
@section('body')

            <x-admin.table :values="$faqs" add_route="admin.add.faq" view_route="admin.view.faq" edit_route="admin.edit.faq"
                delete_route="admin.delete.faq" :hidden_field="['id','created_at','updated_at']"/>


@endsection
