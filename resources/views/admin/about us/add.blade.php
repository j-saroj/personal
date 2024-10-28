@extends('admin.layout.admin-layout')
@section('body')
    <div class="page-header">
        <h3 class="page-title">

            <div class="">About Us</div>
        </h3>
    </div>
    @isset($about_us)
        <form action="{{ route('admin.about_us.update', ['id' => $about_us->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Title" name="title" type="text" oldvalue="{{ $about_us->title }}" />
            <x-admin.input label="Page Name" name="page_name" type="text" oldvalue="{{ $about_us->page_name }}" />
            <label for="description">Description</label>
            <textarea  id="editor" label="Description" name="description" type="text" oldvalue="{!! $about_us->description !!}" >{!! $about_us->description !!}</textarea>
            <x-admin.input label="Image" name="image" type="file" myimage="{{ $about_us->image }}"
                oldvalue="{{ $about_us->image }}" />
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    @else
        <form action="{{ route('admin.save.about_us') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Title" name="title" type="text" />
            <x-admin.input label="Page Name" name="page_name" type="text" />
            <textarea  id="editor" label="Description" name="description" type="text" ></textarea>

            <x-admin.input label="Image" name="image" type="file" />
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    @endisset
@endsection
