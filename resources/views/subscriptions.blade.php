<x-app-layout>


<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Выберите период</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base text-gray-500">Для новых пользователей подписки первый месяц бесплатно</p>
    </div>
    <div class="flex flex-wrap -m-4">
      @foreach($subscriptions as $subscription) 
      <div class="flex flex-col justify-start p-4 xl:w-1/4 md:w-1/2 w-full">
        <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
          <h1 class="text-4xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">
            <span>{{$subscription->name}}</span>      
          <span class="text-lg ml-1 font-normal text-gray-500">{{$subscription->price}}</span>
          </h1>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>{{$subscription->sale}}
          </p>
          <p class="flex items-center text-gray-600 mb-2">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>{{$subscription->body_1}}
          </p>
          <p class="flex items-center text-gray-600 mb-6">
            <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                <path d="M20 6L9 17l-5-5"></path>
              </svg>
            </span>{{$subscription->body_2}}
          </p>
          <button class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded" onclick="my_modal_1.showModal()">Подписаться
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>        
          <p class="text-xs text-gray-500 mt-3">Продление автоматическое, отменить можно в любой момент.</p>
        </div>
      </div>
      @endforeach
    </div>
    <dialog id="my_modal_1" class="modal">
  <div class="modal-box">
    <h1>Запросить детали</h1>
        <div class="flex w-full flex-col gap-5 border-opacity-50">
    <input type="text" placeholder="Имя" class="input input-bordered w-full max-w-xs" />
    <input type="text" placeholder="Телефон" class="input input-bordered w-full max-w-xs" />
    <input type="text" placeholder="Email" class="input input-bordered w-full max-w-xs" />
        </div> 
            <div class="modal-action">
              <a href="#" class="btn">Оформить подписку</a>
            </div>
        </div>
      </dialog>
  </div>
</section>


</x-app-layout>