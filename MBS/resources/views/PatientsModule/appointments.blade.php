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
                            <label for="fname">First Name</label><br>
                            <input type="text" name="fname" placeholder="John" class="form control"><br>
                            <label for="mname">Middle Name</label><br>
                            <input type="text" name="mname" placeholder="Doe" class="form control"><br>
                            <label for="lname">Last Name</label><br>
                            <input type="text" name="lname" placeholder="John" class="form control"><br>
                            <label for="email">Email</label><br>
                            <input type="text" name="email" placeholder="Johndoe@mail.com" class="form control"><br>
                            <label for="contacts">Contacts</label><br>
                            <input type="text" name="contacts" placeholder="+254712345678" class="form control"><br>
                            <label for="gender">Gender</label><br>
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" value="Male" id="" checked class="form control">
                            <label for="gender">Female</label>
                            <input type="radio" name="gender" value="Female" id ="" class="form control"><br>
                            <label for="gender">Non-Binary</label>
                            <input type="radio" name="gender" value="Non-Binary" id ="" class="form control"><br>
                            <label for="appdate">Date of Appointment</label><br>
                            <input type="date" name="appdate" placeholder="1/1/1970" class="form control"><br>
                            <label for="insuarance">Insuarance</label><br>
                            <label for="insuarance">Yes</label>
                            <input type="radio" name="insuarance" value="Yes" id="" checked class="form control " >
                            <label for="insuarance">No</label>
                            <input type="radio" name="insuarance" value="No" id ="" class="form control"><br>
                            <label for="special">Type of Specilaist to be visited:</label><br>
                            <input type="text" name="special" placeholder="Oncologist" class="form control"><br>
                            <input type="submit" value="Apply" class="btn btn-primary" class="form control">

                        </div>


                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
