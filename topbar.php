<style>
img{
  width: 100px;
  margin-left: 100px;
}
.ml-20 {
    margin-left: 100px;
}
</style>

<nav class="navbar navbar-dark bg-success fixed-top " style="padding: 5px;">
  <div class="container-fluid">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div>
  				<!-- <i class="fa fa-building"></i> -->
          <img src="../assets/img/transparent.png" alt="" style="height: 50px; width: 50px;">
  			</div>
  		</div>
      
	  	<div class="col-md-2 float-right text-white border">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>