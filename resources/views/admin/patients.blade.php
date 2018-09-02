@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patients</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($patients as $patient)
                            <li class="list-group-item list-group-item-action">{{$patient->name}}
                            <a class="btn btn-primary float-right" href="record/create/{{$patient->id}}" role="button">Add Record</a>
                            <br>
                            {{$patient->email}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection