@extends('app')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 container">

        <h2>Insurances</h2>
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight"> <a class="w-100 btn btn-lg btn-primary" href="/insurance/create">Create Insurance
                    Type</a>
            </div>
            <div class="p-2 bd-highlight"> <a class="w-100 btn btn-lg btn-primary" href="/insurance/member/create">Add Member
                To Insurance</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Cost($) </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($insurances as $insurance)
                    <tr>
                        <th scope="row">{{ $insurance->id }}</th>
                        <td>{{ $insurance->name }}</td>
                        <td>{{ $insurance->description }}</td>
                        <td>{{ $insurance->cost }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
