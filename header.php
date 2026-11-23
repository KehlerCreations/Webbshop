<header>
    <nav>
        <ul>
            <li>Game Store</li>
            <li>Log in</li>
            
            <?php
                if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
                    echo '<li><a href="/Public/register.php">Log out</a></li>';
                } else {
                    echo '<li><a href="/Public/register.php">Log in</a></li>';
                    echo '<li><a href="/Public/register.php">Register</a></li>';
                }
                if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]) {
                    echo '<li><a href="/Admin/admin_landing.php">Admin</a></li>';
                }
            ?>
        </ul>
    </nav>
</header>