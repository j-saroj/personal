@extends('admin.layout.admin-layout')
@section('body')


                    <x-admin.table-view :values="$service" edit_route="admin.service.edit" :fields="['title', 'description']" />
                    {{-- <thead>
                        <x-admin.profile-detail name="Name" value="{{ $service->title }}"/>
                        <x-admin.profile-detail name="Image" :myimage="$service->image" />
                        <x-admin.profile-detail name="Details" value="{{ $service->description }}"/>



                    </thead> --}}



@endsection
