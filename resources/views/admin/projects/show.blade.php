@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>{{ $project->title }}</h1>
        <p class="fs-5 mt-4">{{ $project->description }}</p>
        <hr>
        <div class="mb-2">Type: {{ $project->type?->title ?: 'non presente nel DB' }}</div>
        <div>
            @if (count($project->technologies) == 1)
                Technology:
            @elseif (count($project->technologies) > 1)
                Technologies:
            @endif
            <ul>
                @foreach ($project->technologies as $technology)
                    <li>{{ $technology->title }}</li>
                @endforeach

            </ul>
        </div>
        <hr>
        <div class="d-flex gap-2 align-items-center">
            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning fs-6" as="button">
                Modifica
            </a>
            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger fs-6">Elimina</button>

            </form>
        </div>
    </div>
@endsection
