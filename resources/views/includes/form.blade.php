<section id="card-create" class="container my-4">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>                    
                @endforeach
            </ul>
        </div>
    @endif

    @if ($comic->exists)
        <form action="{{ route('comics.update', $comic->id) }}" method="POST" novalidate>
            @method('PUT')
        @else
        <form action="{{ route('comics.store') }}" method="POST" novalidate>
    @endif

    @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3 w-50">
                    <label for="title" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="title" placeholder="Inserisci il Nome" name="title" required value="{{ old('title', $comic->title) }}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="thumb" class="form-label">Url Thumb</label>
                    <input type="url" class="form-control" id="thumb" placeholder="Inserisci Url" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea type="text" class="form-control" id="description" placeholder="Descrivi il Comic" name="description" required>{{ old('description', $comic->description) }}</textarea>
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" id="price" placeholder="Inserisci il prezzo" name="price" step="0.01" min="0" max="100" required value="{{ old('price', $comic->price) }}">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="series" class="form-label">Genere</label>
                    <input type="text" class="form-control" id="series" placeholder="Inserisci il genere" name="series" required value="{{ old('series', $comic->series) }}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3 w-50">
                    <label for="sale_date" class="form-label">Data</label>
                    <input type="date" class="form-control" id="sale_date" placeholder="Inserisci la data" name="sale_date" required value="{{ old('sale_date', $comic->sale_date) }}">
                </div>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" placeholder="Inserisci il tipo" name="type" required value="{{ old('type', $comic->type) }}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="artists" class="form-label">Artisti</label>
                    <textarea type="text" class="form-control" id="artists" placeholder="Inserisci gli artisti" name="artists">{{ old('artists', $comic->artists) }}</textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="writers" class="form-label">Scrittori</label>
                    <textarea type="text" class="form-control" id="writers" placeholder="Inserisci gli scrittori" name="writers">{{ old('writers', $comic->writers) }}</textarea>
                </div>
            </div>
        </div> 
        
        <div class="d-flex justify-content-between">
            <a href="{{route('comics.index')}}" class="btn btn-danger">annulla</a>
            <button type="submit" class="btn btn-success">Salva</button>
        </div>
    </form>

</section>