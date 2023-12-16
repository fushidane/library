
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteBorrowedbookModal" tabindex="-1" aria-labelledby="deleteBorrowedbookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteBorrowedbookModalLabel">Delete Borrowedbook - {{$borrowedbook->borrowed_date}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('borrowedbooks/delete/' .$borrowedbook->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this Transaction?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<h1>Edit Book</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('borrowedbooks/' .$borrowedbook->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="borrowed_date">borrowed_date</label>
                <input type="date" name="borrowed_date" class="form-control" value="{{$borrowedbook->borrowed_date}}">
                @error('borrowed_date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>


            <div class="form-group mt-2">
                <label for="return_date">return_date</label>
                <input type="date" name="return_date" class="form-control" value="{{$borrowedbook->return_date}}">
                @error('return_date')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>


            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteBorrowedbookModal">Delete Borrowedbook</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit Borrowedbook</button>
            </div>
        </form>
    </div>
</div>

@endsection
