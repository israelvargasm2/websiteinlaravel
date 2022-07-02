@extends('layouts.base')

@section('title', 'Sobre mi')

@section('content')
    <div class="container">
        <section class="text-center mx-auto">
            <header class="pt-5">
                <h1 class="display-2"><strong>@lang('messages.about-me-item-paragraph-1')</strong></h1>
            </header>
            <div class="mx-auto py-5" id="parrafos">
                <p class="h5 lh-base">
                    @lang('messages.about-me-item-paragraph-2')
                </p>
                <br>
                <p class="h5 lh-base">
                    @lang('messages.about-me-item-paragraph-3')
                </p>
            </div>
        </section>
        <section class="pb-5">
            <div class="mx-auto" style="width: 200px;">
                <img src="{{ asset('img/me-photo.jpg') }}" alt="" class="img-fluid" style="border-radius: 100%">
            </div>
            <div class="text-center mt-3">
                <p>@lang('messages.about-me-item-paragraph-4')</p>
            </div>
        </section>
    </div>
@endsection
