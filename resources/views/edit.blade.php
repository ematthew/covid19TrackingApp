@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="col-8">
        <div class="card-header">
            <h1> Edit Corona Virus Data</h1>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $errors)
                       <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div> <br />
            @endif

        <form method="POST" action="{{ route('coronas.update', $coronacases->id) }}">
            <div class="form-group">
                @csrf
                

                <label for="country_name"> Country Name:</label>
                <input type="text" class="form-control" name="country_name">
            </div>

            <div class="form-group">
                <label for="symptoms"> Symptoms</label>
                <textarea rows="5" columns="5" class="form-control" name="symptoms"></textarea>
            </div>

            <div class="form-group">
                <label for="cases"> Cases:</label>
                <input type="text" class="form-control" name="cases">
            </div>

            <button type="submit" class="btn btn-primary"> Update</button>
        </form>
        </div>
    </div>

</div>
@endsection
