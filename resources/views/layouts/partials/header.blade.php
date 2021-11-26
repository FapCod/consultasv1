@extends('layouts.plantilla')
@section('title', 'Inicio')
@section('content')
<!-- component -->
<nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-red-500 text-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0">
      <a href="{{ route('home') }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Consultas Peru</a>
    </div>
    <div>
      <a href="{{ route('home') }}" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Home</a>
      <a href="{{ route('home') }}" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Sobre me</a>
      <a href="#footer" class="text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Comunicate</a>
    </div>
  </nav>
@endsection