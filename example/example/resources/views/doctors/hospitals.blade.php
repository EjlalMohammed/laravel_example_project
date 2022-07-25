<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Laravel</title>
    </head>
    <body >
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
          </div>
          @endif
        <table class="table table-dark">
            <thead>
                <tr>
                  <th scope="col">hospitals</th>
                </tr>
              </thead>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">address</th>
                <th scope="col">Opreations</th>
              </tr>
            </thead>
            <tbody>
            @if (isset($hosp) && $hosp -> count() > 0)
                @foreach ($hosp as $hospital)
                <tr>
                    <th scope="row">{{$hospital -> id}}</th>
                    <td>{{$hospital -> name}}</td>
                    <td>{{$hospital -> address}}</td>
                    <td><a href="{{route('hospital.doctors',$hospital -> id)}}" class="btn btn-success">doctors</a></td>

                </tr>
                @endforeach
              @endif

          </table>

    </body>
</html>
