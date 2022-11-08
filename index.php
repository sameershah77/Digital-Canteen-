<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = "id19742941_arshaikh_09";
$password = "+P&<i2<>I/PDdv[}";

// Database name is geeksforgeeks
$database = 'id19742941_arshaikh';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM order2 ";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en"><head>
<script>
  function chckcolor(result)
  {
  if(result.checked)
  {
  result.parentNode.parentNode.style.backgroundColor="blue";	
  result.parentNode.parentNode.style.color="white";
  }
  else
  {
  result.parentNode.parentNode.style.backgroundColor="";	
  result.parentNode.parentNode.style.color="";
  
  }
  
  }
  
  </script>
  
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Digital Canteen</title>
    <style>

      * {
        padding: 0px;
        margin: 0px;
      }
      body {
        height: 200vh;
        width: auto;
        background-color: rgb(43, 42, 51);
      }
      header{
        height: 15vh;
      }
      nav {
        display: grid;
        width: auto;
        height: 18vh;
        background-color: black;
        display: flex;
       justify-content: space-between;

      }
      main {
        height: 420vh;
        display: flex;
        border-color: azure;

      }
      .down {
        display: flex;
       align-items: center;
       justify-content: center;

        background-color: black;
        height: 10vh;
        width: auto;
        color: aliceblue;

      }
      .logo {


        height: 16vh;
        cursor: pointer;
        padding: 2px 10px;
      }
      .aiktc {

        height: 15vh;
        padding: 2px 16px;
        cursor: pointer;

      }
      .center{
        justify-items: center;
       
        text-align: center;
        height: 20vh;
        display: grid;
        width: 40%;
        
      }
      h1{
        font-size: 10vh;
        color: rgb(255, 255, 47);
        align-self: center;
        
        font-weight: bold;
        font-family:' 'Lucida Sans', Arial, sans-serif;
      }
      .items{
        height: 7vh;
        width: 75px;
        padding: 0px 7px;
        color: aliceblue;

        border-radius: 10px;
        border-bottom-left-radius: 0%;
        border-bottom-right-radius: 0%;
        background-color: rgb(0,0, 0);
        border: 1px rgb(255, 255, 255) solid;
        
        cursor: pointer;
      }
      .info{
        padding-top: 1vh;
        position: relative;
        height: fit-content;
        display: flex;
        justify-content :space-between ;


        top: 16px;
      }
      .line{
        height: 2px;
        width: auto;
        background-color: antiquewhite;
      }
      .box1{
        text-align: center;

        padding-left: 2vh;
        padding-top: 2vh;
        padding-bottom:2vh;

        background-color: rgb(43, 42, 51);
        width: 100%;
      }
    
      .box11{
        border: 2px white solid;
        border-radius: 30px;
       
        width:auto;
        height: 400vh;
        background-color:rgb(43, 42, 51);
        padding: 45px;
      }
      .box22{
        border: 2px white solid;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        width: auto;
        height:155vh;
        padding: 45px;
        background-color: rgb(43, 42, 51);

      }
      .axis{
       width: 1vh;
      }
      h3{
        padding: 25px;
        color: beige;
        animation: ani 1s ease-in-out 0.1s infinite alternate;
        text-transform: uppercase;
        text-decoration: underline;
        text-align-last: center;
        text-shadow: black;
        text-rendering: optimizeLegibility;
      }

table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid white;
		}

h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

td {

			border: 1px solid black;
		}

th,
		td {
					background-color: #E4F5D4;
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}


      .order{
        display: grid;
       
        grid-template-rows: 3000%;
        grid-area:auto;
        grid-gap: 30px;

      }
      .dabba{
        padding-top: 30px;
        border-radius: 10px;
        height: 100px;
        background-color: azure;
        border: 3px rgb(29, 39, 29) solid;
       

      }
      @keyframes ani{
        form{
            color: rgb(255, 145, 0);
        }
        to{
            color: rgb(4, 255, 0);
        }
        
      }
      .block {

  display: block;
  border-top-left-radius:  5px;
  border-top-right-radius: 5px;
  width: 20v;
  border: 2px solid white;
  background-color: #04AA6D;
  padding: 4px 4px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
.block:hover{
  border: 2px solid #04AA6D;
  background-color: white;

}

    </style>
   
  </head>
  <body>
    <header>
      
        
         

        <h1>DIGITAL CANTEEN</h1>

        
     
      <div class="line"></div>
    </header>
    <main>
      <div class="box1">
        <div class="box11">
          <h3>Order Received</h3>
            <div class="order">
           
                <div>
                <table>
			<tr>
				<th>Order id</th>
				<th>Ordered Products</th>
				<th>Total</th>

			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td id="er"><input type="checkbox" onclick="chckcolor(this)" name="notification_sent[]"/><?php echo $rows['id'];?></td>
				<td><?php echo $rows['ordered_products'];?></td>
				<td><?php echo $rows['total'];?></td>

			</tr>
			<?php
				}
			?>
		</table>
                
                
                
                </div>
             
            </div>
        </div>
      </div>
      <div class="axis"></div>
      </main>
    <div class="line"></div>

    <footer>
      <div class="down">
        <p class="copy">Copyright ©All Reserved</p>
      </div>
    </footer>
  <!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>


</body></html>
