@extends('layouts.admin')

@section('content')
<div>
  <a href="{{route('admin.projects.index')}}">
      <button class="btn btn-secondary m-3">
          <i class="fa-solid fa-arrow-left"></i>
      </button>
  </a>
</div>
<div class="container-fluid">
<div>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Aggiungi titolo</label>
          <input type="text" class="form-control" id="" aria-describedby="" name="title">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Aggiungi img</label>
          <input type="file" class="form-control @error('cover_image') is-invalid @enderror" id="cover_image" name="cover_image" placeholder="Inserisci immagine">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Aggiungi contenuto</label>
            <textarea rows="5" class="form-control" id="" aria-describedby="" name="content"></textarea>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Linguaggio utilizzato</label>
          <select name="type_id" id="type_id">
            @foreach ($types as $item)
            <option value="{{ $item->id}}">{{$item->name}}</option> 
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          @foreach($technologies as $item)
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value={{$item->id}} name="technologies[]"> 
              <label class="form-check-label">{{$item->name}}</label>
            </div>
            @endforeach
        </div>
        <div class="form-group">
    
            <button type="submit" class="btn btn-primary">Aggiungi nuovo progetto</button>
        </div>
      </form>
</div>
@endsection