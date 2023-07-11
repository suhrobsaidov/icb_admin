@extends('layouts.masters')

@section('title')
    Edit-Header
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Edit Header.
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/update-knowledgeBase/{{ $knowledgeBase->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group mb-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset('images/knowledgeBase/'.$knowledgeBase->image)}}" width="70px" height="70px" alt="Image">
                                    </div>
                                    <div>
                                        <label>Link</label>
                                        <input type="text" name="link" value="{{ $knowledgeBase->link }}" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="../admin/knowledgeBase" class="btn btn-danger">Cancel</a>
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

