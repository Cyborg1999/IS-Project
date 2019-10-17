@extends('layouts.app');
@section('dataform');
    <body>
            <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Personal Infomation</div>

                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

        <form>
           <!-- <input type="text" placeholder="FirstName" name="firstname">
            <input type="radio" name ="gender" value="male">Male-->
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


        </form>
    </div>
</div>
</div>
</div>
</div>

    </body>
@endsection
