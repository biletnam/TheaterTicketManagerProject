<?php
 session_start();
$var_show = $_SESSION['showname'];


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Theatre Manager Ticket Selecter</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="jquery.seat-charts.css">
<style>
body {
	font-family: 'Roboto', sans-serif;
  background-color:#fafafa;
}
a {
	color: #b71a4c;
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
     
.stage-indicator {
	width: 640px;
	margin: 5px 32px 15px 32px;
	background-color: #f6f6f6;	
	color: #adadad;
	text-align: center;
	padding: 3px;
	border-radius: 20px;
	margin-left: 188px;
}
/*.wrapper {
	width: 100%;
	text-align: center;
  margin-top:150px;
}*/
.container {
	width: 1300px;
	text-align: left;
}
.booking-details {
	float: left;
	text-align: left;
	margin-left: 10px;
	font-size: 12px;
	position: relative; 
	height: 460px;
}
.booking-details h2 {
	margin: 25px 0 20px 0;
	font-size: 17px;
}
.booking-details h3 {
	margin: 5px 5px 0 0;
	font-size: 14px;
}
div.seatCharts-cell {
	color: #182C4E;
	height: 25px;
	width: 25px;
	line-height: 25px;
	
}
div.seatCharts-seat {
	color: #FFFFFF;
	cursor: pointer;	
}
div.seatCharts-row {
	height: 35px;
}
div.seatCharts-seat.available {
	background-color: #B9DEA0;
}
div.seatCharts-seat.available.premium-orchestra {
	background-color: #3a78c3;
}
div.seatCharts-seat.available.balcony {
	background-color: #993ac3;
}
div.seatCharts-seat.focused {
	background-color: #76B474;
}
div.seatCharts-seat.selected {
	background-color: #ffc53f;
}
div.seatCharts-seat.unavailable {
	background-color: #472B34;
}
div.seatCharts-container {
	border-right: 1px dotted #adadad;
	width: 1000px;
	padding: 20px;
	float: left;
}
div.seatCharts-legend {
	padding-left: 0px;
	position: relative; 
	top: 1px;
	bottom: 16px;
}
ul.seatCharts-legendList {
	padding-left: 0px;
}
span.seatCharts-legendDescription {
	margin-left: 5px;
	line-height: 30px;
}
.checkout-button {
	display: block;
	margin: 10px 0;
	font-size: 14px;
}
#selected-seats {
	max-height: 120px;
	overflow-y: scroll;
	overflow-x: none;
	width: 170px;
}
</style>
</head>

<body>
         
           <ul class ="nav">
               <div class="logo">
                    <a href ="HomePage.php">Civic Center Entertainment</a>
                   
                   
                   
               </div>
        
                   
                   
             
                <li><a href ="Aboutus.php">About US</a></li>
              <li><a href ="Contact.php">Contact</a></li>
               <li><a href ="helppage.php">Help</a></li>
               <li><a href ="Employeelogin.php">Login</a></li>
               
           </ul>
         

<!--
<div id="jquery-script-menu">
<div class="jquery-script-center">
-->
<!--<ul>
</ul> -->
<div class="jquery-script-clear"></div>
</div>
</div>
<div class="wrapper">
  <div class="container">
  <!--<h2>Theater Manager Ticket Selecter</h2> -->
    <div id="seat-map">
      <div class="stage-indicator">Stage</div>
    </div>
	
	

	<div class="booking-details"> 
	
	
      <h2>Booking Details</h2>
      <h3> Selected Seats (<span id="counter">0</span>):</h3>
      <ul id="selected-seats">
      </ul>
      Total: <b>$<span id="total">0</span></b>
      <button class="checkout-button">Checkout &raquo;</button>
      <div id="legend"></div>
	  </div>

  </div>
