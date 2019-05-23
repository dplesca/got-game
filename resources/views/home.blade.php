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

                    @if($page == 'home')
                    <h4>Right now, you have {{ $points }} points. The show is over.</h4>
                    <h5>Here's your picks</h5>
                    @elseif ($page == 'user')
                    <h4>Right now, {{ $user->name }} has {{ $points }} points. The show is over.</h4>
                    @endif
                    @include('user-picks')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
