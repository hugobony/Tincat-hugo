<?php require "head.php"; ?>

<body>
<a href="index.php">retour</a>
    <div class="form-container">
        <h1>TINCAT</h1>
        <form action="functions/setUser.php" method="post">
            <input type="text" placeholder="pseudo" name="pseudo">
            <input type="email" placeholder="email" name="email">
            <input type="password" placeholder="password" name="password">
            <input type="password" placeholder="confirm password" name="confirm-password">
            <input type="submit" value="register">
        </form>

        <?php
        
// verifié les mot de passe 

        if(isset($_GET["inputNone"])){
            echo "<div class=\"error\">";
            echo $_GET["inputNone"];
            echo "</div>";
        }
        else if(isset($_GET["errorPassword"])){
            echo "<div class=\"error\">";
            echo $_GET["errorPassword"];
            echo "</div>";
        }
        ?>


    </div>
</body>
</html>
