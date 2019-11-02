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

                                    <form method="POST" action="{{}}">
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
                                                <label>Contacts</label>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <input type="tel" name="homecontacts" placeholder="Personal Phone Number" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <input type="tel" name="workcontacts" placeholder="Other Phone Number" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <input type="tel" name="relatives Contacts" placeholder="Contact of closest Kin" class="form-control">
                                                    </div>
                                                </div>
                                                <label for="gender">Gender</label><br>
                                                <label for="gender">Male</label>
                                                <input type="radio" name="gender" value="Male" id="" checked>
                                                <label for="gender">Female</label>
                                                <input type="radio" name="gender" value="Female" id ="" >
                                                <label for="gender">Non-Binary</label>
                                                <input type="radio" name="gender" value="Non-Binary" id =""><br>
                                                <label for="dateofBirth">Date of Birth</label>
                                                <input type="date" name="dateofBirth" class="form-control"><br>
                                                <label>Physical Address</label><br>
                                                <div class="form-row">
                                                  <div class="col">
                                                         <input type="text" class="form-control" placeholder="Street Address e.g. Muhoho Avenue"><br>
                                                  </div>
                                                  <div class="col">
                                                        <input type="text" class="form-control" placeholder="Resident Town e.g. Thika"><br>
                                                  </div>
                                                  <div class="col">
                                                      <input type="text" class="form-control" placeholder="County">
                                                  </div>
                                                </div>
                                                <label>Postal Address</label>
                                                <div class="form-row">
                                                    <div class="col">
                                                        <input type="text" placeholder="Postal Address" class="form-control">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" placeholder="Postal Zip Code" class="form-control">
                                                    </div>
                                                </div><br>
                                                <input type="submit" value="submit" class="btn btn-primary mr-auto" class="form-control">
                                    </form>
                                </div>
                            </div>
                            </div>
                            </div>
            </div>

    </body>
@endsection
