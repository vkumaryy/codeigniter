function contactvalidation()
{
	
	var name=$("#fname").val();
	var email=$("#email").val();
	var mobile=$("#mobile").val();
	var message=$("#msg").val();
	var status=true;
	if(name=="")
	{
		status=false;
		$("#fname").css("borderColor","red");
		
	}
	else{
		$("#fname").css("borderColor","green");
	}
	//=============================================//
	if(email=="")
	{
		status=false;
		$("#email").css("borderColor","red");	
	}
	else{
		$("#email").css("borderColor","green");	
	}
	//==============================================//
	if(mobile=="")
	{
		status=false;
		$("#mobile").css("borderColor","red");	
	}
	else{
		$("#mobile").css("borderColor","green");	
	}
	//===============================================//
	if(message=="")
	{
		status=false;
		$("#msg").css("borderColor","red");	
	}
	else{
		$("#msg").css("borderColor","green");	
	}
	return status;
	
	
	
}