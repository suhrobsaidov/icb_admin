@extends('layouts.masters')

@section('title')
    Edit-Bank Services
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Edit-Bank Services.
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/update-bankService/{{ $bankService->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="from-group">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{ $bankService->title }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{ $bankService->description }}" class="form-control">
                                    </div>

                                    <div>
                                        <label>Page</label>
                                        <input type="text" name="page" value="{{ $bankService->page }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset('images/bankServices/'.$bankService->image)}}" width="70px" height="70px" alt="Image">
                                    </div>
                                    <div>
                                        <label>Link</label>
                                        <input type="text" name="link" value="{{ $bankService->link }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>Language</label>
                                        <input type="text" name="language" value="{{ $bankService->language }}" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="../admin/bankService" class="btn btn-danger">Cancel</a>
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

