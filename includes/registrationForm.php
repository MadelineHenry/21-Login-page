<form method="POST" action="" name="login">
    <p>
        <label for="gender" id="gender">Gender : </br>
            <input type="checkbox" id="Madam" name="Madam">Madam
            <input type="checkbox" id="Miss" name="Miss">Miss
            <input type="checkbox" id="Sir" name="Sir">Sir</label>
    </p>
    <p>
        <label for="firstname">Firstname : </br><input type="name" id="firstname" name="name" placeholder="John" required></label>
    </p>
    <p>
        <label for="lastName">Lastname : </br><input type="name" id="lastName" name="name" placeholder="Doe" required></label>
    </p>
    <p>
        <label for="email">Email : </br><input type="email" id="email" name="email" placeholder="john.doe@example.com" required></label>
    </p>
    <p>
        <label for="password">Password : </br><input type="password" id="password" name="password" placeholder="..." required></label>
    </p>
    <p>
        <input class="submit_button" type="submit" name="submit" value="Submit">
        <a class="register_button" href="includes/loginForm.php">Register</a>
    </p>
</form>