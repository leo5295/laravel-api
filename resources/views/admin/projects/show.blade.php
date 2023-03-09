@extends('layouts.admin')

@section('content')
<div>
    <a href="{{route('admin.projects.index')}}">
        <button class="btn btn-secondary m-3">
            <i class="fa-solid fa-arrow-left"></i>
        </button>
    </a>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Img</th>
        <th scope="col">Title</th>
        <th scope="col">Content</th>
        <th scope="col">Slug</th>
        <th scope="col">info</th>
        <th scope="col">Tech</th>
      </tr>
    </thead>
    <tbody>
        <tr>
          <td><img src="{{ asset('storage/' . $project->cover_image) }}" style="width: 50px"></td>
          <td>{{$project->title}}</td>
          <td>{{$project->content}}</td>
          <td>{{$project->slug}}</td>
          <td>{{$project->type ? $project->type->name : 'senza categoria'}}</td>
          <td>
              @forelse($project->technologies as $item)
                  <li>{{$item->name}}</li>
              @empty
              Nessuna Tecnologia
              @endforelse
          </td>
        </tr>  
    </tbody>
  </table>
@endsection