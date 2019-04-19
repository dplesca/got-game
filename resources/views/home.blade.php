@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($picks) < 27)
                    <a class="btn btn-primary" href="/make-your-picks">Make Your Character Survival Picks</a>
                    @else
                    <h4>Right now, you have {{ $points }} points. The show is not yet over.</h4>
                    <h5>Here's your picks</h5>
                    @include('usertable')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
