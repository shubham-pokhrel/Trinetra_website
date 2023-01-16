<?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $db = "cashless payment system";
          $id=-1;
          date_default_timezone_set('Asia/Kathmandu');

          //$date_time = date('Y-m-d H:i:s');

         
          
          if ($_SERVER["REQUEST_METHOD"] == "GET") 
          {
              $id = test_input($_GET["id"]);
              $amount=test_input($_GET["amount"]);
              $pin=test_input($_GET["pin"]);
          }
          function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
          //creates connection with database
          $conn = new mysqli($servername, $username, $password,$db);

          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

        
            

        //++++++++++ deducts transaction amount from customer database
          if($id == 1 && $pin == 1234)
          {
            
                          $sql = "SELECT id, transaction_amount, balance, date_time FROM customer ORDER BY id DESC LIMIT 1 ";
                        
                          $result = $conn->query($sql);
                        
                          if ($result->num_rows > 0) {
                          
                            $row = $result->fetch_assoc();
                              $transaction_id = $row["id"];
                              $balance=$row["balance"];
                              $balance=$balance-$amount;
                
                              $nsql= "INSERT INTO customer (transaction_amount, balance,date_time)  
                              VALUES ($amount,$balance,CURRENT_TIMESTAMP);";
                              
                              $nresult=$conn->query($nsql);
                              if (mysqli_affected_rows($conn) >0){
                                echo "^1";
                        
                              }
                              else{
                                echo -1;
                              }
                            
                          } else {
                            echo -1;
                          }
                
                          
                          
                          
                          //++++++++++++++++++++++++ adds to shopkeeper
                
                        $sql = "SELECT id, transaction_amount, balance, date_time   FROM shopkeeper ORDER BY id DESC LIMIT 1 ";
                          
                          $result = $conn->query($sql);
                
                          if ($result->num_rows > 0) {
                          
                            $row = $result->fetch_assoc();
                              $balance=$row["balance"];
                              $balance=$balance+$amount;
                
                              $transaction_id = $transaction_id + 1;//customer ko data lida current vnda ek step agadi ko id ayekole
                
                              $nsql= "INSERT INTO shopkeeper  (id, transaction_amount, balance,date_time)  
                              VALUES ($transaction_id,$amount,$balance,CURRENT_TIMESTAMP);";
                
                              $nresult=$conn->query($nsql);
                              if (mysqli_affected_rows($conn) >0){
                                echo "1)";
                              }
                              else{
                                echo -1;
                              }
                            
                          } else {
                            echo -1;
                          } 
          }
          else
          {
            echo  "^-1)";
          }
             
  ?>         