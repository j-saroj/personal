@props(['name', 'value'=>null, 'myimage'=>null])

<tr>
    <th>
        {{ $name }}
    </th>
    <td>
        @if($value)
            {!! $value !!}
        @endif
        @if($myimage)
            <img src="{{ asset('storage/' . $myimage) }}" alt="Image" style="width: 300px; height: 500px;">
        @endif
    </td>
</tr>
