@extends('admin.layout.admin-layout')
@section('body')


            <x-admin.table :values="$teams" view_route="admin.team.view" add_route="admin.add.team" edit_route="admin.team.edit"
                delete_route="admin.team.delete" :hidden_field="['id','created_at', 'updated_at','facebook','twitter','linkedin','instagram']" />





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
                            @foreach ($teams as $team)
                                <tr>
                                    <th scope="row">{{ $count }}</th>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->position }}</td>

                                    <td><img src="{{ asset('storage/' . $team->image) }}" alt="" height="30px;">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.team.view', ['id' => $team->id]) }}"
                                            class="btn btn-warning">View</a>
                                        <a href="{{ route('admin.team.edit', ['id' => $team->id]) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.team.delete', ['id' => $team->id]) }}"
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
                    </table>
                    --}}
            <!-- End Table with hoverable rows -->

@endsection
