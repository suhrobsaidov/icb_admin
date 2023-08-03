@extends('layouts.masters')

@section('title')
    Header
@endsection

@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/header" method="POST">
                    @csrf

                    <div class="modal-body">
                        <div>
                            <select id="selectID">
                                <option value=”ru”>Русский</option>
                                <option value=”en”>English</option>
                                <option value=”tj”>Тоҷикӣ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" name="title" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description:</label>
                            <input type="text" name="description" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Page:</label>
                            <input type="text" name="page" class="form-control" id="recipient-name">
                        </div>
                        <div class="input-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="recipient-name">
                                    <label for="" class="custom-file-label">Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Link:</label>
                            <input type="text" name="link" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Language:</label>
                            <input type="text" name="language" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Headers
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
                        <a href="" class="btn float-right">ru</a>
                        <a href="" class="btn float-right">en</a>
                        <a href="" class="btn float-right">tj</a>
                    </h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <style>
                    .w-10p{
                        width: 10% !important;
                    }
                </style>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                ID
                            </th>
                            <th>
                                title
                            </th>
                            <th>
                                description
                            </th>
                            <th>
                                page
                            </th>
                            <th>
                                image
                            </th>
                            <th>
                                link
                            </th>
                            <th>
                                language
                            </th>
                            <th>
                                Ред.
                            </th>

                            <th>
                                Удалить
                            </th>
                            </thead>
                            <tbody>
                            @foreach($headers as $header)
                                <tr>
                                    <td>
                                        {{ $header->id }}
                                    </td>
                                    <td>
                                        {{ $header->title }}
                                    </td>
                                    <td>
                                        {{ $header->description }}
                                    </td>
                                    <td>
                                        {{ $header->page }}
                                    </td>
                                    <td>
                                        <img src="{{asset('images/headers/'.$header->image)}}" width="70px" height="70px" alt="Image">
                                    </td>
                                    <td>
                                        {{ $header->link }}
                                    </td>
                                    <td>
                                        {{ $header->language }}
                                    </td>

                                    <td>
                                        <a href="/edit-header/{{ $header->id }}" class="btn btn-success">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/delete-header/{{ $header->id }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/header" method="POST">
                    @csrf

                    <div class="modal-body">
                        <div>
                            <select id="selectID">
                                <option value=”ru”>Русский</option>
                                <option value=”en”>English</option>
                                <option value=”tj”>Тоҷикӣ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Title:</label>
                            <input type="text" name="title" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Description:</label>
                            <input type="text" name="description" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Page:</label>
                            <input type="text" name="page" class="form-control" id="recipient-name">
                        </div>
                        <div class="input-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="recipient-name">
                                    <label for="" class="custom-file-label">Image</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Link:</label>
                            <input type="text" name="link" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Language:</label>
                            <input type="text" name="language" class="form-control" id="recipient-name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Headers
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>
                        <a href="" class="btn float-right">ru</a>
                        <a href="" class="btn float-right">en</a>
                        <a href="" class="btn float-right">tj</a>
                    </h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <style>
                    .w-10p{
                        width: 10% !important;
                    }
                </style>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                ID
                            </th>
                            <th>
                                title
                            </th>
                            <th>
                                description
                            </th>
                            <th>
                                page
                            </th>
                            <th>
                                image
                            </th>
                            <th>
                                link
                            </th>
                            <th>
                                language
                            </th>
                            <th>
                                Ред.
                            </th>

                            <th>
                                Удалить
                            </th>
                            </thead>
                            <tbody>
                            @foreach($headers as $header)
                                <tr>
                                    <td>
                                        {{ $header->id }}
                                    </td>
                                    <td>
                                        {{ $header->title }}
                                    </td>
                                    <td>
                                        {{ $header->description }}
                                    </td>
                                    <td>
                                        {{ $header->page }}
                                    </td>
                                    <td>
                                        <img src="{{asset('images/headers/'.$header->image)}}" width="70px" height="70px" alt="Image">
                                    </td>
                                    <td>
                                        {{ $header->link }}
                                    </td>
                                    <td>
                                        {{ $header->language }}
                                    </td>

                                    <td>
                                        <a href="/edit-header/{{ $header->id }}" class="btn btn-success">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="/delete-header/{{ $header->id }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">DELETE</button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection


@section('scripts')

@endsection

