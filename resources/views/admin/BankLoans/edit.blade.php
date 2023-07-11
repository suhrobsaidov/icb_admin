@extends('layouts.masters')

@section('title')
    Edit-Bank Loans
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Edit Bank loans.
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="/update-bankLoans/{{ $bankLoans->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="from-group">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{ $bankLoans->title }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{ $bankLoans->description }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{asset('images/bankLoans/'.$bankLoans->image)}}" width="70px" height="70px" alt="Image">
                                    </div>
                                    <div>
                                        <label>Link</label>
                                        <input type="text" name="link" value="{{ $bankLoans->link }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>maintense</label>
                                        <input type="text" name="maintense" value="{{ $bankLoans->maintense }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>security</label>
                                        <input type="text" name="security" value="{{ $bankLoans->security }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>access</label>
                                        <input type="text" name="access" value="{{ $bankLoans->access }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>commission</label>
                                        <input type="text" name="commission" value="{{ $bankLoans->commission }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>time</label>
                                        <input type="text" name="time" value="{{ $bankLoans->time }}" class="form-control">
                                    </div>
                                    <div>
                                        <label>Language</label>
                                        <input type="text" name="money" value="{{ $bankLoans->money }}" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                    <a href="../admin/bankLoans" class="btn btn-danger">Cancel</a>
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



