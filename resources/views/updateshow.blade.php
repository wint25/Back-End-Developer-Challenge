<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <title>Edit Quote</title>
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
<h1>Edit Tv Show Quote</h1>

 <div class="flex-center position-ref full-height">
            <div class="content">
			
                <form method="POST" action="{{ route('tvshows.update' , $show->id) }}">
                    @csrf
					@method('PATCH');
                    <div class="form-input">
                        <label>Season</label> <input type="number" name="season" value="{{$show->season}}">
                    </div>
					<div class="form-input">
                        <label>Episode</label> <input type="number" name="episode" value="{{$show->episode}}">
                    </div>
					<div class="form-input">
                        <label>Quote</label> <input type="text" name="quote" value="{{$show->quote}}">
                    </div>
					 <button type="submit">Submit</button>
				</form>
			 </div>
 </div>
 </div>
   </body>
    </html>