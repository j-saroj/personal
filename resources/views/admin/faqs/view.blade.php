@extends('admin.layout.admin-layout')
@section('body')
<x-admin.table-view :values="$faq" :fields="['question', 'answer']" edit_route="admin.edit.faq" />
@endsection
