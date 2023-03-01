<section id="main-up">
    <div class="row container-custom">
        <div class="mt-2 mb-4 text-end">
            <a href="{{route('comics.create')}}" class="btn btn-primary ">aggiungi un comic</a>
        </div>
        @foreach ($comics as $comic)
        <div class="col card-custom">
            <figure>
                <a href="{{ route('comics.show', $loop->index+1)}}">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <h6>{{ $comic['title'] }}</h6>
                </a>
            </figure>
        </div>
        @endforeach
        <div class="col-12">
            <a href="#" class="d-flex align-items-center">
                <p>LOAD MORE</p>
            </a>
        </div>
    </div>
</section>