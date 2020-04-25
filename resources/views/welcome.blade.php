@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8">
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('session') }}
        </div><br />
        @endif
        <div class="mb-4">
            <a href="/corona">Add new Case</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Country Name</td>
                    <td>Symptoms</td>
                    <td>Case</td>
                    <td colspan="2"> Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($coronacases as $case)
                 <tr>
                    <td>{{ $case->id }}</td>
                    <td>{{$case->country_name}}</td>
                    <td>{{ $case->symptoms }}</td>
                    <td>{{ $case->cases}}</td>
                    <td><a href="{{ route('coronas.edit', $case->id)}}" class="btn btn-primary"> Edit</a></td>
                    {{-- <td><a href="{{ route('coronas.delete', $case->id) }}" class="btn btn-danger"> Delete</a></td> --}}
                    <td><a href="/delete/corona/{{$case->id }}" class="btn btn-danger ">Delete</a> </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
