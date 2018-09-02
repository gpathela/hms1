@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Patient Records</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($records as $record)
                            <li class="list-group-item list-group-item-action">{{$record->disease}} to {{$record->patients->name}}
                            <a class="btn btn-primary float-right" href="/admin/record/{{$record->id}}" role="button">Logs</a>
                            <br>
                            Doctor: {{$record->doctors->name}}   Nurse: {{$record->nurses->name}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection