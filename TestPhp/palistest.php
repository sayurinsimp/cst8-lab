<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session-based Storage</title>
</head>
<body>
    <?php
    session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $data = $_POST['data'];


        $_SESSION['stored_data'] = $data;
    }


    if (isset($_SESSION['stored_data'])) {
        $stored_data = $_SESSION['stored_data'];
    } else {
        $stored_data = "";
    }


    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: palistest.php");
        exit;
    }
    ?>


    <h2>Enter your data:</h2>
    <form action="" method="post">
        <label for="data">Data:</label>
        <input type="text" id="data" name="data" value="
            <?php echo $stored_data; ?>
        " required>
        <button type="submit">Submit</button>
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
