<DOCTYPE html>
<html>
	<head>
		       <meta charset="utf-8">
		
                <title> Huntsville Civic Center</title>
              <?php
          
          $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "testdatabase";
            
$link =  mysqli_connect($servername, $username, $password, $dbname);



if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 

//$query = "SELECT  Poster From showname";
$query = "SELECT  Company FROM showname";
$result1 = mysqli_query($link, $query);
?>
    <?php            
      $companyarray = array();        
      
     $index =0;  
      
 while($row = $result1->fetch_assoc())    
 {
 
$companyarray[$index]=$row;

$index++;
  
   //echo "id: " . $row["showname"]. " - Name: " . $row["startdate"]. " " . $row["enddate"]. "<br>";

   
    
    
    
 }
 
 //echo implode("",$companyarray[0]);
 //$companya =  $companyarray[0];
   // $companyname = $companyarray[1];
 session_start();
                               
 if($companyarray[0]==null)
 {
     $companya = "NO SHOW";
 }
     else 
     {
      $companya=  implode(" ",$companyarray[0]);
      
     }
 if($companyarray[1]==null)
 {
     $companyb = "NO SHOW";
 }
     else 
     {
      $companyb=  implode(" ",$companyarray[1]);
     }
 
     if($companyarray[2]==null)
 {
     $companyc = "NO SHOW";
 }
     else 
     {
      $companyc=  implode(" ",$companyarray[2]);
     }
      
     if($companyarray[3]==null)
 {
     $companyd = "";
 }
     else 
     {
      $companyd=  implode(" ",$companyarray[3]);
     }
      
     if(array_key_exists(4, $companyarray))
 {
     $companye=  implode(" ",$companyarray[4]);
 }
     else 
     {
      $companye = " NO SHOW  ";
     }
     
      if(array_key_exists(5, $companyarray))
    {  
     $companyf=  implode(" ",$companyarray[5]);
    }
     else 
     {
    $companyf = "NO SHOW";
     }
   //$companyb=  implode(" ",$companyarray[1]);
   //$companyc=  implode(" ",$companyarray[2]);
   //$companyd=   implode(" ",$companyarray[3]);
   //$companye=   implode(" ",$companyarray[4]);g
  //$companyf=   implode(" ",$companyarray[5]);
 
   
     $_SESSION['varname'] = $companya;
     
     ?>          
              
  



        <STYLE>
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
    h1.one{
        
             width:80%;
      
    margin-left:10%;
    background:white;
    
    border-radius: 5px;
    text-align: center;
    font-size:20px;
    color:Black;
     font-family:'Arial',serif;   
        
        
        
        
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
     width:10%;
   
      }
.button1 {
     margin-left:20%;
  background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button1:hover {
    background-color: #555555;
    color: white;
}
.button2 {
   background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button2:hover {
  background-color: #555555;
    color: white;
    }
.button3 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button3:hover {
  background-color: #555555;
    color: white;
}
.button4 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button4:hover {
   background-color: #555555;
    color: white;
}
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button5:hover {
    background-color: #555555;
    color: white;
}              
 .button6 {
   background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button6:hover {
   background-color: #555555;
    color: white;
}                    
.TicketButton1{
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    
    width:100%;
    /*margin-left:25%;
    margin-right:25%;
    */
     background-color:white;
     border: 2px solid #555555;
      color: black;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
     font-family:'Arial',serif;   
      font-size: 16px;
    
      cursor: pointer;
}
.TicketButton1:hover {
      background-color: #555555;
    color: white;
}
.Shows{
   width:40%;
   background-color:#cccccc;
    height:80%;
    display:inline-block;
     margin-left:5%; 
    opacity:0.2%;
    
    
} 
.Shows1{
    float:right;
    margin-right:5%;
    width:40%;
    background-color:#cccccc;
    height:80%;
    opacity: 0.2%;
    
    
}

.Footer{
  height:10%;
  width:100%;
  background-color:white;
    
    
    
    
    
}
        </style>
           </head> 
        <body>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </script>

           <ul class ="nav">
               <div class="logo">
                    <a href ="HomePage.php">Civic Center Entertainment</a>
                 </div>  
                  <li><a href ="Aboutus.php">About US</a></li>
                  <li><a href ="Contact.php">Contact</a></li>
                  <li><a href ="Help_Home.html">Help<a/></li>
                  <li><a href ="Employeelogin.php">Login</a></li> 
                 </ul>  
               
        
              <div class ="Banner">
              <img class ="Banner-img" src="hunstville banner.jpg">
              
               </div>     
                   
             
                
               
           
            
            <h1>Showing this week</h1>   
          
            
            <div class ="Shows">
                  <h1>CompanyA</h1>
                <h1 class="one">Civic Playhouse</h1> 
              
            <img src ="Hamlet (Small).jpg" style ="float:left; width:60%; height:80%;margin-right:2%;margin-left:20%;border:3px solid black;">
             
            </div>
            <div class ="Shows1">
                <h1>CompanyB</H1>
                <h1 class ="one">Civic Concert Hall</h1>
                
                <img src ="macbeth.jpg" style ="float:left; width:60%; height:80%;margin-right:2%;margin-left:20%;border:3px solid black;">
         
            </div>
            
            
          
             
   
                  <p style="clear: both;">
                     
       
         
            
            <br> 
                  <h1>Current Companys In Production</h1>
                  <div class =" footer">
<button class="button button1"onclick ="location='CompanyA.php'" id="companya"><?php echo $companya ?></button>
<button class="button button2"onclick ="location='CompanyB.php'"  id="companyb"><?php echo $companyb ?></button>
<button class="button button3" onclick="location='CompanyC.php'"id="companyc"><?php echo $companyc ?></button>
<button class="button button4" onclick="location='CompanyD.php'"id="companyd"> <?php echo $companyd ?></button>  
 <button class="button button5" onclick="location='CompanyE.html'"id="companye"><?php echo $companye ?></button>


               
                  </div>
                 
        
            </body>
       
            
            
            
            
        
        

            
         
                     
              
              
                


</html>