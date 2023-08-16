@extends('layouts.master')

@section('title', 'Agriculture')

{{--@section('content')--}}
{{--    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalLabel">Добавить</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <form action="save-remittances" method="POST">--}}
{{--                    {{ csrf_field() }}--}}

{{--                    <div class="modal-body">--}}
{{--                        <div>--}}
{{--                            <select id="selectID">--}}
{{--                                <option value=”ru”>Русский</option>--}}
{{--                                <option value=”en”>English</option>--}}
{{--                                <option value=”tj”>Тоҷикӣ</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="recipient-name" class="col-form-label">Title:</label>--}}
{{--                            <input type="text" name="title" class="form-control" id="recipient-name">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="recipient-name" class="col-form-label">Description:</label>--}}
{{--                            <input type="text" name="description" class="form-control" id="recipient-name">--}}
{{--                        </div>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="input-group">--}}
{{--                                <div class="custom-file">--}}
{{--                                    <input type="file" name="image" class="custom-file-input" id="recipient-name">--}}
{{--                                    <label for="recipient-name" class="custom-file-label">Image:</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>--}}
{{--                        <button type="submit" class="btn btn-primary">Сохранить</button>--}}
{{--                    </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h4 class="card-title"> Remittance cards--}}
{{--                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Add</button>--}}
{{--                        <a href="" class="btn float-right">ru</a>--}}
{{--                        <a href="" class="btn float-right">en</a>--}}
{{--                        <a href="" class="btn float-right">tj</a>--}}
{{--                    </h4>--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--                <style>--}}
{{--                    .w-10p{--}}
{{--                        width: 10% !important;--}}
{{--                    }--}}
{{--                </style>--}}
{{--                <div class="card-body">--}}
{{--                    <div class="table-responsive">--}}
{{--                        <table class="table">--}}
{{--                            <thead class=" text-primary">--}}
{{--                            <th>--}}
{{--                                ID--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                title--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                description--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                image--}}
{{--                            </th>--}}
{{--                            <th>--}}
{{--                                Ред.--}}
{{--                            </th>--}}

{{--                            <th>--}}
{{--                                Удалить--}}
{{--                            </th>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($remittances as $card)--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        {{ $card->id }}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        {{ $card->title }}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        {{ $card->description }}--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <img src="{{asset('images/remittances/'.$card->image)}}" width="70px" height="70px" alt="Image">--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <a href="/edit-remittances/{{ $card->id }}" class="btn btn-success">EDIT</a>--}}
{{--                                    </td>--}}
{{--                                    <td>--}}
{{--                                        <form action="/delete-remittances/{{ $card->id }}" method="post">--}}
{{--                                            {{ csrf_field() }}--}}
{{--                                            {{ method_field('DELETE') }}--}}
{{--                                            <button type="submit" class="btn btn-danger">DELETE</button>--}}
{{--                                        </form>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                            @endforeach--}}
{{--                            </tbody>--}}

{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </div>--}}

{{--@endsection--}}


@section('scripts')

@endsection

