<section id="footer-down">
    <div class="row container-custom">
        <div class="col">
            <button>
                <a href="#">SIGN-UP NOW!</a>
            </button>
        </div>
        <div class="col">
            <div class="center">
                <a href="#">FOLLOW US</a>
                @foreach ($linksfooter as $link)
                <figure class="mb-0">
                    <a href="#"><img src="{{Vite::asset($link['image'])}}" alt="{{$link['alt']}}"></a>
                </figure>
                @endforeach  
            </div>
        </div>
    </div>
</section>
