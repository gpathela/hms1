@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Log</div>

                <div class="card-body">
                <form method="POST" action="/admin/logs" aria-label="">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>
                            <div class="col-md-6">
                                <input type="text" name="title" required autofocus>                                
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Details</label>
                            <div class="col-md-6">
                            <textarea name="details" rows="10" cols="40"></textarea>                                
                            </div>
                        </div>
                        
                        <input type="hidden" name="record" value="{{$record->id}}">

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