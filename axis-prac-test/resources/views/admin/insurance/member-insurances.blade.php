@extends('app')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 container">

        <h2>Member Insurances</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Member Name</th>
                    <th scope="col">Insurance Name</th>
                    <th scope="col">Created AT </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($memberInsurances as $insurance)
                    <tr>
                        <th scope="row">{{ $insurance->id }}</th>
                        <td>{{ $insurance->member->first_name }}</td>
                        <td>{{ $insurance->insurance->name }}</td>
                        <td>{{ $insurance->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
