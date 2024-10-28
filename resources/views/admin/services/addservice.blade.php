@extends('admin.layout.admin-layout')
@section('body')
    @isset($service)
        <div class="page-header">
            <h3 class="page-title">

                <div class="">Update Service</div>
            </h3>

            <form action="{{ route('admin.service.update', ['id' => $service->id]) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <x-admin.input label="Title" name="title" type="text" oldvalue="{{ $service->title }}" />
                    <label for="description">Description</label>
                <textarea id="editor" label="Description" name="description" type="text"
                    oldvalue="{!! $service->description !!}">{!! $service->description !!}</textarea>
                <x-admin.image-view imageurl="{{ $service->image }}" />
                <x-admin.input label="Image" name="image" type="file" />
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    @else
        <div class="page-header">
            <h3 class="page-title">

                <div class="">Add Service</div>
            </h3>
            <form action="{{ route('admin.add.service') }}" method="post" enctype="multipart/form-data">
                @csrf
                <x-admin.input label="Title" name="title" type="text" />
                <label for="description">Description</label>
                <x-admin.input-textarea id="editor" label="Description" name="description" type="text" />
                <x-admin.input label="Image" name="image" type="file" />
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    @endisset
@endsection
