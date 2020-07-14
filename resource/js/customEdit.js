  $(document).ready(function(){		
		var set = 0;
		 $("#logTable").hide();
		 $("#create_shipping").click(function() {
		   var expID = $('#expID').val();
		   var impID = $('#impID').val();
		   var state = $('#shipping_state').val();
		   if($('#shipping_state').val() == "")
		   {	
		    alert("Select a state");   
		   }		  
		 });	
		 $("#Loginbtn").click(function(){		
		 	if(set == 0){	
				set = 1; 
			 $("#logTable").slideDown('slow').css({'position':'absolute','z-index':'5'});			 
			}		
			else{
				set = 0;
				$("#logTable").slideUp('2000').css({'position':'absolute','z-index':'5'});
			}
		 });	 
 });