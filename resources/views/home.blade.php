@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($picks) < 27)
                    <a class="btn btn-primary" href="/make-your-picks">Make Your Picks</a>
                    @else
                    You have 0 points.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
