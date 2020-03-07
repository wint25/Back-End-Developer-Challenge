 <!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <title>Add Quote</title>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
 <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
	<div class="flex-center position-ref full-height">
<h1>View Quotes</h1>

 <div class="flex-center position-ref full-height">
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
									
								<td class="inner-table"> <a href="{{ url('/tvshows/' . $tvshow->id . '/edit') }}" class="btn btn-primary">Edit</a>	</td>
								<td class="inner-table"> 
										<form method="POST" action="{{ route('tvshows.destroy' , $tvshow->id)}}">
										@csrf
										@method('DELETE');
												<button type="submit">Delete</button>
										</form>
								</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>