<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        label{width: 10%}
    </style>
</head>
<body>
    <form action="data.php" method="post">
    <div class="page-header">
        <h1>KBT INDIA Pvt Ltd</h1>
        
    </div>
    <p>
        <h1>Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
        <h1>Book Your Ticket</h1><br>
        <form>
            
        <label for="Bus_number">Bus Number</label>
        <input type="text" name="Bus_number" value="" required>

        <label for="set_number">Set Number</label>
        <input type="text" name="set_number" value="" required><br><br>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="" required>

        <label for="name">Age</label>
        <input type="text" id="age" name="age" value="" required><br><br>

        <label>Passenger : </label>
        <input type="checkbox" id="adult" name="Passenger" value="adult">
        <label for="adult">Adult</label>
        <input type="checkbox" id="child" name="Passenger" value="child">
        <label for="child">Child</label><br><br>

        <label>Gender : </label>
        <input type="checkbox" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="checkbox" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="checkbox" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>
        
            <label for="ticket">From</label>
            <select name="ticket1" id="ticket1" required>
                <option value="Select your City">--Choose Option Below--</option>
                <option value="Chennai">Chennai</option>
                <option value="Trichy">Trichy</option>
                <option value="Madurai">Madurai</option>
                <option value="Dindugal">Dindugal</option>                
            </select>

            <label for="ticket"> TO </label>
            <select name="ticket2" id="ticket2" required>
               <option value="Select your City">--Choose Option Below--</option>
                <option value="Chennai">Chennai</option>
                <option value="Trichy">Trichy</option>
                <option value="Madurai">Madurai</option>
                <option value="Dindugal">Dindugal</option>
            </select><br><br>

            <label for="ticket">Date of Journey</label>
            <input type="date" id="d_o_j" name="d_o_j" required>

            <label for="ticket">Date of Return(Optinal)</label>
            <input type="date" id="d_o_r" name="d_o_r" ><br><br><br>

            <input type="submit" name="submit" onclick="myFunction()" >
        </form>

        <br><br>
        <!-- <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a> -->
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
       <script>
            function myFunction() 
            {document.getElementById("adult").required = true;}       
       </script> 
</body>
</html>