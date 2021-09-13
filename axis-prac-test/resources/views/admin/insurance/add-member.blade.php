@extends('app')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 container">

        <h2>Add Member To Insurance</h2>
        <form action="{{ route('insurance-member-create') }}" method="post" class="col-8">
            @csrf
            <div class="form-group">
                <div class="">
                    <label for="floatingInput">Member</label>
                    <select class="form-select" name="member_id" aria-label="Default select example">
                        @foreach ($members as $member)
                         <option value="{{$member->id}}">{{$member->first_name}} {{$member->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <label for="floatingInput">Insurance</label>
                    <select name="insurance_id" class="form-select" aria-label="Default select example">
                        @foreach ($insurances as $insurance)
                         <option value="{{$insurance->id}}">{{$insurance->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Save</button>
            </div>
        </form>
    </main>
@endsection
