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

                   <form method="POST" action="">
                        @csrf
                        <div class="form-group row">
                            <label for="pname">Name</label><br>
                            <input type="text" name="pname" placeholder="Joe Doe"><br>
                            <label for="appdate">Date of Appointment</label><br>
                            <input type="date" name="appdate" placeholder="1/1/1970"><br>


                        </div>


                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
