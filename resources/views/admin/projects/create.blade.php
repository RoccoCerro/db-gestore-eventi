@extends('layouts.app')

@section('content')
<section class="create-projects">
  <div class="container">
    <h2 class="fs-2">Add new Projects</h2>
  </div>
  <div class="container">
    <form action="{{ route('admin.projects.store') }}" method="POST">

      {{-- Cross Site Request Forgering --}}
      @csrf 

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="insert title..">
      </div>

      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input type="text" name="content" class="form-control" id="content" placeholder="insert Content..">
      </div>

      <button class="btn btn-primary">Add Projects</button>

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