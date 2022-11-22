@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="form-group mb-3">
            <label for="">Név</label>
            <input type="text" name="name" value="{{$user->first_name}}" class="form-control input-background">
        </div>

        <div class="form-group mb-3">
            <label for="">Email</label>
            <input type="text" name="name" value="{{$user->email}}" class="form-control input-background">
        </div>

        <div class="form-group mb-3">
            <label for="">Egyéb azonosító</label>
            <input type="text" name="name" value="{{$user->id}}" class="form-control input-background">
        </div>

        <div class="row row-cols-sm-3 row_col">
            @foreach($commments as $commment)
                <div class="card">
                    <div class="card-body">
                        <ul>
                            <li>
                                {{$commment}}
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
