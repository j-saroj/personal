@extends('admin.layout.admin-layout')
@section('body')
<x-admin.table-view :values="$profile" edit_route="admin.profile.edit" :fields="['name', 'dob', 'address', 'email', 'number', 'title', 'personalIntroduction', 'words', 'hobby', 'fathersName', 'mothersName', 'grandfather', 'grandmother', 'spouse', 'skills', 'achievement', 'training', 'education', 'experience']" />
{{-- <x-admin.profile-detail name="Name" value="{{ $profile->name }}"/>
{{--
 <div class="page-header">
        <h3 class="page-title">

            <div class="">{{ $profile->name }}</div>
        </h3>

 <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <x-admin.profile-detail name="Image" :myimage="$profile->image" />
                        <x-admin.profile-detail name="Name" value="{{ $profile->name }}"/>
                        <x-admin.profile-detail name="DOB" value="{{ $profile->dob }}"/>
                        <x-admin.profile-detail name="Address" value="{{ $profile->address }}"/>
                        <x-admin.profile-detail name="Email" value="{{ $profile->email }}"/>
                        <x-admin.profile-detail name="Phone" value="{{ $profile->number }}"/>
                        <x-admin.profile-detail name="title" value="{{ $profile->title }}"/>
                        <x-admin.profile-detail name="Description" value="{{ $profile->personalIntroduction }}"/>
                        <x-admin.profile-detail name="words" value="{{ $profile->words }}"/>

                        <x-admin.profile-detail name="Hobbies" value="{{ $profile->hobby }}"/>
                        <x-admin.profile-detail name="father's Name" value="{{ $profile->fathersName }}"/>
                        <x-admin.profile-detail name="Mother's Name" value="{{ $profile->mothersName }}"/>
                        <x-admin.profile-detail name="Grand father's Name" value="{{ $profile->grandfather }}"/>
                        <x-admin.profile-detail name="Grand mother's Name" value="{{ $profile->grandmother }}"/>
                        <x-admin.profile-detail name="Spouse" value="{{ $profile->spouse }}"/>

                        <x-admin.profile-detail name="Skills" value="{{ $profile->skills }}"/>
                        <x-admin.profile-detail name="Achievements" value="{{ $profile->achievement }}"/>
                        <x-admin.profile-detail name="Trainings" value="{{ $profile->training }}"/>


                        <x-admin.profile-detail name="Education" value="{{ $profile->education }}"/>
                        <x-admin.profile-detail name="Experience" value="{{ $profile->experience }}"/>

                    </thead>

                </table> --}}

@endsection
