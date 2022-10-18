@extends('layouts.default')
@section('content')
    {{ dd($products)}}
    <section class="overflow-hidden text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap mx-auto lg:w-4/5">
                <img alt="ecommerce" class="object-cover object-center w-full h-64 rounded lg:w-1/2 lg:h-auto" src="{{ $product->cover }}">
                <div class="w-full mt-6 lg:w-1/2 lg:pl-10 lg:py-6 lg:mt-0">
                    <h1 class="mb-1 text-3xl font-medium text-gray-900 title-font">{{ $product->name }}</h1>
                    <p class="leading-relaxed">{{ $product->description }}</p>
                    @if($product->stock)
                    <div class="my-3">
                        <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">Em estoque</span>
                    </div>
                    @endif
                    <div class="flex pt-6 mt-6 border-t-2 border-gray-100">
                        <span class="text-2xl font-medium text-gray-900 title-font">${{ $product->price }}</span>
                        <a class="flex px-6 py-2 ml-auto text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
