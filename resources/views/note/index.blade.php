<x-layout>
    <div class="bg-gray-100 rounded-md p-4 min-h-screen lg:w-1/2 mx-auto">
        <div class="mb-6">
            <a href="{{route('note.create')}}">
                <div class="rounded-md bg-sky-300 hover:bg-sky-500 px-4 py-1 w-fit font-semibold text-sky-700">New Note</div> 
            </a>
        </div>
        {{-- @dd($notes) --}}
        <div class="flex flex-col gap-1">
            @foreach ($notes as $note)
            <div class="grid grid-cols-5 bg-sky-300 rounded-md w-full h-[10em] p-1 gap-1">
                <div class="col-span-4 rounded-md text-pretty truncate bg-white p-1">
                    {{$note->note}}
                </div>
                <div class="col-span-1 rounded-r-md bg-sky-300 flex flex-col gap-1">
                    <a href="{{ route('note.show', $note) }}">
                        <div class="rounded-md py-1 w-full font-semibold bg-green-100 hover:bg-green-300 text-center text-green-700">View</div>
                    </a>
                    <a href="{{ route('note.edit', $note) }}">
                        <div class="rounded-md py-1 w-full font-semibold bg-yellow-100 hover:bg-yellow-300 text-center text-yellow-700">Edit</div>
                    </a>
                    <form action="{{route('note.destroy', $note)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="rounded-md py-1 w-full font-semibold bg-red-100 hover:bg-red-300 text-center text-red-700">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
            
        </div>
        {{$notes->links()}}
    </div>
  
</x-layout>
