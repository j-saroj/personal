@extends('admin.layout.admin-layout')
@section('body')


    @isset($ourvalue)

        <form action="{{ route('admin.update.our-values',['id'=>$ourvalue->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Title" name="title" type="text" oldvalue="{{ $ourvalue->title }}" />
            <textarea id="editor" label="Description" name="description" type="text" oldvalue="{{ $ourvalue->description }}">{!! $ourvalue->description !!}</textarea>
            <x-admin.image-view imageurl="{{ $ourvalue->image }}"/>
            <x-admin.input label="Image" name="image" type="file"  />
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    @else
        <form action="{{ route('admin.save.our-values') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Title" name="title" type="text" />
            <textarea id="editor" label="Description" name="description" type="text"></textarea>

            <x-admin.input label="Image" name="image" type="file"/>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    @endisset
@endsection
