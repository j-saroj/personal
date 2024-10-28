@extends('admin.layout.admin-layout')
@section('body')

    @isset($team)
        <form action="{{ route('admin.team.update',['id'=>$team->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Name" name="name" type="text" oldvalue="{{ $team->name }}" />
            <x-admin.input label="Position" name="position" type="text" oldvalue="{{ $team->position }}" />

            <textarea id="editor" label="Content" name="content" type="text" oldvalue="{{ $team->content }}" > {{ $team->content }} </textarea>
            <x-admin.input label="Facebook" name="facebook" type="url" oldvalue="{{ $team->facebook }}" />
            <x-admin.input label="Twitter" name="twitter" type="url" oldvalue="{{ $team->twitter }}" />
            <x-admin.input label="Instagram" name="instagram" type="url" oldvalue="{{ $team->instagram }}" />
            <x-admin.input label="Linkedin" name="linkedin" type="url" oldvalue="{{ $team->linkedin }}" />
            <x-admin.input label="Image" name="image" type="file" :imageurl="$team->image" :myimage="$team->image" oldvalue="{{ $team->image }}" />
            <button type="submit" class="btn btn-primary mt-3">Add</button>
        </form>
    @else
        <form action="{{ route('admin.save.team') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Name" name="name" type="text" />
            <x-admin.input label="Position" name="position" type="text" />
            <textarea id="editor" label="Content" name="content" type="text"></textarea>
            <x-admin.input label="Facebook" name="facebook" type="url" />
            <x-admin.input label="Twitter" name="twitter" type="url" />
            <x-admin.input label="Instagram" name="instagram" type="url" />
            <x-admin.input label="Linkedin" name="linkedin" type="url" />
            <x-admin.input label="Image" name="image" type="file" />
            <button type="submit" class="btn btn-primary mt-3 mb-5">Add</button>
        </form>
    @endisset
@endsection
