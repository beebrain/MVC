<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Holo Theme</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="<?php echo base_url("assets/css/styles.css"); ?> " rel="stylesheet">
	</head>
	<body>
<div class="page-container">
  
	<!-- top navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="#">Bootstrap Holo</a>
    	</div>
    </nav>
      
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-left">
        
        <!--sidebar-->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
          <div data-spy="affix" data-offset-top="45" data-offset-bottom="90">
            <ul class="nav" id="sidebar-nav">
              <li><a href="#">Home</a></li>
              <li><a href="#section1">Section 1</a></li>
              <li><a href="#section2">Section 2</a></li>
              <li><a href="#section3">Section 3</a></li>
              <li><a href="#">Holo Theme</a></li>
            </ul>
           </div>
        </div><!--/sidebar-->
  	
        <!--/main-->
        <div class="col-xs-12 col-sm-9" data-spy="scroll" data-target="#sidebar-nav">
          <div class="row">
           	 <div class="col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Newest Items</h4></div>
                    <div class="panel-body">
                      <div class="list-group">
                        <a href="#" class="list-group-item active">Active item</a>
                        <a href="#" class="list-group-item">Second item</a>
                        <a href="#" class="list-group-item">Third item</a>
                        <a href="#" class="list-group-item">Another item</a>
                        <a href="#" class="list-group-item">Another item</a>
                        <a href="#" class="list-group-item">Another item</a>
                        <a href="#" class="list-group-item">Another item</a>
                        <a href="#" class="list-group-item">Another item</a>
                        <a href="#" class="list-group-item">Another item</a>
                      </div>
                    </div><!--/panel-body-->
                </div><!--/panel-->
             
                <div class="well"> 
                     <form class="form-horizontal" role="form">
                      <h4>What's New</h4>
                       <div class="form-group" style="padding:14px;">
                        <textarea class="form-control" placeholder="Update your status"></textarea>
                      </div>
                      <button class="btn btn-success pull-right" type="button">Post</button><ul class="list-inline"><li><a href="#"><i class="glyphicon glyphicon-align-left"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-center"></i></a></li><li><a href="#"><i class="glyphicon glyphicon-align-right"></i></a></li></ul>
                    </form>
                </div><!--/well-->
             
                <div class="panel panel-default">
                   <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Responsive Design</h4></div>
                    <div class="panel-body">
                      <p><img src="//placehold.it/100" class="img-circle pull-right"> <a href="#">Bootstrap Playground</a></p>
                      <div class="clearfix"></div>
                      <hr>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                      Aliquam in felis sit amet augue.
                      <hr>
                      <div class="btn-group pull-right btn-toggle"> 
                        <button class="btn btn-default">ON</button>
                        <button class="btn btn-primary active">OFF</button>
                      </div>
                    </div><!--/panel-body-->
                 </div><!--/panel-->
            </div><!--/col-->
            
            <div class="col-sm-6">
                 <div class="well"> 
                     <form class="form">
                      <h4>Sign-up</h4>
                      <div class="input-group text-center">
                      <input type="text" class="form-control input-lg" title="Don't worry. We hate spam, and will not share your email with anyone." placeholder="Enter your email address">
                        <span class="input-group-btn"><button class="btn btn-lg btn-primary" type="button">OK</button></span>
                      </div>
                    </form>
                 </div><!--/well-->
        
                 <div class="panel panel-default">
                   <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>People You May Know</h4></div>
                    <div class="panel-body">
                      <p><img src="//placehold.it/100" class="img-circle pull-right"> <a href="#">Bootstrap Playground</a></p>
                      <div class="clearfix"></div>
                      <hr>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                      Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                      dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                      Aliquam in felis sit amet augue.
                      <hr>
                      <div class="btn-group pull-right btn-toggle"> 
                        <button class="btn btn-default">ON</button>
                        <button class="btn btn-primary active">OFF</button>
                      </div>
                    </div><!--/panel-body-->
                 </div><!--/panel-->
              
                 <div class="panel panel-default">
                   <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Portlet Heading</h4></div>
                    <div class="panel-body">
                      <ul class="list-group">
                        <li class="list-group-item">
                          <span href="#" class="btn-group btn-toggle pull-right"> 
                        	<button class="btn btn-xs btn-default">On</button>
                        	<button class="btn btn-xs btn-primary active">Off</button>
                       	  </span>  
                          Bootply
                        </li>
                      <li class="list-group-item">
                        <span href="#" class="btn-group btn-toggle pull-right"> 
                        	<button class="btn btn-xs btn-primary active">On</button>
                        	<button class="btn btn-xs btn-default">Off</button>
                       	  </span> Templates</li>
                      <li class="list-group-item">
                        <span href="#" class="btn-group btn-toggle pull-right"> 
                        	<button class="btn btn-xs btn-default">On</button>
                        	<button class="btn btn-xs btn-primary active">Off</button>
                       	  </span> Snippets</li>
                      </ul>
                    </div><!--/panel-body-->
                 </div><!--/panel-->
              </div><!--/col-->
          </div><!--/row-->

          	<div class="clearfix"></div>
          
        </div><!--/.col-xs-12-->
      </div><!--/.row-->
    </div>
  </div><!--/.container-->
</div><!--/.page-container-->
  
<footer><!--footer-->
  <div class="container">
      	<div class="row">
          <ul class="list-unstyled text-right">
            <li class="col-sm-4 col-xs-6">
              <a href="#">About</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Services</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Studies</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">References</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Login</a>
            </li>
           <li class="col-sm-4 col-xs-6">
              <a href="#">Press</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Contact</a>
            </li>
            <li class="col-sm-4 col-xs-6">
              <a href="#">Impressum</a>
            </li>
          </ul>
		</div><!--/row-->
    </div><!--/container-->
</footer>
        
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/scripts.js"); ?>"></script>
	</body>
</html>