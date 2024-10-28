@extends('admin.layout.admin-layout')
@section('body')

 <div class="page-header">

<x-admin.table :values="$contacts" :fields="['name','email','subject','message']" :hidden_field="['id','created_at']" />

@endsection
