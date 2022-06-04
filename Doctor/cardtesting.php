<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');
@import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
body{
    font-family: 'Open Sans', sans-serif;
}
*:hover{
    -webkit-transition: all 1s ease;
    transition: all 1s ease;
}
section{
    float:left;
    width:100%;
    background: #fff;  /* fallback for old browsers */
    padding:30px 0;
}


/*Profile Card 1*/
.profile-card-1 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  color: #ffffff;
  text-align: center;
  height:368px;
  border:none;
}
.profile-card-1 .background {
  width:100%;
  vertical-align: top;
  opacity: 0.9;
  -webkit-filter: blur(5px);
  filter: blur(5px);
   -webkit-transform: scale(1.8);
  transform: scale(2.8);
}
.profile-card-1 .card-content {
  width: 100%;
  padding: 15px 25px;
  position: absolute;
  left: 0;
  top: 50%;
}
.profile-card-1 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.profile-card-1 h2 {
  margin: 0 0 5px;
  font-weight: 600;
  font-size:25px;
}
.profile-card-1 h2 small {
  display: block;
  font-size: 15px;
  margin-top:10px;
}
.profile-card-1 i {
  display: inline-block;
    font-size: 16px;
    color: #ffffff;
    text-align: center;
    border: 1px solid #fff;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-1 .icon-block{
    float:left;
    width:100%;
    margin-top:15px;
}
.profile-card-1 .icon-block a{
    text-decoration:none;
}
.profile-card-1 i:hover {
  background-color:#fff;
  color:#2E3434;
  text-decoration:none;
}

/*Profile card 2*/
.profile-card-2 .card-img-block{
    float:left;
    width:100%;
    height:150px;
    overflow:hidden;
}
.profile-card-2 .card-body{
    position:relative;
}
.profile-card-2 .profile {
  border-radius: 50%;
  position: absolute;
  top: -42px;
  left: 15%;
  max-width: 75px;
  border: 3px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
}
.profile-card-2 h5{
    font-weight:600;
    color:#6ab04c;
}
.profile-card-2 .card-text{
    font-weight:300;
    font-size:15px;
}
.profile-card-2 .icon-block{
    float:left;
    width:100%;
}
.profile-card-2 .icon-block a{
    text-decoration:none;
}
.profile-card-2 i {
  display: inline-block;
    font-size: 16px;
    color: #6ab04c;
    text-align: center;
    border: 1px solid #6ab04c;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-2 i:hover {
  background-color:#6ab04c;
  color:#fff;
}

/*Profile Card 3*/
.profile-card-3 {
  font-family: 'Open Sans', Arial, sans-serif;
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  text-align: center;
  height:368px;
  border:none;
}
.profile-card-3 .background-block {
    float: left;
    width: 100%;
    height: 200px;
    overflow: hidden;
}
.profile-card-3 .background-block .background {
  width:100%;
  vertical-align: top;
  opacity: 0.9;
  -webkit-filter: blur(0.5px);
  filter: blur(0.5px);
   -webkit-transform: scale(1.8);
  transform: scale(2.8);
}
.profile-card-3 .card-content {
  width: 100%;
  padding: 15px 25px;
  color:#232323;
  float:left;
  background:#efefef;
  height:50%;
  border-radius:0 0 5px 5px;
  position: relative;
  z-index: 9999;
}
.profile-card-3 .card-content::before {
    content: '';
    background: #efefef;
    width: 120%;
    height: 100%;
    left: 11px;
    bottom: 51px;
    position: absolute;
    z-index: -1;
    transform: rotate(-13deg);
}
.profile-card-3 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 50%;
  left: 50%;
  max-width: 100px;
  opacity: 1;
  box-shadow: 3px 3px 20px rgba(0, 0, 0, 0.5);
  border: 2px solid rgba(255, 255, 255, 1);
  -webkit-transform: translate(-50%, 0%);
  transform: translate(-50%, 0%);
  z-index:99999;
}
.profile-card-3 h2 {
  margin: 0 0 5px;
  font-weight: 600;
  font-size:25px;
}
.profile-card-3 h2 small {
  display: block;
  font-size: 15px;
  margin-top:10px;
}
.profile-card-3 i {
  display: inline-block;
    font-size: 16px;
    color: #232323;
    text-align: center;
    border: 1px solid #232323;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-3 .icon-block{
    float:left;
    width:100%;
    margin-top:15px;
}
.profile-card-3 .icon-block a{
    text-decoration:none;
}
.profile-card-3 i:hover {
  background-color:#232323;
  color:#fff;
  text-decoration:none;
}


