<!DOCTYPE html>
<html lang = "en">
	<head>
        <!-- main color #040505
        second main #1a1b1a
        third main #3e3f3e
        fourth main #a4a5a4
        fifth main #d7d7d6  --> 
		<meta charset = "UTF-8">
    <!-- changes -->
		<title> trinetra main page </title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
              }
              body{
                color: white;
              }
              .background{
                width: 100%;
                height: 100vh;
                color: aliceblue;
                background-color: #040505;
                background-image: url("../assets/nepalb40.jpeg");
                background-size: cover;
              }
              nav{
                background-color: #040505;
                opacity: 0.6;
                width: 100%;
                height: 10%;
                position: absolute;
                top: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: space-between;
              }
              nav .logo{
                width: 100px;
              }
              nav ul li{
                list-style: none;
                display: inline-block;
              }
              nav ul li a{
                float: right;
                margin: 27px 50px;
                text-decoration: none;
                color: white;
                text-align: center;
                font-size: 20px;
                padding: 2%;
              }
              nav ul li:hover{
                background-color: rgb(85, 84, 84);
              }
              .locations{
                position: absolute;
                background-color: white;
                border-radius: 13px; 
                width: 30%;
                height: 40%;
                color: #040505;
                top: 30%;
                margin-left: 1%;
                left: 10px;
                text-align: center;
                padding: 1%;
                padding-bottom: 1%;
                opacity: 0.7;
                box-shadow: 15px 8px 15px 8px #040505;
              }
              .section {
                margin-top: 2%;
                height: 90%;
                text-align: center;
                overflow: auto;
                color: white;
                border-radius: 13px;
              }
              .section tr{
                position: relative;
                text-align: center;
                background-color: #040505;
              }
              td{
                padding: 3%;
              }
              tr:hover {
                background-color: #3a3b3a;
                transition: 0.5s;
              }
              .park{
                width: 40%;
                height: 60%;
                top: 22%;
                left: 55%;
                position: absolute;
                text-align: center;
                border: 2px solid white;
                background-color: rgb(29, 29, 29);
                opacity: 0.8;
                border-radius: 20px;
              }
              .park h3{
                margin: 1%;
              }
              .selection{
                background-color: #a1a3a3;
                border-radius: 30px;
                height: 85%;
                top: 13%;
                margin: 0 2%;
                overflow: hidden;
                width: 96%;
                position: absolute;
              }
              .line1{
                border-left: 3px dashed black;
                height: 85%;
                position: absolute;
                top: 10%;
                left: 60%;
              }
              .line2{
                border-left: 3px dashed black;
                position: absolute;
                top: 10%;
                height: 85%;
                left: 40%;
              }
              .line3{
                position: absolute;
                top: 10%;
                left: 50%;
                height: 90%;
                padding: 0 5%;
                background-image: linear-gradient(to bottom, #a1a3a3 50%, black 1%);
                background-position: left;
                background-size: 6% 10%;
                background-repeat: repeat-y;
              }
              .selection input[type="button"]{
                margin: 4% 3%;
                width: 30%;
                height: 20%;
                border-radius: 18px;
                padding: 4%;
                border-top: 3px dashed black;
                border-bottom: 3px dashed black;
                border-left: 0;
                opacity: 0.7;
                border-right: 0;
              }
              .selection input[type="button"]:hover{
                background-color: rgb(98, 97, 97);
                transition: 0.5s;
              }
              .selection input[type="button"]:nth-child(odd){
                float: right;
                rotate: 160deg;
                transform: rotate(180deg);
              }
              .selection input[type="button"]:nth-child(even){
                float: left;
                rotate: 20deg;
              }
              .footer{
                background-color: #040505;
                text-align: center;
                height: 5%;
                width: 100%;
                top: 95%;
                left: 0;
                color: white;
                position: absolute;
              }
              .footer p{
                padding-top: 10px;
              }
        </style>
	</head>
	<body>







 














		<div class="background">

            <nav>
                <img src="../assets/TrinetraLogo.png" class="logo" alt="failed to load logo">
                <ul>
                    <li><a href="/darkmpage.html">Home</a></li>
                    <li><a href="/dservices.html">Services</a></li>
                    <li><a href="/dsupport.html">Support</a></li>
                    <li><a href="/darklogin.html">Login</a></li>
                    <li><a href="/darksignup.html">Signup</a></li>
                </ul>
             </nav>

            <div class="locations">
                <form action="backend.php">
                    Location: <input type="text" name="cities">
                    <input type="submit" value="search">
                </form>
                <hr style="margin-top: 1%;">
                <div class="section">
                    <table style="width: 100%;">
                        <tbody style="height: 200vh;">
                            <tr><td>New Road</td></tr>
                            <tr><td>Baneshwor</td></tr>
                            <tr><td>Budanilkankha</td></tr>
                            <tr><td>Swayambhu</td></tr>
                            <tr><td>Sanepa</td></tr>
                            <tr><td>Putalisadak</td></tr>
                            <tr><td>Koteshwor</td></tr>
                            <tr><td>Durbar Marg</td></tr>
                            <tr><td>Tirpureshwor</td></tr>
                            <tr><td>Chakrapath</td></tr>
                            <tr><td>Teku</td></tr>
                            <tr><td>Swayambhu</td></tr>
                            <tr><td>Sanepa</td></tr>
                            <tr><td>Putalisadak</td></tr>
                            <tr><td>Koteshwor</td></tr>
                            <tr><td>Durbar Marg</td></tr>
                            <tr><td>Tirpureshwor</td></tr>
                            <tr><td>Chakrapath</td></tr>
                            <tr><td>Teku</td></tr>
                            <tr><td>New Road</td></tr>
                            <tr><td>Baneshwor</td></tr>
                            <tr><td>Budanilkankha</td></tr>
                            <tr><td>Swayambhu</td></tr>
                            <tr><td>Sanepa</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="park">
              <h3>Number of parking spot: </h3>
              <h3>Available spot: </h3>








              <?php



//server ra database connect garna vaiables ma rakheko
$servername = "localhost";
$username = "root";
$password = "";
$db = "parking booking data";  //database name
$spot = -1;



if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
  $spot = test_input($_GET["spot"]);
  $data=test_input($_GET["data"]);
  
}
else 
{

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}




