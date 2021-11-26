<x-app-layout>
    <div  class="flex px-4 py-20 justify-center" style="
        background-image: url('https://media.istockphoto.com/photos/perus-flag-picture-id499594672?k=20&m=499594672&s=612x612&w=0&h=leDnkIju_QQ4RWo8ZkLlsN5S5kGre7EW5Xxd-Pc9MNk=');
      ">
        <div class="container">
          <div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">
            <div class="text-center">
              <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                Consultas <span class="text-red-600">Perú</span>
              </h2>
              <h3 class='text-xl md:text-3xl mt-10'>Elige que quieres consultar:</h3>
              {{-- <p class="text-md md:text-xl mt-10"><a class="hover:underline" href="#">Consultas</a> is a website help you provide simple productivity tools for your daily need online for free.</p> --}}
            </div>
            <div class="flex flex-wrap mt-10 justify-center">
              <div class="m-3">
                <a href="{{ route('dni') }}" title="Quicktoolz On Facebook"
                   class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-600 hover:border-blue-600 hover:bg-blue-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                  <span class="mx-auto">Por DNI</span>
                </a>
              </div>
              <div class="m-3">
                <a href="{{ route('ruc') }}" title="Quicktoolz On Twitter"
                   class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                  <span class="mx-auto">Por Ruc</span>
                </a>
              </div>
              <div class="m-3">
                <a href="{{ route('dolar') }}" title="Quicktoolz On Pinterest"
                   class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-red-600 hover:border-red-600 hover:bg-red-600 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                  <span class="mx-auto">$Dolar</span>
                </a>
              </div>
              <div class="m-3">
                <a href="#" title="Quicktoolz On Facebook"
                   class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-orange-500 hover:border-orange-500 hover:bg-orange-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                  <span class="mx-auto">Otra</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
</x-app-layout>