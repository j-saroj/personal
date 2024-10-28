@extends('admin.layout.admin-layout')
@section('body')

    @isset($testimonial)

        <form action="{{ route('admin.testimonial.update',['id'=>$testimonial->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Name" name="name" type="text" oldvalue="{{ $testimonial->name }}" />
            <x-admin.input label="Position" name="position" type="text" oldvalue="{{ $testimonial->position }}" />

            <x-admin.input label="Content" name="content" type="text" oldvalue="{{ $testimonial->content }}" />
            <x-admin.input label="Image" name="image" type="file" myimage="{{ $testimonial->image }}" oldvalue="{{ $testimonial->image }}" />
            <button type="submit" class="btn btn-primary mt-3">Add</button>
        </form>
    @else

        <form action="{{ route('admin.save.testimonial') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Name" name="name" type="text" />
            <x-admin.input label="Position" name="position" type="text" />
            <x-admin.input label="Content" name="content" type="text" />

            <x-admin.input label="Image" name="image" type="file" />
            <button type="submit" class="btn btn-primary mt-3">Add</button>
        </form>
    @endisset
@endsection
