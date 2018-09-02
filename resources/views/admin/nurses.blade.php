@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nurses</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($nurses as $nurse)
                            <li class="list-group-item list-group-item-action">{{$nurse->name}}<br>
                            {{$nurse->email}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection