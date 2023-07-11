@extends('layouts.masters')

@section('title')
    Edit-Current Offers
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Edit Current Offers.
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/update-currentOffers/{{ $currentOffers->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="from-group">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{ $currentOffers->title }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{ $currentOffers->description }}" class="form-control">
                                    </div>


                                    <div class="form-group mb-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset('images/currentOffers/'.$currentOffers->image)}}" width="70px" height="70px" alt="Image">
                                    </div>

                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="../admin/currentOffers" class="btn btn-danger">Cancel</a>
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


