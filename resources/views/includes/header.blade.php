@php
    $links = config('menu');
@endphp
    

<header>
    <section id="header">
        <div class="header-top">
            <nav class="container-custom d-flex justify-content-end text-white h-100 align-items-center">
                <p class="mx-2 mb-0">DC POWER** VISA*</p>
                <p class="mx-2 mb-0">ADDITIONAL DC SITES</p>
            </nav>
        </div>
        <nav class="header-down container-custom">
            <div class="row h-100">
                <div class="col-2">
                    <a href="#">
                        <img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="Logo Dc">
                    </a>
                </div>
                <div class="col-8">
                    <nav>
                        <ul>
                            @foreach ($links as $link)                                
                            <li><a href="{{ route($link['route_name']) }}"><h6 class="mb-0">{{ $link['text'] }}</h6></a></li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <div class="col-2"></div>
            </div>
        </nav>
    </section>
</header>