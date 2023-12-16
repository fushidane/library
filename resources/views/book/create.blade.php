@extends('pages.base')

@section('content')
    <h1>User finds Book</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ url('/books/create') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="user_id">Select User</label>
                  <select class="form-select" name="user_id" id="user_id">
                     <option hidden="true">Select User</option>
                     <option selected disabled>Select User</option>
                     @foreach ($users as $userId => $user)
                         <option value="{{$userId}}">{{$user}}</option>
                     @endforeach
                  </select>
                  @error('user_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="author">Author</label>
                    <input class="form-control" type="text" name="author">
                    @error('author')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="description">Description</label>
                    <input class="form-control" type="text" name="description">
                    @error('description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror



                    <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Add Book
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
