<div class="profilPart">
    <div class="infosProfil">
        <img src="./assets/img/unnamed.png" alt="PictureProfil" id="pictureProfil">
        <div class="textProfil">
            <p class="userName">
            <?php 
            if (isset($_SESSION['name']) && isset($_SESSION['email'])){
                echo $_SESSION['name'] . " , " . $_SESSION['email'];
            }
            ?>
            </p>
            <p class="userInfos">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit cumque delectus eius
                    molestiae, quae expedita!</br> Consequuntur similique blanditiis dolor nesciunt ut.</p>
        </div>
    </div>
    <a href="logout.php" id="logOut">Log out</a>
</div>