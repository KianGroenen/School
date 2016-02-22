<?php
    $page = basename($_SERVER['SCRIPT_NAME']);
?>

<nav>
    <ul>
        <li class="<?php echo ($page == 'home.php') ? 'current' : ''; ?>"><a href="home.php">Home</a></li>
        <li class="<?php echo ($page == 'contact.php') ? 'current' : ''; ?>"><a href="contact.php">Contact</a></li>
        <li class="<?php echo ($page == 'blog.php') ? 'current' : ''; ?>"><a href="blog.php">Blog</a></li>
    </ul>
</nav>