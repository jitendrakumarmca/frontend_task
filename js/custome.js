$(document).ready(function(){
	$("#refume_frm").on('submit',function(e){
		
	if(!$('#mobileno').val().match('[0-9]{10}'))  {
                alert("Please put 10 digit mobile number");
                return;
            } 

	 $.ajax({
	 	type: "POST",
	 	url: "formdata.php",
	 	data:$(this).serialize(),

	 	success: function(data){
	 		alert("successfully submited.")
	 		$('#refume_frm').trigger('reset');
	 		
	 	},
	 	error: function(){
	 		alert("404");
	 	}
	 });
	 
	 return false;

	});
});