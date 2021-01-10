<div class="AccessPart">
        <h1>Restricted access</h1>
        <p class="second_title">Please enter your credentials</p>
    <form method="POST" action="?m=login" name="login">
        <p>
            <label for="email">Email : </br><input type="email" id="email" name="email" placeholder="john.doe@example.com" required></label>
        </p>
        <p>
            <label for="password">Password : </br><input type="password" id="password" name="password" placeholder="..." required></label>
        </p>
        <p>
            <input class="submit_button" type="submit" name="submit" value="Submit">
            <a class="Registration_button" href="?m=displayRegistrationForm">Registration</a>
        </p>
    </form>
</div>