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
	 		getdata(); 
	 	},
	 	error: function(){
	 		alert("404");
	 	}
	 });

	 //get data
	 function getdata() {
		 $.ajax({
			url: 'getdata.php',
			success: function(response){
				$('#getdata').html(response);
			},
			error: function(){
				alert('error to getdata');
			}	
		 });
	 }
	 
	 return false;

	});
});