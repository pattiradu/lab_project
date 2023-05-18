@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Lab Management Page') }}

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <button type="button" class="btn btn-success btn-sm">
                            <div class="dropdown">
                                <a class="btn btn-success dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Manage Labs
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('lab1') }}">
                                            Lab
                                        </a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Weekly Report</a></li>
                                    <li><a class="dropdown-item" href="#">Monthly Report</a></li>

                                </ul>
                            </div>

                        </button>


                        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Add PC
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add PC in Lab</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">


                                        <form method="POST" action="{{ route('ActivitiesController.store') }}">
                                            @csrf

                                            <div class="form-group">
                                                <label for="pcname">PC Name</label>
                                                <input type="text" name="pcname" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="pcserial_number">PC Serial Number</label>
                                                <input type="text" name="pcserial_number" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="pc_lab">PC Lab</label>
                                                <select name="pc_lab" class="form-control" required>
                                                    <option value="">Select Lab</option>
                                                    <option value="lab 1">Lab 1</option>
                                                    <option value="lab 2">Lab 2</option>
                                                    <option value="lab 3">Lab 3</option>
                                                    <option value="lab 4">Lab 4</option>
                                                    <option value="lab 5">Lab 5</option>
                                                    <option value="lab 6">Lab 6</option>
                                                    <option value="lab 7">Lab 7</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label for="pc_lab">PC Status</label>
                                                <select name="pc_lab" class="form-control" required>
                                                    <option value="">choose pc status</option>
                                                    <option value="working">working</option>
                                                    <option value="Damaged">Damaged</option>

                                                </select>
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Save</button>
                                            </div>
                                        </form>


                                    </div>

                                </div>
                            </div>
                        </div>



                        <h1>View PC</h1>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>PC Name</th>
                                    <th>PC Serial Number</th>
                                    <th>PC Lab</th>
                                    <th>PC Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($labs as $lab)
                                    <tr>
                                        <td>{{ $lab->pcname }}</td>
                                        <td>{{ $lab->pcserial_number }}</td>
                                        <td>{{ $lab->pc_lab }}</td>
                                        <td>{{ $lab->pc_status }}</td>
                                        <td>
                                            <div class="d-flex gap-3">
                                                <form action="{{ route('computer.destroy', $lab->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                        class="btn btn-sm px-3 btn-danger">Delete</button>
                                                </form>
                                                <a href="{{ route('computer.edit', $lab->id) }}">
                                                    <button class="btn btn-info btn-sm">Edit</button>
                                                </a>
                                            </div>
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
@endsection
