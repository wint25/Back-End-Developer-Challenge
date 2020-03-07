@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
			<div class="card-header">View Quotes</div>
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="content">
			<table>
                    <thead>
                        <td>Season</td>
                        <td>Episode</td>
                        <td>Quote</td>
                    </thead>
                    <tbody>
                        @foreach ($allTvshows as $tvshow)
                            <tr>
                                
                                <td class="inner-table">{{ $tvshow->season }}</td>
                                <td class="inner-table">{{ $tvshow->episode }}</td>
                                <td class="inner-table">{{ $tvshow->quote }}</td>
									
								
								<td class="inner-table"> 
										<form method="POST" action="{{ route('tvshows.destroy' , $tvshow->id)}}">
										@csrf
										@method('DELETE')
												<button class="btn btn-primary" type="submit">Delete</button>
										</form>
								</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
