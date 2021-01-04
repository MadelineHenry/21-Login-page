<div class="profilPart">
    <div class="infosProfil">
        <img src="./assets/img/unnamed.png" alt="PictureProfil" id="pictureProfil">
        <div class="textProfil">
            <p class="userName"><?php echo htmlspecialchars($_POST['name']); ?>,
                <?php echo htmlspecialchars($_POST['email'])?></p>
            <p class="userInfos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit cumque delectus eius
                    molestiae, quae expedita!</br> Consequuntur similique blanditiis dolor nesciunt ut.</p>
        </div>
    </div>
    <a href="loginPage.php" id="logOut">Log out</a>
</div>