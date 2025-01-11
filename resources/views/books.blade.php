<x-app-layout>
    <h1>Services</h1>
<div class = "flex flex-wrap px-3 py-3">
    @foreach($books as $book)
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src="/storage/{{$book->picture}}" alt="Dune">
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{$book->name}}</div>
            <p class="text-gray-700 text-base">
                {{$book->body_small}}
            </p>
        </div>
        <div class="px-6 py-4">
        <a href="{{asset('book/'.$book->id)}}" class="btn rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Перейти</a>
        </div>
    </div>
    @endforeach
</div>


</x-app-layout>