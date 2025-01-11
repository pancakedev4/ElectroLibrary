
<x-app-layout>

<!--верстка, сам сервис-->
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="cover" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="/storage/{{$book->picture}}">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$book->type}}</h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$book->name}}</h1>
        <p class="leading-relaxed">{!!$book->body!!}</p>
        <div class="flex flex-wrap py-2">
          <span class="title-font font-medium text-2xl text-gray-900">{{$book->price}}</span>
          <button class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Купить</button>
          <button class="btn flex ml-auto text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">В корзину</button>
          <a href="{{asset('subscription')}}" class="btn flex ml-auto border-0 py-2 px-5 focus:outline-none rounded">Взять по абонементу</a>
          <!-- <button class="btn flex ml-auto border-0 py-2 px-5 focus:outline-none rounded #my_modal_8" onclick="my_modal_1.showModal()">Взять по абонементу</button> -->
<!--верстка, форма заказа для сервиса-->

<!-- <dialog id="my_modal_1" class="modal">
  <div class="modal-box">
    <h1>Запросить детали</h1>
        <div class="flex w-full flex-col gap-5 border-opacity-50">
    <input type="text" placeholder="Имя" class="input input-bordered w-full max-w-xs" />
    <input type="text" placeholder="Телефон" class="input input-bordered w-full max-w-xs" />
    <input type="text" placeholder="Email" class="input input-bordered w-full max-w-xs" />
        </div> 
            <div class="modal-action">
      <a href="#" class="btn">Оформить заказ</a>
            </div>
    </div>
</dialog> -->
        </div>
      </div>
</section>

</x-app-layout>