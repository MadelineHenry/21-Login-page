<div class="AccessPart">
    <form method="POST" action="?m=UserRegistration" name="login">
        <p>
            <label for="gender" id="gender">Gender : 
            <select name="gender">
                <option value="X" id="x" name="x">X</option>
                <option value="M" id="male" name="male">Male</option>
                <option value="F" id="female" name="female">Female</option>
            </select>
        </label>
        </p>
        <p>
            <label for="firstname">Firstname : </br><input type="name" id="firstname" name="firstname" placeholder="John" required></label>
        </p>
        <p>
            <label for="lastName">Lastname : </br><input type="name" id="lastname" name="lastname" placeholder="Doe" required></label>
        </p>
        <p>
            <label for="email">Email : </br><input type="email" id="email" name="email" placeholder="john.doe@example.com" required></label>
        </p>
        <p>
            <label for="password">Password : </br><input type="password" id="password" name="password" placeholder="..." required></label>
        </p>
        <p>
            <input class="submit_button" type="submit" name="submit" value="Submit">
        </p>
    </form>
</div>