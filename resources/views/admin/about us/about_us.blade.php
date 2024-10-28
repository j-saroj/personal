@extends('admin.layout.admin-layout')
@section('body')


                    <x-admin.table :values="$about_us" add_route="admin.add.about_us" view_route="admin.about_us.view" edit_route="admin.about_us.edit"
                        delete_route="admin.about_us.delete" :hidden_field="['id','created_at','updated_at']"/>
             

@endsection
