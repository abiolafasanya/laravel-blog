<div>
    @if ($url === '')
        <button wire:click="download" class="btn btn-indigo">{{ $file }}</button>
    @else
        <a href="{{ $url }}">
            <button wire:click="download" class="btn btn-indigo">{{ $file }}</button>
        </a>
    @endif
</div>
