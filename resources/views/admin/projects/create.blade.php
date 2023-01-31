@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="py-4">
      <h1>Crea Nuovo Progetto</h1>
      @include('partials.errors')
      <div class="mt-4">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo"
              value="{{ old('title') }}">
          </div>
          <div class="mb-3">
            <label for="company" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="company" name="company" placeholder="Inserisci il cliente"
              value="{{ old('company') }}">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="10"
              placeholder="Inserisci la descrizione">{{ old('description') }}</textarea>
          </div>
          <div class="mb-3">
            <label for="cover_image" class="form-label">Immagine</label>
            <input type="file" class="form-control" id="cover_image" name="cover_image"
              value="{{ old('cover_image') }}">
          </div>
          <div class="mb-3">
            <label for="type_id" class="form-label">Categoria</label>
            <select class="form-select" name="type_id" id="type_id">
              <option value="">Senza Categoria</option>
              @foreach ($types as $type)
                <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                  {{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Crea</button>
        </form>
      </div>
    </div>
  </div>
@endsection
