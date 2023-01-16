<!DOCTYPE HTML>  
<html>
<head>
<style>
    .error {color: #FF0000;}
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

</style>
</head>
<body>  


<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "test";
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = mysqli_select_db( $conn, 'test' );

// inserts data into table at last row
/*for($i=0; $i<3; $i++)
{
  $sql.= "INSERT INTO user (name, balance)  //__________(yo chai naya transaction halna lai)________________
  VALUES ('ferifrom loop',999+$i);";
}


if ($conn->multi_query($sql) === TRUE) 
{
  echo "New record created successfully";
  $last_id = $conn->insert_id;  //returns id of last data
  echo $last_id;
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/



// to print row
//$sql = "SELECT id, name, balance FROM user";
//$sql = "SELECT id, name, balance FROM user WHERE balance=0";  //filters using where



$sql = "SELECT id, name, balance FROM user ORDER BY id DESC LIMIT 3"; //++++++++++++++++( actually used for transaction showing)++++++++++

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row until end ______________(yo chai transaction history dekhauna use hunxa)_______________

  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["balance"]. "<br>";
  }
} else {
  echo "0 results";
}



// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
date_default_timezone_set('Asia/Kathmandu');
$change = true;
if($change == true)
{
    $time =  date("H:i:sa");
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
      $name = test_input($_POST["name"]);
    }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if($name == "transaction")
  {
    $time = date("H:i:sa");
    $change = false;
  }
  if($name =="show")
  {
    echo"asfsdf $time";
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<table class ="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Balance</th>
    </tr>
  </thead>
  <tbody>
  <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "test";
            $conn = new mysqli($servername, $username, $password,$db);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Create database
            $sql = mysqli_select_db( $conn, 'test' );





            $sql = "SELECT id, name, balance FROM user ORDER BY id DESC LIMIT 3"; //++++++++++++++++( actually used for transaction showing)++++++++++

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row until end ______________(yo chai transaction history dekhauna use hunxa)_______________

              while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["name"]. "</td>
                        <td>" . $row["balance"]. "</td>
                      </tr>";
              
              }
            } else {
              echo "0 results";
            }
  ?>         
  </tbody>
</table>
 <br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

  Name: <input type="text" name="name" value = "<?php echo $name?>">
  <input type="submit" name="submit" value="Submit"> 

</form>



</body>
</html>