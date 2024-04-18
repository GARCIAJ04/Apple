function validate() {
	var uname=document.getElementById("username").value; 
	var upass=document.getElementById("password").value; 
	  
	 if (uname=="kyutko" && upass=="garcia"){ 
		 var result = confirm("Successfully Login"); 
		 if (result == true) { 
		 window.location.href="home.php"; 
	 } 
   } 
	 if (uname!="kyutko" && upass=="garcia"){ 
		 alert("Wrong Email"); 
		  
	 } 
	 if (uname=="kyutko" && upass!="garcia"){ 
		 alert("Wrong Password"); 
		  
	 } 
	   
}   
function back() {
    window.location.href="about.php";
}

  
 
	function logout() { 
		var result = confirm("Do you want to continue?"); 
		if(result == false) { 
			 event.preventDefault(); 
			 
		} 
		
		else{ 
			 window.location.href="facebook.php.php"; 
		} 
		 
	}
