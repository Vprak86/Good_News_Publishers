<<<<<<< HEAD
<?php
session_start();

// Check if the user is logged in redirect to index page no need to lagin
if (isset($_SESSION["user"])) {
    header("Location: main/index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            // Include the database connection file
            require_once "database.php";

            // SQL query to fetch the user by email
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);

            // Check if the user exists and the password is correct
            if ($user && password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = $user; // Store the user data in the session
                header("Location: main/index.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Invalid email or password</div>";
            }

            // Close the statement and connection
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
        ?>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label id ="text-lable" for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label id ="text-lable" for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
        <div><p id ="text-lable">Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
</body>
</html>
=======
<?php
session_start();

// Check if the user is logged in redirect to index page no need to lagin
if (isset($_SESSION["user"])) {
    header("Location: main/index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            // Include the database connection file
            require_once "database.php";

            // SQL query to fetch the user by email
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);

            // Check if the user exists and the password is correct
            if ($user && password_verify($password, $user["password"])) {
                session_start();
                $_SESSION["user"] = $user; // Store the user data in the session
                header("Location: main/index.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Invalid email or password</div>";
            }

            // Close the statement and connection
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
        ?>
        <form action="login.php" method="post">
            <div class="mb-3">
                <label id ="text-lable" for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label id ="text-lable" for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
        <div><p id ="text-lable">Not registered yet <a href="registration.php">Register Here</a></p></div>
    </div>
</body>
</html>
>>>>>>> 644dc8f48231957c13f12c78b884c6763599c872
