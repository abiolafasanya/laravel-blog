<div class="flex space-x-4">
    <button wire:click="likes">{{ $likes }}<i class="fa fa-thumbs-o-up text-indigo-500"
            aria-hidden="true"></i></button>
    <button wire:click="dislikes">{{ $dislikes }}<i class="fa fa-thumbs-o-down text-red-500"
            aria-hidden="true"></i></button>
    <button wire:click="views">{{ $views }}<i class="fa fa-eye" aria-hidden="true"></i></button>
</div>
