@extends('admin.layout.admin-layout')
@section('body')

                    <x-admin.table-view :values="$team" edit_route="admin.team.edit" 
                        label="Team" />

                    {{-- <thead>
                        <x-admin.profile-detail name="Name" value="{{ $team->name }}"/>
                        <x-admin.profile-detail name="Image" :myimage="$team->image" />
                        <x-admin.profile-detail name="Details" value="{{ $team->content }}"/>
                        <x-admin.profile-detail name="Position" value="{{ $team->position }}"/>

                        <x-admin.profile-detail name="Facebook" value="{{ $team->facebook }}"/>
                        <x-admin.profile-detail name="Twitter" value="{{ $team->twitter }}"/>
                        <x-admin.profile-detail name="LinkedIn" value="{{ $team->linkedin }}"/>
                        <x-admin.profile-detail name="Instagram" value="{{ $team->instagram }}"/>
                    </thead> --}}

            @endsection
