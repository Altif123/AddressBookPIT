@extends('layouts.app')

@section('content')

        <div class="album py-5 bg-light d-flex">
            <div class="row justify-content-center">
                @foreach($data as $person => $personData)
                    <tr>

                        <div class="card" style="width: 22rem;">
                            <div class="container">
                                <div class="card-body">
                                    <h3 class="card-title">{{$personData['First_Name']}} {{$personData['Last_Name']}}</h3>
                                    <p class="card-text">{{$personData['Address']}}</p>
                                    <p class="card-text">{{$personData['Phone']}}</p>
                                </div>
                                <div class="row d-flex align-items-end mb-2">
                                    <div class="col-12 col-md-6">
                                        <form method="POST" action="/address/{{$person}}">
                                            <button type="submit" role="button" class="btn btn-secondary btn-sm">
                                                <i class="fas fa-trash inline crud-button cursor-pointer px-3 py-2">
                                                    Delete
                                                </i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <a href="/edit/{{$person}}">
                                            <button type="submit" role="button" class="btn btn-secondary btn-sm">
                                                <i class="fas fa-edit inline crud-button cursor-pointer px-3 py-2">
                                                    Edit
                                                </i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                @endforeach
            </div>
        </div>
@endsection








