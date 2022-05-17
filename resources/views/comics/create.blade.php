@extends('layouts.main')
@section('main-content')
    <section>
        <div class="container">

            <form action="{{ route('comics.store') }}" method="post" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="title" class="form-label">Titolo</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="inserisci un titolo">
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">description</label>
                    <input name="description" type="text" class="form-control" id="description"
                        placeholder="inserisci la descrizione">
                </div>
                <div class="col-12">
                    <label for="thumb" class="form-label">immagine</label>
                    <input name="thumb" type="text" class="form-control" id="thumb" placeholder="inserisci un immagine">
                </div>
                <div class="col-12">
                    <label for="price" class="form-label">prezzo</label>
                    <input name="price" type="text" class="form-control" id="price" placeholder="Inserisci il prezzo">
                </div>
                <div class="col-md-6">
                    <label for="series" class="form-label">serie</label>
                    <input name="series" type="text" class="form-control" id="series" placeholder="Inserisci la serie">
                </div>
                <div class="col-md-6">
                    <label for="sesale_dateries" class="form-label">data</label>
                    <input name="sesale_dateries" type="text" class="form-control" id="sale_date"
                        placeholder="Inserisci la data">
                </div>
                <div class="col-md-6">
                    <label for="type" class="form-label">tipo</label>
                    <input name="type" type="text" class="form-control" id="type" placeholder="Inserisci la il tipo">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </section>
@endsection
