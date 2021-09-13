@extends('app')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 container">

        <h2>Add Member</h2>
        <form action="{{ route('member-create') }}" method="post" class="col-8">
            @csrf
            <div class="form-group">
                <div class="form-floating">
                    <input type="text" name="first_name" class="form-control" id="floatingInput">
                    <label for="floatingInput">First Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="last_name" class="form-control" id="floatingInput">
                    <label for="floatingInput">Last Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="phone" class="form-control" id="floatingInput">
                    <label for="floatingInput">Phone Number</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <label for="floatingInput"> Address</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Save</button>

            </div>
        </form>

    </main>
@endsection
