@extends('app')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 container">

        <h2>Add Member</h2>
        <form action="{{ route('insurance-create') }}" method="post" class="col-8">
            @csrf
            <div class="form-group">
                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput">
                    <label for="floatingInput">name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="cost" class="form-control" id="floatingInput">
                    <label for="floatingInput">Cost</label>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <label for="floatingInput"> Description</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Save</button>
            </div>
        </form>
    </main>
@endsection
