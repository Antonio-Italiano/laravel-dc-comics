<section id="main-down">
    <div class="row container-custom">
        @foreach ($links as $link)
        <div class="col-5">
            <figure>
                <a href="#">
                    <img src="{{Vite::asset($link['image'])}}" alt="{{$link['alt']}}">
                    <p>{{$link['alt']}}</p>
                </a>
            </figure>
        </div>
        @endforeach
    </div>
</section>