	$( function() {
    $( "#datepicker" ).datepicker({dateFormat:'yy-mm-dd'});
        } );
	
	$(document).ready(function(){
    $('#gehistoryrate').click(function(){
		var date=$('#datepicker').val();
		 
		 $.ajax({
		    url: "http://apilayer.net/api/historical?access_key=ebdcd7fc0c0bfafbad3f02c84bfb687b&date="+date+"&format=1",
			 type:"GET",
			 dataType:"jsonp",
			 success:function(data){
			   var widget=show(data);
				$('#show').html(widget);
				 var  datas=data.quotes;
				 console.log(data);
				
			 }
		  });
		 
		
		
		});
		});
		
		 function show(data){
			 
			 var records = '';
var p = data.quotes;
for ( var key in p ) {
if ( p.hasOwnProperty( key ) ) {
records += "<tr><td>" + key + ": "+ p[ key ] +" </td></tr>";
}
}
return records;
			 
			 
			 
		 }
