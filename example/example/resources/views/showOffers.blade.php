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
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">Opreations</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($offer as $offer)
              <tr>
                <th scope="row">{{$offer -> id}}</th>
                <td>{{$offer -> name}}</td>
                <td>{{$offer -> price}}</td>
                <td><a href="{{url('offer/edit/'.$offer -> id)}}" class="btn btn-success">Update</a></td>
                <td><a href="{{route('offer.delete',$offer -> id)}}" class="btn btn-danger">delete</a></td>
            </tr>
              @endforeach

          </table>

    </body>
</html>
