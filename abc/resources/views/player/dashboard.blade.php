@extends('layouts.app')

@section('content')
<div class="container">
    @include('components.navbar')
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Player Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to your dashboard, {{ Auth::user()->name }}!

                    <div class="mt-4">
                        <h4>Your Stats</h4>
                        <ul>
                            <li>Test</li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <h4>Recent Activities</h4>
                       <ul>
                        <li>Test Two</li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection</div>