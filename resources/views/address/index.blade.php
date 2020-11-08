<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <title>Address Book</title>
</head>
<body>
<div>
    <h1> Address Book </h1>
    <div class="container">
        <div class="row">
            @foreach($data as $person => $personData)
                <tr>
                    <div class="card" style="width: 18rem;">
                        <form method="POST" action="/address/{{$person}}">
                            {{--<input type="hidden" name="_method" value="DELETE">--}}
                            <button type="submit" role="button">
                                <i class="fas fa-trash inline crud-button cursor-pointer px-3 py-2">
                                    Delete{{$person}}
                                </i>
                            </button>
                        </form>

                        <div class="card-body">
                            @foreach($personData as $key => $value)
                                {{$key}}
                                <p class="card-text">{{$value}}</p>
                            @endforeach
                        </div>
                        <a href="#" class="btn btn-primary"></a>
                    </div>
                </tr>
            @endforeach
        </div>
    </div>
</div>


</body>
</html>





