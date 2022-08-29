<div class="flex space-x-4">
    <button wire:click="likes">{{ $likes }}<i class="fa fa-thumbs-o-up text-xl ml-1 text-indigo-500"
            aria-hidden="true"></i></button>
    <button wire:click="dislikes">{{ $dislikes }}<i class="fa fa-thumbs-o-down text-xl ml-1 text-red-500"
            aria-hidden="true"></i></button>
    <button wire:click="views">{{ $views }}<i class="fa fa-eye text-xl ml-1" aria-hidden="true"></i></button>
</div>
