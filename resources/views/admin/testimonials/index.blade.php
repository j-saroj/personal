@extends('admin.layout.admin-layout')
@section('body')


                    <x-admin.table add_route="admin.add.testimonial" view_route="admin.testimonial.view" edit_route="admin.testimonial.edit" delete_route="admin.testimonial.delete" :values=" $testimonials" :hidden_field="['created_at','updated_at']" />
                    <!-- Table with hoverable rows -->
                    {{-- <table class="table table-hover">

                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Name</th>
                                <th scope="col">position</th>
                                <th scope="col">Image</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <th scope="row">{{ $count }}</th>
                                    <td>{{ $testimonial->name }}</td>
                                    <td>{{ $testimonial->position }}</td>

                                    <td><img src="{{ asset('storage/' . $testimonial->image) }}" alt=""
                                            height="30px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.testimonial.view', ['id' => $testimonial->id]) }}"
                                            class="btn btn-warning">View</a>
                                        <a href="{{ route('admin.testimonial.edit', ['id' => $testimonial->id]) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.testimonial.delete', ['id' => $testimonial->id]) }}"
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


                    <!-- End Table with hoverable rows -->

@endsection
