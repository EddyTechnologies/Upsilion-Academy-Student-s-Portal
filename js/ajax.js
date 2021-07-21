$(document).ready(function () {
	$(document).on('submit', '#dozie', function (e) {
		e.preventDefault();
		aj("dozie")
	});
	$(document).on('submit', '#dozie1', function (e) {
		e.preventDefault();
		aj("dozie1")
	});
	$(document).on('submit', '#dozie2', function (e) {
		e.preventDefault();
		aj("dozie2")
	});
    $(document).on('submit', '#dozie3', function (e) {
        e.preventDefault();
        aj("dozie3")
    });
}); 

    	function aj(id) {
    		var formdata = new FormData(document.getElementById(id));
    			$("#somebtn").html('<div class="spinner-border text-light" role="status"><span class="sr-only">Loading...</span></div>');
    			document.getElementById("somebtn").disabled = true;
                // console.log(formdata);   
    			$.ajax({
    				url:"d.php",
    				method:"post",
    				dataType:"text",
    				data:formdata,
    				processData:false,
    				contentType:false,
    				success:function (res) {
                        console.log(res);       
    					$("#somebtn").html('submit');
    					document.getElementById("somebtn").disabled = false;
    					if($.trim(res) == "ok"){
    						swal("Alright!!!","upload complete", "success");
                            setTimeout(function () {
                                window.location.href = "congrats.php";
                            }, 2000);
    					}else if($.trim(res) == "fine"){
    						swal("Authenticating...Pls wait","Login successful", "success");
                            setTimeout(function () {
                                window.location.href = "staff/view.php";
                            }, 2000);
    					}else{
                            swal("sorry", res, "error");
                        }
    				}
    			});
    	}