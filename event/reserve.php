<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>


<div class="row">
  <div class="col-75">
    <div class="container">
        <?php
          $rid = $_GET['hotelid'];
     
       
        
        if(isset($_POST['check'])){
            
            $date= $_POST['date'];
                 $dbhost = 'root';
   $dbuser = '1234';
   $dbpass = 'kochi';
   
        
               
               
   $conn = mysqli_connect('localhost',$dbhost, $dbuser, $dbpass);
						$sel = "SELECT * FROM restobooking where rid = $rid and date = '$date'";
					$add=0;
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
                            
                            $add=$rws['numbers']+$add;
                            
                        }
            
                        $sel = "SELECT * FROM resto where rid = $rid ";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
                            
                            $limit=$rws['aseat'];
                            
                        }
            
                            if($add<$limit){
                                
                            $available = $limit - $add;
                       
            
		
            
        
           
        echo"<form method=\"post\" action=\"addreserve.php?rid=".$rid."&date=".$date."\">";
     
           
          ?>
          
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="username"  >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="scms@example.com">
           
        
          </div>

          <div class="col-50">
            <h3>RESERVATION</h3>
           
              <h3>AVAILABLE SEATS  <?php echo $available; ?></h3>
            <label for="ccnum">No of seats</label>
            <input type="text" id="ccnum" name="seats" placeholder="1-4">
            
            </div>
          </div>
          
        </div>
       
        <input type="submit" value="reserve" class="btn" name="book">
      
        
        </form>
    <?php
    }
                            else
                            {
                                echo "No seats Available that day.";
                            }
        
        }
    else
    {
    
          echo"<form method=\"post\" action=\"reserve.php?hotelid=".$rid."\">";
        ?>
     <label for="date"><i class="icon-calendar"></i> Date of Reservation</label>
          <input type="date" id="date" name="date" 
       min= <?php echo date("Y-m-d"); ?>></input>
        <input type="submit" value="Check" class="btn" name="check">
    </form>
   <?php 
    }
           ?>
    </div>
  </div>
  
</div>

</body>
</html>
