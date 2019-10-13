@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Appointments</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{url('appointments')}}">
                        @csrf
                        <div class="form-group">
                            <label for="pname">Name</label><br>
                            <input type="text" name="pname" placeholder="Joe Doe" class="form control"><br>
                            <label for="appdate">Date of Appointment</label><br>
                            <input type="date" name="appdate" placeholder="1/1/1970" class="form control"><br>
                            <label for="gender">Gender</label><br>
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" value="Male" id="" checked class="form control " >
                            <label for="gender">Female</label>
                            <input type="radio" name="gender" value="Female" id ="" class="form control">
                            <label for="gender">Non-Binary</label>
                            <input type="radio" name="gender" value="Non-Binary" id=""class="form control" ><br>
                            <input type="submit" value="Apply" class="btn btn-primary" class="form control">

                        </div>


                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
