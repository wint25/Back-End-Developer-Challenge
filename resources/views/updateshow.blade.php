@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Tv Show Quote</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <div class="flex-center position-ref full-height">
            <div class="content">
			
                <form method="POST" action="{{ route('tvshows.update' , $show->id) }}">
                    @csrf
					@method('PATCH')
                    <div class="form-input form-group row">
                        <label class="col-form-label col-md-3 text-md-right">Season</label> <input class="col-md-1"  required type="number" name="season" value="{{$show->season}}">
                    </div>
					<div class="form-input form-group row">
                        <label class="col-form-label col-md-3 text-md-right">Episode</label> <input class="col-md-1"  required type="number" name="episode" value="{{$show->episode}}">
                    </div>
					<div class="form-input form-group row">
                        <label class="col-form-label col-md-3 text-md-right">Quote</label> <input class="col-md-6" required type="text" name="quote" value="{{$show->quote}}">
                    </div>
					<div class="offset-md-8">
					 <button class="btn btn-primary " type="submit">Submit</button>
					 </div>
				</form>
			 </div>
 </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
