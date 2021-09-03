<div class="menu">
    <div class="box">
        <?php
        if(isset($_SESSION['id'])){?>
            <div class="option option1">
                <img class="img-user" src="img/root.png" alt=""><p><?php echo $_SESSION["username"]; ?></p>
            </div>
         <?php }
        ?>

        <div onclick="menu(1)" class="option" id="menu_option_1">
            <img src="img/d.png" alt=""><p>Dashboard</p>
        </div>
        <div onclick="menu(2)" class="option" id="menu_option_2">
            <img src="img/icon-proyectos.png" alt=""><p>Calendario</p>
        </div>
       
    </div>
</div>