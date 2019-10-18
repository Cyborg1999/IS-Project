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
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" name="fname" placeholder="First Name" class="form-control"><br>
                                </div>
                                <div class="col">
                                    <input type="text" name="mname" placeholder="Middle Name" class="form-control"><br>
                                </div>
                                <div class="col">
                                    <input type="text" name="lname" placeholder="Surname" class="form-control"><br>
                                </div>
                            </div>
                            <label for="email">Email</label><br>
                            <input type="text" name="email" placeholder="Johndoe@mail.com" class="form-control"><br>
                            <label for="contacts">Contacts</label><br>
                            <input type="tel" name="contacts" placeholder="+254712345678" class="form-control"><br>
                            <label for="gender">Gender</label><br>
                            <label for="gender">Male</label>
                            <input type="radio" name="gender" value="Male" id="" checked>
                            <label for="gender">Female</label>
                            <input type="radio" name="gender" value="Female" id ="" >
                            <label for="gender">Non-Binary</label>
                            <input type="radio" name="gender" value="Non-Binary" id =""><br>
                            <label for="appdate">Date of Appointment</label><br>
                            <input type="date" name="appdate" placeholder="1/1/1970" class="form-control"><br>
                            <label for="insuarance">Insuarance</label><br>
                            <label for="insuarance">Yes</label>
                            <input type="radio" name="insuarance" value="Yes" id="" checked>
                            <label for="insuarance">No</label>
                            <input type="radio" name="insuarance" value="No" id =""><br>
                            <label for="special">Type of Specilaist to be visited:</label><br>
                            <select  name="special" placeholder="Oncologist" class="form-control"><br>
                                    //add foreach
                            </select><br>
                            <label for ="request">Medical Issue</label><br>
                            <textarea name ="request" class="form-control" row ="4"></textarea><br>
                            <input type="submit" value="Apply" class="btn btn-primary" class="form-control">

                        </div>


                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
