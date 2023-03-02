<section id="card-comic">
    <div class="row h-100 mt-3 p-4">
        <div class="col-8">
            <h2>{{$comic->title}}</h2>
            <div class="row info-red">
                <div class="col-9 border border-dark d-flex justify-content-between align-items-center">
                    <p>US price ${{$comic->price}}</p>
                    <p>available</p>
                </div>
                <div class="col-3 border border-dark d-flex align-items-center">
                    <p>Check available</p>
                </div>
            </div>
            <p>{{$comic->description}}</p>

        </div>
        <div class="col-4">
            <a href="#">
                <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="pubblicità">
            </a>
        </div>
    </div>
    
</section>

<section id="card-comic-dw">
    <div class="row">
        <div class="col-6 p-3">
            <h3>Talent</h3>
            <div class="row">
                <div class="col-4 border-top border-bottom border-primary">art by</div>
                <div class="col-8 border-top border-bottom border-primary">
                    <p>{{$comic->artists}}</p>
                </div>
                <div class="col-4 border-bottom border-primary">art by</div>
                <div class="col-8 border-bottom border-primary">
                    <p>{{$comic->writers}}</p>
                </div>
            </div>
        </div>
        <div class="col-6 p-3">
            <h3>specs</h3>
            <div class="row">
                
                <div class="col-4 border-top border-primary">series</div>
                <div class="col-8 border-top border-primary">{{$comic->series}}</div>
                <div class="col-4 border-top border-primary">us price</div>
                <div class="col-8 border-top border-primary">${{$comic->price}}</div>
                <div class="col-4 border-top border-bottom border-primary">on sala date</div>
                <div class="col-8 border-top border-bottom border-primary">{{$comic->sale_date}}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6 text-end box-btn">
                <a class="btn btn-secondary my-3" href="/">ritorna</a>
                <a class="btn btn-primary my-3" href="{{ route('comics.edit', $comic->id) }}">modifica</a>
            </div>
        </div>
    </div>
    
</section>