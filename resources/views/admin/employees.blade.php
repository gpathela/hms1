@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($employees as $employee)
                            <li class="list-group-item list-group-item-action">{{$employee->name}}<br>
                            {{$employee->roles->name}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection