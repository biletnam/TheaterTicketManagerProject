<html>
    
    <head>
 

    
    </head>
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
     width:40%;
    
      }
.button1 {
     margin-left:10%;
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
    border: 2px solid #008CBA;
}
.button2:hover {
    background-color: #008CBA;
    color: white;
}
.button3 {
    margin-left:10%;
    background-color: white;
    color: black;
    border: 2px solid yellow;
}
.button3:hover {
    background-color: yellow;
    color: black;
}
.button4 {
    background-color: white;
    color: black;
    border: 2px solid orange;
    margin-left:30%;
}
.button4:hover {
    background-color:orange;
}
.button5 {
    margin-left:30%;
    background-color: white;
    color: black;
    border: 2px solid orange;
}
.button5:hover {
    background-color: orange;
    color: white;
}              
 .button6 {
     margin-left:30%;
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button6:hover {
    background-color: red;
    color: white;
}                    
                                   
                    
                </style>   
                
    <body>
             <ul class ="nav">
               <div class="logo">
                    <a href ="HomePage.php">Civic Center Entertainment</a>
                   
                   
                   
               </div>
        
                   
                   
             
                <li><a href ="Aboutus.php">About US</a></li>
              <li><a href ="Contact.php">Contact</a></li>
               <li><a href ="helppage.php">Help<a/></li>
               <li><a href ="Employeelogin.php">Login</a></li>
               
           </ul>
          <div class ="Banner">
              <img class ="Banner-img" src="hunstville banner.jpg">
              
          </div>
        <div class =" mainwindow">
            
            
            <h1>Season Ticket Manager</h1>
          <button class="button button1" id ="exportbtn"value="Import File" onclick="location='import.php'">Import Season Ticket list</button>

<button class="button button2" id ="importbtn" value="Export File" onclick="location='export.php'">Export Season Ticket List</button>  
  <button class="button button2" id ="importbtn" value="Seasonticket" onclick="location='CreateSeasonTicket.php'">Create Season Ticket</button>            
            
            
        </div>
        
        
        
       </body>
</html>