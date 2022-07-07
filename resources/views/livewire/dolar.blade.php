<div>
    <div class="flex px-4 py-20 justify-center" style="
        background-image: url('https://media.istockphoto.com/photos/perus-flag-picture-id499594672?k=20&m=499594672&s=612x612&w=0&h=leDnkIju_QQ4RWo8ZkLlsN5S5kGre7EW5Xxd-Pc9MNk=');
      ">
        <div class="container">
            <div class="bg-white rounded-lg shadow-lg p-5 md:p-20 mx-2">
                <div class="text-center">
                    <h2
                        class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                        Consultas <span class="text-red-600">Perú</span>
                    </h2>
                    <p class="mt-8">Ingresa tus datos correctamente✔️🧠😎</p>
                </div>
                <div class="flex flex-wrap mt-10 justify-center">
                    <div class="m-3 mr-1">
                        <input wire:model='dolar' type="date"
                            class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-600 hover:border-blue-600 hover:bg-blue-600 hover:text-white shadow-md py-2 inline-flex items-center"
                            >
                    </div>
                    <div class="m-3">
                        <a href="{{ route('consultar.dolar', $dolar) }}" title="consultar"
                            class="md:w-32 bg-white tracking-wide text-gray-800 font-bold rounded border-2 border-blue-500 hover:border-blue-500 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                            <span class="mx-auto">Consultar</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
   

    {{-- Ingrese su dni:<input wire:model='dni' type="text">
    <a href="{{ route('consultar.dni', $dni) }}">Consultar</a>
    <p>{{ $dni }}</p>
   @php
       echo var_dump($datos);
   @endphp --}}
    {{--  --}}
</div>
