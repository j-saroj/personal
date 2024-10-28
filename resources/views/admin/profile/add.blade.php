@extends('admin.layout.admin-layout')
@section('body')
    @isset($profile)
        <div class="page-header">
            <h3 class="page-title">

                <div class="">Upadate Profile</div>
            </h3>
            <form action="{{ route('admin.profile.update', ['id' => $profile->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-admin.input name="name" label="Name" oldvalue="{{ $profile->name }}" />
                <x-admin.input name="email" label="Email" oldvalue="{{ $profile->email }}" />
                <x-admin.input name="password" label="Password" oldvalue="{{ $profile->password }}" />
                <x-admin.input name="address" label="Address" oldvalue="{{ $profile->address }}" />
                <x-admin.input name="number" label="Phone" oldvalue="{{ $profile->number }}" />
                <x-admin.input name="title" label="Title" oldvalue="{{ $profile->title }}" />
                <textarea id="editor" name="personalIntroduction" label="Personal Introduction"
                    oldvalue="{!! $profile->personalIntroduction !!}">{!! $profile->personalIntroduction !!}</textarea>
                <x-admin.input name="image" label="Image" type="file" myimage="{{ $profile->image }}" />
                <x-admin.input name="words" label="Words" oldvalue="{{ $profile->words }}" />
                <x-admin.input name="fathersName" label="Father's Name" oldvalue="{{ $profile->fathersName }}" />
                <x-admin.input name="mothersName" label="Mother's Name" oldvalue="{{ $profile->mothersName }}" />
                <x-admin.input name="grandfather" label="Grandfather" oldvalue="{{ $profile->grandfather }}" />
                <x-admin.input name="grandmother" label="Grandmother" oldvalue="{{ $profile->grandmother }}" />
                <x-admin.input name="spouse" label="Spouse" oldvalue="{{ $profile->spouse }}" />
                <x-admin.input name="education" label="Education" oldvalue="{{ $profile->education }}" />
                <x-admin.input name="achievement" label="Achievement" oldvalue="{{ $profile->achievement }}" />
                <x-admin.input name="training" label="Training" oldvalue="{{ $profile->training }}" />
                <x-admin.input name="experience" label="Experience" oldvalue="{{ $profile->experience }}" />
                <x-admin.input name="hobby" label="Hobby" oldvalue="{{ $profile->hobby }}" />
                <x-admin.input name="skills" label="Skills" oldvalue="{{ $profile->skills }}" />
                <button type="submit" class="btn btn-warning mt-2">Update</button>
            </form>
        </div>
    @else
        <div class="page-header">
            <h3 class="page-title">

                <div class="">Add Profile</div>
            </h3>
            <form action="{{ route('admin.add.profile') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-admin.input name="name" label="Name" />
                <x-admin.input name="email" label="Email" />
                <x-admin.input name="password" label="Password" type="password" />
                <x-admin.input name="address" label="Address" />
                <x-admin.input name="number" label="Phone" />
                <x-admin.input name="title" label="Title" />
                <x-admin.input name="personalIntroduction" label="Personal Introduction" />
                <x-admin.input name="image" label="Image" type="file" />
                <x-admin.input name="words" label="Words" />
                <x-admin.input name="fathersName" label="Father's Name" />
                <x-admin.input name="mothersName" label="Mother's Name" />
                <x-admin.input name="grandfather" label="Grandfather" />
                <x-admin.input name="grandmother" label="Grandmother" />
                <x-admin.input name="spouse" label="Spouse" />
                <x-admin.input name="education" label="Education" />
                <x-admin.input name="achievement" label="Achievement" />
                <x-admin.input name="training" label="Training" />
                <x-admin.input name="experience" label="Experience" />
                <x-admin.input name="hobby" label="Hobby" />
                <x-admin.input name="skills" label="Skills" />
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    @endisset
@endsection
