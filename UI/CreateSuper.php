<?php
          
          $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "testdatabase";
$link =  mysqli_connect($servername, $username, $password, $dbname);
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
$query = "SELECT * FROM worker";
$result1 = mysqli_query($link, $query);
?>






<!DOCTYPE.html>
<html>
	<head>
            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
            <title>Create Group SuperVisor</title>
		
                

                <style>
                   body{
    background-color:black;
    margin:0;
    padding:0;
    font-family:'Arial',serif;
    
    
    
    
    
}
.nav {
	width:100%;
    background-color:white;
    text-align:center;
        list-style:none;
        padding:20px 0px 0px 0px;
	color:#ffffff;
	
}
.nav > li{
    display:inline-block;
    padding:0px 50px 10px 15px;
   font-size: 25px;
    
    
}
.nav > li>a:hover{
    
    
    color:#0066ff;
    
}
.nav > li > a{
    text-decoration:none;
    color:black;
    
}  
.Banner{
        
      width:100%;
     
      display:block;
        
        
    }       
    .Banner > .Banner-img{
        
        
         width:100%;
      display:block;
        height:20%
        
        
    }   
    .logo{
        color:black;
        float:left;
        padding-left: 25px;
        font-size:20px;
        font-weight:bold;
        
        
        
    }   
    .logo >a{
        
        
        text-decoration:none;
        color:black;
    }   
     
    h1{
        width:100%;
      
    
    background:white;
    
    border-radius: 5px;
    text-align: center;
    font-size:40px;
    color:Black;
     font-family:'Arial',serif;   
        
        
        
    }
input[type=text], select {
    width: 70%;
    margin-left:25%;
    margin-right:25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 70%;
    margin-left:25%;
    margin-right:25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
.Login {
    
    width:50%;
    height:50%;
    margin-right:25%;
    margin-left:25%;
    border-radius: 5px;
    background-color:white;
    padding: 10px;
}
  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    width:20%;

      }
.button1 {
    margin-left:25%;
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
}
.button1:hover {
    background-color: #4CAF50;
    color: white;
}                  
     
.button2 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}
.button2:hover {
    background-color: #f44336;
    color: white; 
}

.label{
 
 margin-left:auto;
 
 
 }
                  
                </style>   
                
              
                
                
	</head>
	<body>
                     <script>
	$(document).ready(function() {
			//Adds an event listener to the Ticket Submit button that waits until it's clicked
		
	     $("#btnCreateSuperVisor").click(function() {
           $("#CreateSuperVisor").submit();
       });
    });
		</script>
           <ul class ="nav">
               <div class="logo">
                    <a href ="HomePage.php">Civic Center Entertainment</a>
                   
                   
                   
               </div>
        
                   
                   
             
                <li><a href ="Aboutus.php">About US</a></li>
              <li><a href ="Contact.php">Contact</a></li>
               <li><a href ="helppage.php">Help</a></li>
               <li><a href ="Employeelogin.php">Login</a></li>
               
           </ul>
          <div class ="Banner">
              <img class ="Banner-img" src="hunstville banner.jpg">
              
          </div>
                
                <h1>Create Super Visor</h1>  
                 
                
                <div class ="Login">
                    <form action="AccountInsert.php" method="post" id="CreateSuperVisor">
			<label class ="label">First Name:</label><input type="text" name="firstname"><br>
			<label class ="label">Last Name:</label><input type="text" name="lastname"><br>
                        <label class ="label">Email:</label><input type="text" name="pass"><br>
                        <label class ="label">Login Name:</label><input type="text" name="login"><br>
                         <label class ="label">Company Name:</label><input type="text" name="companyName"><br>
			
                        
                    
                    </form>
                   
                        <button  class = "button button1" type="submit" id="btnCreateSuperVisor">Create</button>
                        <button  class = "button button2" type="button" onclick="location='Employeelogin'">Cancel</button>
        </div>
	</body>
</html>

