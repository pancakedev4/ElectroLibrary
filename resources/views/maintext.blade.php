<x-app-layout>
<div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-32 lg:text-left">
        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{$obj->name}}</h2>
        <p class="mt-6 text-lg leading-8 text-gray-300">{!!$obj->body!!}</p>
</x-app-layout>