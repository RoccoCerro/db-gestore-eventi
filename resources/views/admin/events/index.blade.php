@extends('layouts.app')

@section('content')
  <div class="container p-5">
    <div class="row">
      @foreach ($events as $event)
        <div class="col">
          <div class="card text-center">
            <div class="card-title p-2">
              <a href="{{ route('admin.events.show', $event) }}">
                {{ $event->name }}
              </a>
            </div>
            <div class="card-btn">
              <a href="{{ route('admin.events.edit', $event) }}" class="btn btn-outline-dark">Modifica</a>
            
              <form class="project-destroy-form p-2" action="{{ route('admin.events.destroy', $event) }}" method="POST">
          
                @csrf
                @method('DELETE')
    
                <button class="btn btn-danger link-danger text-white">Elimina</button>
                
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection