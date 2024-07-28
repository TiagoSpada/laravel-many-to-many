@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1 class="mb-3">Creazione nuovo progetto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="titolo" placeholder="Titolo" name="title">
                <label for="titolo">Titolo</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Descrizione" id="descrizione" name="description" style="height: 150px"></textarea>
                <label for="descrizione">Descrizione</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select " id="type-id" aria-label="Floating label select example" name="type_id">
                    <option selected></option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->title }}</option>
                    @endforeach
                </select>
                <label for="type-id">Selezione la tipologia</label>
            </div>
            <button class="btn btn-primary"><i class="fa-solid fa-pencil"></i>Crea nuovo progetto</button>
        </form>
    </div>
@endsection
