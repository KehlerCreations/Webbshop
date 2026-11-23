<header>
    <nav>
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li>Game Store</li>
            
            <?php
                if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
                    echo '<li><a href="/Public/logout.php">Log out</a></li>';
                } else {
                    echo '<li><a href="/Public/login.php">Log in</a></li>';
                    echo '<li><a href="/Public/register.php">Register</a></li>';
                }
                if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]) {
                    echo '<li><a href="/Admin/admin_landing.php">Admin</a></li>';
                }
            ?>
        </ul>
    </nav>
</header>