
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
    	<form class="form-group" action="" method="POST">
    		{{ csrf_field() }}
    		<label for="title">Naslov</label>

    		<input class="form-control" type="text" name="title" />
    		<label for="content">Sadrzaj:</label>
    		<textarea class="form-control" name="content"></textarea>
    		<br/>
    		<input type="submit" value="Spremi" class="btn btn-primary" />

        </div>
    </div>
</div>
@endsection
