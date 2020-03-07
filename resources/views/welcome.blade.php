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
@if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

  <!--<div class="content">
                <div class="title m-b-md">
                    TV Shows
                </div>

        <div class="links">
		{{-- {{ config('app.url')}} --}}
         <!-- <a href="http://127.0.0.1:8181/tvshows/create">Add Quote</a>
          <a href="http://127.0.0.1:8181/tvshows">View Shows</a>
		  <a href="{{ config('app.url')}}:8181/tvshows/update">Edit Show</a>
		  <a href="{{ config('app.url')}}:8181/tvshows/destroy">Delete Show</a>
        </div>
            </div>
        </div>
    </body>
</html> -->
