@extends('layouts.master')

@section('content')
    <div class="containter">
        <form method="POST" action="{{url('nilai')}}">
            @csrf
            <div class="container mt-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NILAI UTS</label>
                    <input type="number" name="UTS" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">NILAI UAS</label>
                    <input type="number" name="UAS" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </div>
@endsection
