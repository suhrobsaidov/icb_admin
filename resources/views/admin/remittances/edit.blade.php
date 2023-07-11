@extends('layouts.masters')

@section('title')
    Edit-Remittance cards
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Edit Remittance cards.
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/update-remittances/{{ $remittances->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="from-group">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{ $remittances->title }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{ $remittances->description }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset('images/remittances/'.$remittances->image)}}" width="70px" height="70px" alt="Image">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="../admin/header" class="btn btn-danger">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection

