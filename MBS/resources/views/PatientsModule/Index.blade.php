<!DOCTYPE html>
<html>
    <head>
        <title>Medical Specialist Booking system</title>
        <meta name = "viewport" content =" width = device-width, initial-scale =1.0">
        <link rel="stylesheet" href = "sass/app.scss" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <!---------------Header----------------->
        <section id ="header">
            <div class = "menu-bar">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand" href="#"><img id="logopic"  src="logo.PNG"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Specialists</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" >Clinics</a>
                      </li>
                        <li class="nav-item">
                        <a class="nav-link" href="logpage.html" >Login</a>
                      </li> 
                    </ul>
                  </div>
                </nav>
            </div>
            <div class ="banner text-center">
                <h1>Specialists Around You</h1>
                <p>Schedule Appointments with a click of a button</p>
            </div>
        </section>
        
        <div class="search-specialists text-center">
            <input type="text" class="form-control" placeholder = "Area of speciality">
            <input type="text" class="form-control" placeholder = "Clinic">
            <input type="text" class="form-control" placeholder = "Location">
            <input type="button" class="btn btn-primary" value = "Find Specialists">
        </div>
        
     
        <!-----------Top Clinics--------->
        <section id ="clinics">
            <div class = "container text-center">
                <h3>TOP CLINICS</h3>
                <div>
                <!---<img src="Images/Banner.jpg">--->    
                <!---------Add Images of Top local clinics logo------->
                </div>
                <div>
                <!-----add another div like the one above----->
                </div>    
            </div>    
        </section>
        <!----------------Appointments----------------->
        <section id ="specialists">
            <div class="container">
                <h5>Specialists</h5>
                <div class="clinic-details">
                    <div class="clinic-update">
                        <h4><b>Renown Neurologist (Nairobi Hospital)</b></h4>
                        <p>Nairobi Hospital</p>
                        <i class="fa fa-briefcase"></i><span>0-1 yrs</span><br>
                        <i class="fa fa-inr"></i><span>3.50 - 4.00 p.a</span><br>
                        <i class="fa fa-map-marker"></i><span> Nairobi</span><br>
                    </div>
                </div>
            </div>    
        
        </section>

        <!----------------Other links----------------------->
        <section id ="links">
          <div class= "container">

          </div>
          
        </section>
    </body>
</html>