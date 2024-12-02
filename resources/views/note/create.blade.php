<x-layout>
    <div class="bg-gray-100 grid grid-rows-6 grid-flow-col rounded-md p-4 h-[30em] lg:w-1/2 mx-auto">
        <div class="row-span-1">
            <a href="{{route('note.index')}}">
                <div class="rounded-md bg-red-300 px-4 py-1 w-fit font-semibold text-red-700">Kembali</div> 
            </a>
        </div>
        <form action="{{ route("note.store")}}" method="POST" class="w-full row-span-5 grid grid-rows-6 grid-flow-col h-full ">
            @csrf
            <textarea name="note" class="bg-white p-4 row-span-5 rounded-md w-full h-full resize-none" id="" cols="30"  rows="10" placeholder="Type Note Here... "></textarea>
            <div class="row-span-1 flex justify-center items-end">
                <button class="bg-blue-300 text-blue-700 font-semibold rounded-md px-4 py-1 w-40">Submit</button>
            </div>
        </form>
       
    </div>
</x-layout>
