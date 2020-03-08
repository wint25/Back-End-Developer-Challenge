@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
		<div class="card">
          <div class="flex-center position-ref full-height">
		  <div class="card-header">Add Tv Show Quote</div>

<div class="card-body">
 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="flex-center position-ref full-height">
            <div class="content">
			
                <form method="POST" action="<?php echo action('ShowController@store'); ?>">
                    @csrf
                    <div class="form-input">
                        <label>Season</label> <input required type="number" name="season">
                    </div>
					<div class="form-input">
                        <label>Episode</label> <input required type="number" name="episode">
                    </div>
					<div class="form-input">
                        <label>Quote</label> <input required type="text" name="quote">
                    </div>
					 <button type="submit">Submit</button>
				</form>
			 </div>
			 </div>
			 </div>
 </div>
  </div>
    </div>
</div>
</div>
@endsection
	

 

                   
