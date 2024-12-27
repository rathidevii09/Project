 <?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: selection.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body
        {
            background-color:rgb(102, 216, 224);
        }
        p{
            font-size: 20px;
            text-align: center;
        }
        .button {
            display: inline-block;
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            padding: 10px 20px; /* Padding inside the button */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Rounded corners */
            font-size: 16px; /* Text size */
            font-family: Arial, sans-serif; /* Font style */
            text-align: center; /* Center text */
            transition: background-color 0.3s ease; /* Smooth hover effect */
        }

        .button:hover {
            background-color:rgb(6, 95, 11); /* Darker green on hover */
        }

        .button:active {
            background-color:rgb(122, 229, 181); /* Even darker green when clicked */
        }
    </style>
</head>
<body>
    <h1><center>PERSONALIZED MANAGEMENT SYSTEM</center></h1>
    <h1><center>WELCOME TO OUR WEBSITE </center></h1>
    <marquee direction="left" style="font-size: 25px">Platform where you customize and manage your management</marquee>
    <p>If you are new, please sign up. If you are already registered, log in.</p>
    <center>
    <a href="signup.php" class="button">Sign Up</a><br><br>
    <a href="login.php" class="button">Log In</a>
    </center>
</body>
</html>
 