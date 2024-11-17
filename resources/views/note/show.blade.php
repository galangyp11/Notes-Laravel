<x-layout>
    <div class="bg-gray-100 grid grid-rows-6 grid-flow-col rounded-md p-4 h-[41em] lg:w-1/2 mx-auto">
        <div class="row-span-1 grid grid-cols-2">
            <a href="{{route('note.index')}}" class="w-fit h-fit col-span-1">
                <div class="rounded-md bg-red-300 px-4 py-1 w-fit font-semibold text-red-700">Kembali</div> 
            </a>
            <a href="{{ route('note.edit', $note) }} " class="w-[6em] h-fit col-span-1 justify-self-end">
                <div class="rounded-md px-4 py-1 font-semibold bg-yellow-300 text-center text-yellow-700">Edit</div>
            </a>
        </div>
        <div class="w-full p-4 row-span-5 min-h-full overflow-auto h-auto bg-white rounded-md">
            <p class="mb-4">{{ $note->created_at}}</p>
            <p>{{ $note->note }}</p>
        </div>
    </div>
</x-layout>
