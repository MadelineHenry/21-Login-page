<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php include ("./includes/header.php"); ?>
    <div class="AccessPart">
        <h1>Restricted access</h1>
        <h2>Please enter your credentials</h2>
        <form method="get" action="logout.php" name="login">
            <p>
                <label for="email">Email : </label>
                <input type="email" id="email" name="email" placeholder="john.doe@example.com" required>
            </p>
            <p>
                <label for="password">Password : </label>
                <input type="password" id="password" name="password" placeholder="********" required>
            </p>
            <p>
                <input type="submit" name="submit" value="Submit">
            </p>
        </form>
    </div>
    <?php include ("./includes/footer.php"); ?>
</body>
</html>