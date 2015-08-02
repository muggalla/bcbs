<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>BMACBS Manager</title>
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color:#fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
		padding:10px;
	}
	
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

    #dash_window{
	padding:10px;
	box-shadow: 0 0 8px #D0D0D0;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
	margin:5px;
	}
	
	#dash_window a:hover{
	color:#FF6600;
	text-decoration:none;
	}
	
	</style>
</head>
<body>
<div><img  src="<?php echo base_url('assets/images/manager_logo.png');?>" alt=""></div>
<div align="right">Welcome <strong>User</strong> | <a href="<?php echo base_url('verifylogin/logout');?>">Logout</a></div>
<div id="container">
       <div class="row">
	   <h1>Flash News</h1>
	    <div class="col-md-2">
           asdfasdf  
        </div>
		<div class="col-md-10">
             <form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="ftitle" class="col-sm-3 control-label">Title</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="ftitle" placeholder="News Title">
      <p class="help-block">We can give title for easyness to pic particular news line</p>
    </div>
  </div>

  <div class="form-group">
    <label for="fdesc" class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
      <textarea class="form-control" id="inputPassword3" placeholder="News Description"></textarea>
      <p class="help-block">This is the description of the news</p>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-3 control-label">Status</label>
    <div class="col-sm-9">
      <div class="radio">
        <label>
          <input type="radio" name="optionsRadios" id="optionsRadios1" value="Active" checked>
          Active
        </label>
		 <label>
          <input type="radio" name="optionsRadios" id="optionsRadios2" value="Inactive">
          Inactive
        </label>
      </div>
      <p class="help-block">Status of the News Article</p>
    </div>
  </div>

  <button type="submit" class="btn btn-default">Create News</button>
</form>
        </div>
		
	   </div>
</div>

</body>
</html>