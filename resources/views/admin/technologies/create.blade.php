@extends('layouts.app')

@section('page-title', 'Nuova tecnologia')

@section('main-content')
    <div class="row">
        <div class="col">
            <h1>NUova tecnologia</h1>
            <form action="{{ route('admin.technologies.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label><span class="text-danger">*</span>
                    <input type="text" class="form-control" id="title" name="title" required maxlength="64"
                        placeholder="inserisci il nome">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">prezzo</label><span class="text-danger">*</span>
                    <input type="number" class="form-control" id="price" name="price" required max="999999"
                        placeholder="inserisci il prezzo">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">descrizione</label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="inserisci la descrizione">
                </div>

                {{-- <div>
                    <label for="project_id" class="form-label">Progetti</label>
                    <select id="project_id" name="project_id" class="form-select">
                        <option selected>Seleziona un tipo</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach


                    </select>


                </div> --}}

                <div class="mb-3">
                    <label for="image" class="form-label">Immagine</label>
                    <input type="text" class="form-control" id="image" name="image"
                        placeholder="inserisci la immagine">
                </div>
                <button type="submit" class="btn btn-success w-100"> invia</button>
            </form>


        </div>
    </div>
@endsection
