@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Welcome Dear') }}
                        {{ Auth::user()->name }}
                    </div>



                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- {{ __('You are logged in!') }} --}}

                        <div class="dropdown">
                            <a class="btn btn-success dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Manage Labs
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="{{ route('computer.index') }}">
                                        Lab 
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">Weekly Report</a></li>
                                <li><a class="dropdown-item" href="#">Monthly Report</a></li>
                             
                            </ul>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
