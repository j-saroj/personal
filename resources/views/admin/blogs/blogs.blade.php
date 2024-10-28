@extends('admin.layout.admin-layout')
@section('body')

                    <x-admin.table :fields="['title', 'content', 'author', 'category', 'image']" :values="$blogs"
                        edit_route="admin.edit.blog" add_route="admin.add.blog" view_route="admin.view.blog" delete_route="admin.delete.blog" :hidden_field="['id','content','created_at','updated_at']" />

                    <!-- Table with hoverable rows -->
                    {{-- <table class="table table-hover">

                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Author</th>
                                <th class="col">Category</th>
                                <th scope="col">Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                                use Illuminate\Support\Str;
                            @endphp
                            @foreach ($blogs as $blog)
                                <tr>
                                    <th scope="row">{{ $count }}</th>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{  Str::limit($blog->content, 30)}}</td>
                                    <td>{{ $blog->author }}</td>
                                    <td>{{ $blog->category }}</td>


                                    <td><img src="{{ asset('storage/' . $blog->image) }}" alt="" height="30px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.view.blog', ['id' => $blog->id]) }}"
                                            class="btn btn-warning">View</a>
                                        <a href="{{ route('admin.edit.blog', ['id' => $blog->id]) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.delete.blog', ['id' => $blog->id]) }}"
                                            method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                </tr>
                                @php
                                    $count++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table> --}}


                
@endsection
