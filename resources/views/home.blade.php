@extends('layouts.base')

@section('title', 'Inicio')

@section('content')
    {{-- container --}}
    <div class="container-fluid">
        {{-- section header --}}
        <header style="height: 100vh;">
            <section class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="display-5"><strong>@lang('messages.title')</strong></h1>
                        <h1>@lang('messages.subtitle')</h1>
                        <div class="w-100">
                            <img class="w-100" src="{{ asset('img/laravel-logo.svg') }}" alt="">
                        </div>
                        

                    </div>
                </div>
            </section>
        </header>
    </div>
    {{-- /section header --}}
    <div class="container">

        {{-- <div id="spinner">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="spinner-border text-info " style="width: 8rem; height: 8rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div> --}}
        
        {{-- section cards --}}
        <section>
            <h1 class="text-center mb-5">@lang('messages.home-item-tools')</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @foreach ($images as $image)
                    <article class="col pb-5">
                        <div class="card bg-dark mx-auto" style="width: 18rem;">
                            <img src="{{ Storage::url($image->url) }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text h3 text-center">{{ $image->description }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
        {{-- /section cards --}}
    </div>
    {{-- /container --}}
@endsection
