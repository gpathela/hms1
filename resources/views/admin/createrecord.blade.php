@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Record for Patient {{ $patient->name}}</div>

                <div class="card-body">
                <form method="POST" action="/admin/record" aria-label="">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Disease</label>
                            <div class="col-md-6">
                                <input type="text" name="disease" required autofocus>                                
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Doctor</label>
                            <div class="col-md-6">
                                <select name="doctor">
                                    @foreach($doctors as $doctor)
                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                    @endforeach                                                                                                       
                                </select>                                
                             </div>
                        </div> 
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nurse</label>
                            <div class="col-md-6">
                                <select name="nurse">
                                    @foreach($nurses as $nurse)
                                    <option value="{{$nurse->id}}">{{$nurse->name}}</option>
                                    @endforeach                                                                                                       
                                </select>                                
                             </div>
                        </div> 
                        
                        <input type="hidden" name="patient" value="{{$patient->id}}">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection