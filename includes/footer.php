<!--Footer start-->
<div class="row footer">
<div class="col-md-4 box">
<a href="#" data-toggle="modal" data-target="#developers" >About us</a>
</div>
<div class="col-md-4 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
<!--<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>-->
<div class="col-md-4 box">
<a href="feedback.php" target="_blank">Feedback</a></div></div>
<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:Black">About Us</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-6">
		 <img src="image/CAM00121.jpg" width=300 height=100 alt="unisyster" class="img-rounded">
		 </div>
		 <div class="col-md-6">
		<a href="https://www.facebook.com/skilloxideit" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Skill Oxide Developers</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+918700877042</h4>
		<h4 style="font-family:'typo' ">Supporat@skilloxide.com</h4>
		<h4 style="font-family:'typo' ">Established in the year 2014, Skill Oxide is a global IT services company focused on skill development, software life cycle, IT consulting and provides offshore outsourcing solutions to enterprises worldwide.
        </h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->
