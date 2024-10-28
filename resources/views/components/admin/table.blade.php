@props([
    'values',
    'add_route' => null,
    'edit_route' => null,
    'delete_route' => null,
    'view_route' => null,
    'hidden_field' => [],
    'status_route' => null,
    'canAdd' => null,
    'canEdit' => null,
    'canDelete' => null,
    'action' => null,
])
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @if ($add_route != null)
                <h4 class="card-title"><a href="{{ route($add_route) }}" class="btn btn-primary">Add</a></h4>
            @endif
            {{-- <p class="card-description"> Add New Item</p> --}}

            <div class=" ">
                @if (empty($values[0]))
                    <h4 class="mt-2  text-muted text-center">No data found! </h4>
                @else
                    <div class="table-responsive text-nowrap">
                        <table class="table  table-hover">
                            <thead>
                                <th>SN</th>
                                @foreach ($values[0]->getAttributes() as $key => $val)
                                    @if (!in_array($key, $hidden_field))
                                        <th scope="col">{{ Str::ucfirst($key) }}</th>
                                    @endif
                                @endforeach

                                <th>Actions</th>
                            </thead>
                            <tbody class="table-border-bottom-0">

                                @foreach ($values as $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        @foreach ($value->getAttributes() as $key => $val)
                                            @if (!in_array($key, $hidden_field))
                                                <td>
                                                    @if ($key == 'thumbnail' || $key == 'flag' || $key == 'image')
                                                        <img src="{{ asset('storage/' . $value->image) }}"
                                                            alt="item image" height="40px" width="auto">
                                                    @elseif($key == 'icon')
                                                        <img src="{{ asset('storage/' . $value->icon) }}"
                                                            alt="item image">
                                                    @elseif($key == 'country_id')
                                                        @isset($value->countries)
                                                            {{ $value->countries->name }}
                                                        @endisset
                                                    @elseif($key == 'destination_id')
                                                        @isset($value->destination)
                                                            {{ $value->destination->name }}
                                                        @endisset
                                                    @elseif($key == 'parent_id')
                                                        @isset($value->parent()->first()->title)
                                                            {{ $value->parent()->first()->title }}
                                                        @endisset
                                                    @else
                                                        {!! Str::limit(strip_tags($val), '30', '...') !!}
                                                    @endif
                                                </td>
                                            @endif
                                        @endforeach


                                        {{-- actions --}}
                                        <td class="">
                                            @if (!is_null($view_route))
                                                <a href="{{ route($view_route, [$value->id]) }}"
                                                    class="btn mb-sm-1 btn-sm btn-warning"><span
                                                        class="mdi mdi-eye-outline"></span></a>
                                            @endif
                                            @if (!is_null($edit_route))
                                                <a href="{{ route($edit_route, [$value->id]) }}"
                                                    class="btn btn-primary btn-sm mb-sm-1 ">
                                                    <span class="mdi mdi-pencil"></span></a>
                                            @endif
                                            @if (!is_null($delete_route))
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-sm mb-sm-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $value->id }}">
                                                    <span class="mdi mdi-trash-can-outline"></span>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{ $value->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content m-6">
                                                            <div class="modal-header">
                                                                <p class="modal-title">Confirmation</p>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body m-6">
                                                                <h5 class="text-dark">Are you sure you want to delete?
                                                                </h5>
                                                            </div>
                                                            <div class="modal-footer p-4">
                                                                <form id="delete-form-{{ $value->id }}"
                                                                    action="{{ route($delete_route, $value->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="my-4 d-flex justify-content-center ">


                        {{ $values->links() }}

                    </div> --}}

                @endif

            </div>

        </div>
    </div>
</div>
