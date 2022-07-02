@extends('layouts.base')

@section('title', 'Test')

@section('content')
    <div class="container">
        {{-- <div class="row row-cols-3">
            @foreach ($posts as $post)
                <article class="col pb-5">
                    <div class="card bg-dark mx-auto" style="width: 18rem;">
                        <img src="{{ Storage::url($post->image->url) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">{{ $post->body }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div> --}}
        <!-- Example single danger button -->
        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Idioma
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('lang/es') }}">Español</a></li>
                <li><a class="dropdown-item" href="{{ url('lang/en') }}">Ingles</a></li>
            </ul>
        </div>

        <h1>@lang('messages.title')</h1>
    </div>
@endsection
