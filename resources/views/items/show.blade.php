@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

	    	<h2> {{ $item->title }} </h2>
            <p>{{$item->created_at}}</p>


	        <div>{{ $item->content }}</div>
	        @if ( auth()->id() == $item->user_id )
	        <a href={{ url('item/'.$item->id.'/del')}} class="btn btn-danger">Delete</a>
	        @endif
	    </form>
        </div>
    </div>
</div>
@endsection