// Connect to the MySQL database
$conn = new mysqli($servername, $username, $password,$db);

// Handle form submission

 // Get the requested spot location and check availability

 $sql = "SELECT  availability FROM parking_spots WHERE spot_id = '$spot'  LIMIT 1";
 $result = $conn->query($sql);
  $row = $result->fetch_assoc();

//  If a spot is available, make a reservation

 if ($row["availability"]== "available") {
   $nsql = "UPDATE parking_spots
            SET availability = 'reserved' 
            WHERE spot_id = '$spot' LIMIT 1";

   $nresult=$conn->query($nsql);
  // mysqli_query($conn, "INSERT INTO parking_spots (location, availability, reservation_details) VALUES ('$location', 'reserved', '$reservation_details')");
   echo 'Parking spot reserved successfully!';
 } else {
   echo 'Sorry, that parking spot is not available.';
 }




//echo "<var>spoth=$spot</var>";
?>















              <div class="selection">
      
                   <form method="post" action="#" >

                        <input type="button"  id="button1"
                        class="button" value="asdfasdf" />
                    
                        <input type="button"  id = "button2"
                        class="button" value="Button2" />
                        
                        <input type="button" id = "button3"
                        class="button" value="Button3" />
                    
                        <input type="button" id = "button4"
                        class="button" value="Button4" />

                  </form>



                  <form method="post" action="#" >

                        <input type="button"  id="confirmReservation"
                        class="button" value="confirm" />
                        
                  </form>
                  <div class="line1"></div>
                  <div class="line2"></div>
                  <div class="line3"></div>
                  
              </div>
          </div>

          <div class="footer">
              <p> &copy; 2023 Trinetra Inc.&#8482; &nbsp; Kathmandu, Nepal. &nbsp; All Rights Reserved.</p>
          </div>






 









  </div>

          <script src='../../website_backend/js files/bookingJs.js'></script> 

	</body>
</html>