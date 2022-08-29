    @php
        $name = explode(' ', auth()->user()->name);
    @endphp
    @if (count($name) > 1)
        {{ $name[0][0] . $name[1][0] }}
    @else
        {{ $name = $name[0][0] }}
    @endif
