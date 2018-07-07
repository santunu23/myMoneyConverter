<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>||MoneyConverter||</title>
     <!-- Bootstrap core CSS -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
	#show{
	  margin-left:80px;
	  margin-top:20px;
	  text-align:center;
	  }
	.jumbotron{
	  margin-top:100px;
	  width:360px;
	  margin-left:450px;
	}  
	#gehistoryrate{
	  margin-left:100px;
	}
	  </style>
	<script src='js/main.js'></script>
      </head>
  <body>
   <?php include_once'navbar.php';?>

    <main role="main" class="container">
      <div class="jumbotron">
         <p>Date: <input type="text" id="datepicker"></p>
		   <button type="button" id="gehistoryrate" class="btn btn-primary">Get Rate</button>
		   <div id="show"></div>
  </div>
    </main>
  <script src="js/vendor/bootstrap.min.js"></script>
  </body>
</html>
