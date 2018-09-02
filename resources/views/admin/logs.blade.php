@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Record Logs
                    <span><a class="btn btn-primary float-right" href="/admin/logs/create/{{$record->id}}" role="button">Add Log</a></span>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($logs as $log)
                            <li class="list-group-item list-group-item-action">{{$log->title}} 
                            <a class="btn btn-primary float-right" href="/admin/record/{{$record->id}}" role="button">Logs</a>
                            <br>
                            Doctor:    Nurse: 
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection