@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Doctors</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($doctors as $doctor)
                            <li class="list-group-item list-group-item-action">{{$doctor->name}}<br>
                            {{$doctor->email}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection