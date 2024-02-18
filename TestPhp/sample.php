<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML FORM</title>
</head>
<body>
    <form action = "function.php" method = "POST">
        <input type = "text" id = "inputdata"  name = "textfield">
        <input type = "submit" value = "Submit">
        <input type= "submit" formaction = "logout.php" name = "logout" value="Logout">
        <?php
            // Check if the 'logout' parameter is set and has a value of 1
            if(isset($_GET['logout']) && $_GET['logout'] == 1) {
                // Display the confirmation message
                echo "<p>Logout successful.</p>";
            }
            ?>
    </form>
</body>
</html>