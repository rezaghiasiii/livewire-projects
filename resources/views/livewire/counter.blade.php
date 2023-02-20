<div class="flex flex-col items-center">
    <div class="flex p-16 mx-auto justify-center items-center gap-4">
        <button wire:click="increment" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">+</button>
        <span class="text-center py-2">{{$count}}</span>
        <button wire:click="decrement" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">-</button>
    </div>
</div>
