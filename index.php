
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>||MoneyConverter||</title>
     <!-- Bootstrap core CSS -->
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
	  </style>
	  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
	<script>
	  $.ajax({
		     url: "http://apilayer.net/api/live?access_key=ebdcd7fc0c0bfafbad3f02c84bfb687b",
			 type:"GET",
			 dataType:"jsonp",
			 success:function(data){
			    var widget=show(data);
				$('#show').html(widget);
				 var  datas=data.quotes;
				 console.log();
				
			 }
		  });
  function show( data ) {
var records = '';
var p = data.quotes;
for ( var key in p ) {
if ( p.hasOwnProperty( key ) ) {
records += "<tr><td>" + key + ": "+ p[ key ] +" </td></tr>";
}
}
return records;

}
  
	</script>
      </head>

  <body>

   <?php include_once'navbar.php';?>
    <main role="main" class="container">
      <div class="jumbotron">
    <table class="table">
    <tbody>
    <tr>
	<div id="show"></div>
    </tr>
     </tbody>
   </table>
	  </div>
    </main>
  <script src="js/vendor/bootstrap.min.js"></script>
  </body>
</html>
