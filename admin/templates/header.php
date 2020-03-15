<header>
    <div class="logo-title">
        <img src="styling/images/LOGO.svg" alt="rry logo">
        <h1>Red Ribbion Youth</br>Admin Page</h1>
</div>
    <nav>
        <ul>
            <li><a href="admin_home.php">Home</a></li>
            <li><a href="edit_site.php">Edit-Site</a></li>
            <li><a href="edit_account.php">My-Account</a></li>
            <?php if(isset($_SESSION['user_id'])):?>
                <?php if($_SESSION['admin_rights'] === '1'):?>
                    <li><a href="admin_edituser.php">Edit-Users</a></li>
                    <li><a href="admin_createuser.php">Create-User</a></li>
                <?php endif;?>
            <?php endif;?>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
</header>