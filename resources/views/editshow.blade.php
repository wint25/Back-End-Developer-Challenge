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
			<table border="1">
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
									
								<td class="inner-table"> <a href="{{ url('/tvshows/' . $tvshow->id . '/edit') }}" class="btn btn-primary">Edit</a>	</td>
							
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
