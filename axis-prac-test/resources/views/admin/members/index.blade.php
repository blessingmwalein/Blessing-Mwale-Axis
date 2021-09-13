@extends('app')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 container">

        <h2>Members</h2>
        <a class="w-100 btn btn-lg btn-primary" href="/members/create">Create Member</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Phone </th>
                    <th scope="col">Email </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <th scope="row">{{ $member->id }}</th>
                        <td>{{ $member->first_name }}</td>
                        <td>{{ $member->last_name }}</td>
                        <td>{{ $member->phone }}</td>
                        <td>{{ $member->user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
