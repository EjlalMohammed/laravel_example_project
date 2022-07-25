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
        <center>
        <div style="font-size:50px">
            <div class="title m-b-md">
                update your offer
            </div>
        </div>
        </center>

        <form style="margin-top: 10%" method="POST" action="{{route('offer.update', $offer -> id)}}">
            @csrf
            <center>
            <div class="form-group">
              <label for="exampleInputEmail1">offer name</label>
              <input style="width: 50%" type="text" value="{{$offer -> name}}" name='name'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                @error('name')
                <small class="form-text text-danger"> {{$message}}</small>
                @enderror

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">offer price</label>
              <input style="width: 50%" type="text" value="{{$offer -> price}}" name='price' class="form-control" id="exampleInputPassword1" placeholder="">
              @error('price')
                <small class="form-text text-danger"> {{$message}}</small>
                @enderror
            </div>
            </center>

            <center>
            <button type="submit" class="btn btn-primary">update</button>
            </center>
          </form>


    </body>
</html>