</div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="jquery.seat-charts.js"></script> 
<script>
			var firstSeatLabel = 1;
		
			$(document).ready(function() {
				var $cart = $('#selected-seats'),
					$counter = $('#counter'),
					$total = $('#total'),
					sc = $('#seat-map').seatCharts({
					map: [
						'_____ff_fffffffffffffff_ff_____',
						'___ffff_fffffffffffffff_ffff___',
						'___ffff_fffffffffffffff_ffff___',
						'__fffff_fffffffffffffff_fffff__',
						'_ffffff_fffffffffffffff_ffffff_',
						'_ffffff_fffffffffffffff_ffffff_',
						'fffffff_fffffffffffffff_fffffff',
						'eeeeeee_eeeeeeeeeeeeeee_eeeeeee',
						'eeeeeee_eeeeeeeeeeeeeee_eeeeeee',
						'eeeeeee_eeeeeeeeeeeeeee_eeeeeee',
						'_eeeeee_eeeeeeeeeeeeeee_eeeeee_',
						'_eeeeee_eeeeeeeeeeeeeee_eeeeee_',
						'',
						'_bbbbbb_bbbbbbbbbbbbbbb_bbbbbb_',
						'_bbbbbb_bbbbbbbbbbbbbbb_bbbbbb_',
						'_bbbbbb_bbbbbbbbbbbbbbb_bbbbbb_',
						'_bbbbbb_bbbbbbbbbbbbbbb_bbbbbb_',
						
					],
					seats: {
						f: {
							price   : 70,
							classes : 'premium-orchestra', //your custom CSS class
							category: 'Premium Orchestra'
						},
						e: {
							price   : 55,
							classes : 'orchestra', //your custom CSS class
							category: 'Orchestra'
						},	
						b:  {
							price	: 35,
							classes	: 'balcony',
							category: 'Balcony'
						}
					
					},
					naming : {
						top : false,
						getLabel : function (character, row, column) {
							return firstSeatLabel++;
						},
					},
					legend : {
						node : $('#legend'),
					    items : [
							[ 'f', 'available',   'Premium Orchestra' ],
							[ 'e', 'available',   'Orchestra'],
							[ 'b', 'available',   'Balcony'],
							[ 'f', 'unavailable', 'Already Booked']
					    ]					
					},
					click: function () {
						if (this.status() == 'available') {
							//let's create a new <li> which we'll add to the cart items
							$('<li>'+this.data().category+' Seat # '+this.settings.label+': <b>$'+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
								.attr('id', 'cart-item-'+this.settings.id)
								.data('seatId', this.settings.id)
								.appendTo($cart);
							
							/*
							 * Lets update the counter and total
							 *
							 * .find function will not find the current seat, because it will change its stauts only after return
							 * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
							 */
							$counter.text(sc.find('selected').length+1);
							$total.text(recalculateTotal(sc)+this.data().price);
							
							return 'selected';
						} else if (this.status() == 'selected') {
							//update the counter
							$counter.text(sc.find('selected').length-1);
							//and total
							$total.text(recalculateTotal(sc)-this.data().price);
						
							//remove the item from our cart
							$('#cart-item-'+this.settings.id).remove();
						
							//seat has been vacated
							return 'available';
						} else if (this.status() == 'unavailable') {
							//seat has been already booked
							return 'unavailable';
						} else {
							return this.style();
						}
					}
				});
				//this will handle "[cancel]" link clicks
				$('#selected-seats').on('click', '.cancel-cart-item', function () {
					//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
					sc.get($(this).parents('li:first').data('seatId')).click();
				});
				//let's pretend some seats have already been booked
				sc.get(['1_2','1_3','1_12','1_13','2_15','2_16','2_17','2_18','3_14','4_1', '7_1', '7_2']).status('unavailable');
		
		});
		function recalculateTotal(sc) {
			var total = 0;
		
			//basically find every selected seat and sum its price
			sc.find('selected').each(function () {
				total += this.data().price;
			});
			
			return total;
		}
		
		</script><script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


</body>
</html>

