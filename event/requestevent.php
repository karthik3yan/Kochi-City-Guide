<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Themify Icon -->
    <link rel="stylesheet" href="css/themify-icons.css">
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
         
  echo"<form method=\"post\" action=\"addrequestevent.php\">";
     
           
          ?>
          
        <div class="row">
          <div class="col-50">
            <h3>Enter event details</h3>
            <label for="ename"><i class="icon-paper-plane"></i> Event Name</label>
            <input type="text" id="ename" name="ename"  >
            <label for="edetail"><i class="icon-info"></i> Event detail</label>
             <textarea name="edetail" rows="5" cols="120">
              </textarea>
            <label for="charge"><i class="icon-credit-card"></i> Charges</label>
            <input type="text" id="charge" name="charge">
         

            
          </div>

         
          
        
       <div class="col-25"><br><br><br>
             <label for="date"><i class="icon-calendar"></i> Date of event</label>
          <input type="date" id="date" name="date" 
       min= <?php echo date("Y-m-d"); ?>></input>
        <input type="submit" value="Request" class="btn" name="request">
     </div>
        </div>
        </form>
    </div>
  </div>
  
</div>

</body>
</html>
