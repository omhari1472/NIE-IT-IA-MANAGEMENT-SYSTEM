<?php include("connection.php"); ?>
<! DOCTYPE html>  
<html>  
<head>  
<title>log in</title>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta charset ="utf-8">
<body>
    
    
    <?php
    if(isset($_POST['user_type'])) {
        $user_type = $_POST['user_type'];
        $name=$_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Perform basic validation
        if(empty($username) || empty($password)) {
            $error = "Please enter a username and password.";
        } 
        if($conn->connect_error) {
            $error = "Error connecting to the database: " . $conn->connect_error;
        } else {
            // Check if the user type is admin or user
            if($user_type == "student") {
                // Perform admin login
                $query = "SELECT * FROM STUDENTLOGIN WHERE username = '$username' AND password = '$password'";
                $result = $conn->query($query);
                
                if($result->num_rows == 1) {
                    // Login successful, redirect to admin dashboard
                    // header("Location:index.html");
                    echo "<script>alert('Hi! $name Welcome to NIEIT.');window.location='studentdashboard.html'</script>";

                    exit;
                } else {
                    // $error = "Invalid username or password.";
                    // echo '<script type ="text/JavaScript">';  
                    // echo 'alert("Invalid username or password.")';  
                    // echo '</script>';  
                    echo "<script>alert('Invalid username or password.');window.location='login.html'</script>";

                    // header("Location:index.html");
                }
            } else if($user_type == "faculty") {
                // Perform user login
                $query = "SELECT * FROM FACULTYLOGIN WHERE username = '$username' AND password = '$password'";
                $result = $conn->query($query);
                
                if($result->num_rows == 1) {
                    // Login successful, redirect to user dashboard
                    header("Location: facultydashboard.php");
                    exit;
                } else {
                    // $error = "Invalid username or password.";
                    echo "<script>alert('Invalid username or password.');window.location='login.html'</script>";

                }
            } else if($user_type == "hod") {
                // Perform user login
                $query = "SELECT * FROM HODLOGIN WHERE username = '$username' AND password = '$password'";
                $result = $conn->query($query);
                
                if($result->num_rows == 1) {
                    // Login successful, redirect to user dashboard
                    header("Location: hoddashboard.html");
                    exit;
                } else {
                    // $error = "Invalid username or password.";
                    echo "<script>alert('Invalid username or password.');window.location='login.html'</script>";

                }
            }else {
                $error = "Invalid user type selected.";
            }
        }
        
    }
    ?>
</head>  
<body>  
</body>  
</html>  



<!-- Display an error message if the login is invalid -->
<?php
    if(isset($error)) {
        echo "<p style='color:red'>$error</p>";
    }
    ?>
