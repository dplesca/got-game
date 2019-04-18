@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h2>Tell us who makes it</h2>
        <form method="post" action="/submit">
            @csrf
            <?php foreach($characters as $c):?>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label"><?= $c->name ?></label>
                <div class="col-sm-4">
                    <select name="c<?= $c->id ?>" class="form-control">
                        <option value="alive">Alive</option>
                        <option value="dead">Dead</option>
                    </select>
                </div>
                <div class="col-sm-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="ww<?= $c->id ?>" id="ww<?= $c->id ?>" value="1">
                    <label class="form-check-label" for="ww<?= $c->id ?>">White Walker</label>
                </div></div>
            </div>
            <?php endforeach;?>
            <div class="form-group row">
                <div class="col-sm-4 offset-md-3">
                    <button type="submit" class="btn btn-primary btn-lg">I'm sure of who lives and who dies</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
