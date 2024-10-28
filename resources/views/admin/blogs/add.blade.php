@extends('admin.layout.admin-layout')
@section('body')
    <div class="page-header">
        <h3 class="page-title">

            </span>
            @isset($blog)
                <span class="page-title
            -icon bg-gradient-primary text-dark me-2">
                    <i class="mdi mdi-home">Edit Blog</i>

                    <form action="{{ route('admin.update.blog', ['id' => $blog->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <x-admin.input label="Title" name="title" type="text" oldvalue="{{ $blog->title }}" />
                        <x-admin.input-textarea label="Content" name="content"  oldvalue="{{ $blog->content }}" />
                        <x-admin.input label="Date" name="date" type="date" oldvalue="{{ $blog->date }}" />
                        <x-admin.input label="Author" name="author" type="text" oldvalue="{{ $blog->author }}" />
                        <x-admin.input label="Author Description" name="author_description" type="textarea"
                            oldvalue="{{ $blog->author_description }}" />
                        <x-admin.input label="Category" name="category" type="text" oldvalue="{{ $blog->category }}" />
                        <x-admin.image-view imageurl="{{ $blog->image }}" />
                        <x-admin.input label="Image" name="image" type="file" oldvalue="{{ $blog->image }}" />

                        <button type="submit" class="btn btn-warning">Update</button>
                    </form>
                @else
                    <span class="page-title
            -icon bg-gradient-primary text-dark me-2">
                        <i class="mdi mdi-home">Add Blog Post</i>
                        <form action="{{ route('admin.add.blog') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <x-admin.input label="Title" name="title" type="text" />
                            <x-admin.input-textarea label="Content" name="content" type="text" />
                            <x-admin.input label="Date" name="date" type="date" />
                            <x-admin.input label="Author" name="author" type="text" />
                            <x-admin.input label="Author Description" name="author_description" type="textarea" />
                            <x-admin.input label="Category" name="category" type="text" />
                            <x-admin.input name="image" label="Image" type="file" />
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    @endisset
        </h3>
    </div>
@endsection
