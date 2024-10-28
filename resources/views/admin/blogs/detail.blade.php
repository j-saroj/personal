@extends('admin.layout.admin-layout')
@section('body')



                        {{-- <x-admin.profile-detail name="Name" value="{{ $blog->title }}"/>
                        <x-admin.profile-detail name="Details" value="{{ $blog->content}}"/>
                        <x-admin.profile-detail name="Author" value="{{ $blog->author }}"/>
                        <x-admin.profile-detail name="Category" value="{{ $blog->category }}"/>
                        <x-admin.profile-detail name="Date" value="{{ $blog->date }}"/>
                        <x-admin.profile-detail name="Image" :myimage="$blog->image" /> --}}
                            <x-admin.table-view :values="$blog" edit_route="admin.edit.blog" :fields="['title', 'content', 'author', 'category', 'date']" />




@endsection
