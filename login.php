<!DOCTYPE html>
<html> 
<head> 
<title> JOVELYN LOG IN FORM</title> 
<link rel="stylesheet" type="text/css" href="style.css"> 
<script src="java.js"></script> 
<style> 
   body{ 
    background-image: url(phone.png);
    background-size: cover;
   color:#2F4F4F; 
   font-family: san-serif; 
    
    
   } 
   button {    
       background-color:black;    
       color: red; 
	   width: 10%;  
       left:10px; 	   		 
        padding: 5px;    
        margin: 3px;     
        cursor: pointer; 
		font-size:10px; 
		 
         }    
   .form{ 
   text-align: center; 
   width: 320px; 
   height: 300px; 
   background-color: #2F4F4F; 
   color: color; 
   top: 50%; 
   left: 50%; 
   transform: translate(-50%,-50%); 
   position: absolute; 
   padding: 20px; 
   border-radius: 20px; 
   } 
h1{ 
   color:#fff; 
   margin: 0; 
   padding: 10px; 
   } 
   .form input[type="text"], input[type="password"] 
   { 
    margin: 10px; 
	padding: 10px; 
	background: transparent; 
	width: 75%; 
	height: 20px; 
	border: none; 
	border-bottom: 1px solid #fff; 
	border-radius: 5px; 
	color: #fff; 
	} 
	.form input[type="submit"] 
	{ 
	background-color:blue; 
	color:white; 
	} 
	p{ 
	color:blue; 
	} 
.form input[type="button"]{ 
    font-family: Garamond;
    margin: 10px; 
	width: 80%; 
	height: 30px; 
	background: #808000; 
	border-radius: 10px; 
	font-size: 1rem; 
	font-weight: 600; 
	} 
form input[type="button"]:hover { 
    background: #990066;
	color: #fff; 
	} 
   </style> 
</head> 
 
<body> 
     
	

	<div class="form">	  
	<form action="/home.php" method="POST">	
     
     <h1>Login Here</h1> 
      
	 
     
    <input type="text" placeholder="Username" id="username"><br> 
    <input type="password" placeholder="Password" id="password"><br> 
	<input type="button" onclick="validate()" value="Login"><br> 
     
     
    </form> 
	</div> 
   </body> 
  </html>











</html>