/*Profile card 4*/
.profile-card-4 .card-img-block{
    float:left;
    width:100%;
    height:150px;
    overflow:hidden;
}
.profile-card-4 .card-body{
    position:relative;
}
.profile-card-4 .profile {
    border-radius: 50%;
    position: absolute;
    top: -62px;
    left: 50%;
    width:100px;
    border: 3px solid rgba(255, 255, 255, 1);
    margin-left: -50px;
}
.profile-card-4 .card-img-block{
    position:relative;
}
.profile-card-4 .card-img-block > .info-box{
    position:absolute;
    background:rgba(217,11,225,0.6);
    width:100%;
    height:100%;
    color:#fff;
    padding:20px;
    text-align:center;
    font-size:14px;
   -webkit-transition: 1s ease;
    transition: 1s ease;
    opacity:0;
}
.profile-card-4 .card-img-block:hover > .info-box{
    opacity:1;
    -webkit-transition: all 1s ease;
    transition: all 1s ease;
}
.profile-card-4 h5{
    font-weight:600;
    color:#d90be1;
}
.profile-card-4 .card-text{
    font-weight:300;
    font-size:15px;
}
.profile-card-4 .icon-block{
    float:left;
    width:100%;
}
.profile-card-4 .icon-block a{
    text-decoration:none;
}
.profile-card-4 i {
  display: inline-block;
    font-size: 16px;
    color: #d90be1;
    text-align: center;
    border: 1px solid #d90be1;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 50%;
    margin:0 5px;
}
.profile-card-4 i:hover {
  background-color:#d90be1;
  color:#fff;
}

/*Profile Card 5*/
.profile-card-5{
    margin-top:20px;
}
.profile-card-5 .btn{
    border-radius:2px;
    text-transform:uppercase;
    font-size:12px;
    padding:7px 20px;
}
.profile-card-5 .card-img-block {
    width: 91%;
    margin: 0 auto;
    position: relative;
    top: -20px;
    
}
.profile-card-5 .card-img-block img{
    border-radius:5px;
    box-shadow:0 0 10px rgba(0,0,0,0.63);
}
.profile-card-5 h5{
    color:#4E5E30;
    font-weight:600;
}
.profile-card-5 p{
    font-size:14px;
    font-weight:300;
}
.profile-card-5 .btn-primary{
    background-color:#4E5E30;
    border-color:#4E5E30;
}
	</style>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<section>
    <div class="container">
    	<div class="row">
    	    <h1 class="text-center"><span>Bootstrap 4 Cards</span>Created with <i class="fa fa-heart"></i> from Grafreez</h1>
    	    
    		<div class="col-md-4">
    		    <div class="card profile-card-1">
    		        <img src="covers/bg2.jpg" alt="profile-sample1" class="background"/>
    		        <img src="covers/dfemale.png" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Daw Phyo Sin Myat<small>Neurologists Specialist</small></h3>
                    <div class="icon-block"><a href="#" class="text-secondary">View Records</a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p>
    		</div>
    		<div class="col-md-4">
    		    <div class="card profile-card-1">
    		        <img src="covers/bg3.jpg" alt="profile-sample1" class="background"/>
    		        <img src="covers/dfemale.png" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Daw Phyo Sin Myat<small>Neurologists Specialist</small></h3>
                    <div class="icon-block"><a href="#" class="text-secondary">View Records</a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p>
    		</div><div class="col-md-4">
    		    <div class="card profile-card-1">
    		        <img src="covers/bg2.jpg" alt="profile-sample1" class="background"/>
    		        <img src="covers/dfemale.png" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Daw Phyo Sin Myat<small>Neurologists Specialist</small></h3>
                    <div class="icon-block"><a href="#" class="text-secondary">View Records</a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p>
    		</div>
    		<div class="col-md-4">
    		    <div class="card profile-card-1">
    		        <img src="covers/bg3.jpg" alt="profile-sample1" class="background"/>
    		        <img src="covers/dfemale.png" alt="profile-image" class="profile"/>
                    <div class="card-content">
                    <h2>Daw Phyo Sin Myat<small>Neurologists Specialist</small></h3>
                    <div class="icon-block"><a href="#" class="text-secondary">View Records</a></div>
                    </div>
                </div>
                <p class="mt-3 w-100 float-left text-center"><strong>Basic Profile Card</strong></p>
    		</div>
    		
    		
    	</div>
    </div>
</section>
</body>
</html>