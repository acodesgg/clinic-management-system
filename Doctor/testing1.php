
<!DOCTYPE html>
<html>
  <head>

   <?php 
  include('include\cssExtend.php');

   ?>
   <link rel="stylesheet" type="text/css" href="doctorcard.css">
  </head>
  <body>
   <?php 
  include('include\nav1.php');
   ?>
    
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.html"> <i class="icon-home"></i>Home                             </a></li>
            <li class="active"><a href="forms.html"> <i class="icon-form"></i>Forms                             </a></li>
            <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts                             </a></li>
            <li><a href="tables.html"> <i class="icon-grid"></i>Tables                             </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Example dropdown </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="login.html"> <i class="icon-interface-windows"></i>Login page                             </a></li>
            <li> <a href="#"> <i class="icon-mail"></i>Demo
                <div class="badge badge-warning">6 New</div></a></li>
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
            <li> <a href="#"> <i class="icon-flask"> </i>Demo
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
            <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
          </ul>
        <?php 
  include('include\nav2.php');
   ?>
     
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Forms       </li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Testing</h1>
          </header>
         <div class="row">
            <!-- Team member -->
          <?php for($i=0;$i<10;$i++){ ?>
            <div class="col-xs-12 col-sm-6 col-md-4" style="margin: 10px 0">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip" >
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="dfemale.jpg" alt="card image"></p>
                                    <h4 class="card-title">Daw Phyo Sint Myat</h4>

                                    <p class="card-text">Professor</p>
                                    
                                    <a href="#" class="btn btn-success btn-sm"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside1">
                            <div class="card">
                                <div class="card-body text-center ">
                                    <h4 class="card-title">Daw Phyo Sint Myat</h4>
                                    <p class="card-text">M.B.,B.S (YGN), M.Med.Sc, F.R.C.S (Edin)<br>
FAHA (USA), FACC (USA)<br>
Dr.Med.Sc (CVS) (Hon)<br>
Tue & Sat : 10:00 AM – 11:00 AM</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                           
                                               <a href="#" class="btn btn-success  ">Make Appointment</a>
                                            
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
          
         <?php } ?>


        </div>
        </div>
      </section>
      <?php 
  include('include\footer.php');
   ?>
    <!-- JavaScript files-->
   <?php 
  include('include\jsExtend.php');
   ?>
  </body>
</html>

