<div class="container">
    <nav class="navbar navbar-expand-lg bg-dark text-white">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white" href="{{ route('home') }}">@lang('messages.navbar-item-logo')</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav w-100 d-flex justify-content-between">
                    <ul class="navbar-nav">
                        <li class="navbar-item"><a class="nav-link link-hover text-center" aria-current="page"
                                href="{{ route('home') }}">@lang('messages.navbar-item-home')</a></li>
                        <li class="navbar-item"><a class="nav-link link-hover text-center"
                                href="{{ route('aboutme') }}">@lang('messages.navbar-item-aboutme')</a></li>
                        <li class="navbar-item"><a class="nav-link link-hover text-center"
                                href="{{ route('contact') }}">@lang('messages.navbar-item-contact')</a></li>
                    </ul>
                    <div id="btnLang" class="dropdown">
                        <div class="">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-earth-americas"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ url('lang/es') }}">@lang('messages.lang-spanish')</a></li>
                                <li><a class="dropdown-item" href="{{ url('lang/en') }}">@lang('messages.lang-english')</a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <style>
                        @media (max-width: 768px){
                            #btnLang {
                                margin: auto;
                            }
                        }
                    </style> --}}
                </div>
            </div>
        </div>
    </nav>
</div>
