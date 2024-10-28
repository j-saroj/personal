@extends('admin.layout.admin-layout')

@section('body')


<x-admin.table :values="$profiles" view_route="admin.profile.view" edit_route="admin.profile.edit"
    add_route="admin.add.profile" delete_route="admin.profile.delete" :hidden_field="['id','dob','words','fathersName','mothersName','title','image','grandfather','education','personalInformation','grandmother','spouse','achievement','training','experience','hobby','skills','created_at','updated_at']"/>
@endsection
