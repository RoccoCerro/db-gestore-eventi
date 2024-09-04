@extends('layouts.app')

@section('content')

<section class="edit-event">
    <div class="container py-5">
      <h1>Modifica evento</h1>
    </div>
    <div class="container">
      <form action="{{ route('admin.events.update', $event) }}" method="POST" class="form-edit-event">

        {{-- Cross Site Request Forgering --}}
        @csrf 
        @method('PUT')

        <div class="row">
          <div class="col">

            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="insert the name of the event.." value="{{ old('name', $event->name) }}" required>
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $event->description) }}</textarea>
            </div>

            <div class="mb-3">
              <label for="start" class="form-label">Start date: </label>
              <input class="form-control" type="datetime-local" id="start" name="start" value="{{ old('start', $event->start) }}"/>
            </div>

            <div class="mb-3">
              <label for="duration" class="form-label">Duration: </label>
              <input id="duration" class="form-control" type="time" name="duration" step="1" value="{{ old('duration', $event->duration) }}"/>
            </div>

          </div>

          <div class="col">

            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="text" name="image" class="form-control" id="image" placeholder="insert the url of the image.." value="{{ old('image', $event->image) }}" />
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" step="0.01" name="price" class="form-control" id="price" placeholder="insert the price.." value="{{ old('price', $event->price) }}" />
            </div>

            <div class="mb-3">
              <label for="end_of_sale" class="form-label">End of sale: </label>
              <input class="form-control" type="datetime-local" id="end_of_sale" name="end_of_sale" value="{{ old('end_of_sale', $event->end_of_sale) }}" />
            </div>

            <button class="btn btn-outline-dark">Modifica</button>

          </div>
        </div>

      </form>

      @if ($errors->any())
        <p class="">
          <ul>
            @foreach ($errors->all() as $error )
            <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
          </ul>
        </p>
      @endif
    </div>
  </section>
@endsection