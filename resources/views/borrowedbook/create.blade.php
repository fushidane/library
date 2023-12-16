@extends('pages.base')

@section('content')
    <h1>user borrowedbook</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{ url('/borrowedbooks/create') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="book_id">Select Title</label>
                  <select class="form-select" name="book_id" id="book_id">
                     <option hidden="true">Select Title</option>
                     <option selected disabled>Select Title</option>
                     @foreach ($books as $bookId => $book)
                         <option value="{{$bookId}}">{{$book}}</option>
                     @endforeach
                  </select>
                  @error('book_id')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                </div>

                {{-- <div class="form-group">
                    <label for="borrowedbook_id">Select borrowedbook</label>
                    <select class="form-select" name="borrowedbook_id" id="borrowedbook_id">
                       <option hidden="true">Select borrowedbook</option>
                       <option selected disabled>Select borrowedbook</option>
                       @foreach ($borrowedbooks as $borrowedbookId => $borrowedbook)
                           <option value="{{$borrowedbookId}}">{{$borrowedbook}}</option>
                       @endforeach
                    </select>
                    @error('borrowedbook_id')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div> --}}

                <div class="form-group mt-2">
                    <label for="borrowed_date">borrowed_date</label>
                    <input class="form-control" type="date" name="borrowed_date">
                    @error('borrowed_date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="form-group mt-2">
                    <label for="return_date">return_date</label>
                    <input class="form-control" type="date" name="return_date">
                    @error('return_date')
                        <p class="text-danger">{{$message}}</p>
                    @enderror



                    <div class="form-group my-3 d-grid d-md-flex justify-content-end">
                    <button class="btn btn-primary me-md-2 mt-2" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
