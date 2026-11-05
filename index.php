<?php
session_start();
if (!isset($_SESSION['visits'])) {
    $_SESSION['visits'] = 0;
}
$_SESSION['visits']++;

$siteName  = "My Example Site";
$pageTitle = "Home";
$year      = date("Y");
$today     = date("l, F j, Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $siteName . " | " . $pageTitle; ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f8; color: #333; }
        header { background: #2c3e50; color: #fff; padding: 1rem 2rem;
                 display: flex; justify-content: space-between; align-items: center; }
        nav a { color: #ecf0f1; text-decoration: none; margin-left: 1.5rem; }
        .hero { background: #3498db; color: #fff; text-align: center; padding: 4rem 2rem; }
        .container { max-width: 1000px; margin: 2rem auto; padding: 0 1rem;
                     display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; }
        .card { background: #fff; border-radius: 8px; padding: 1.5rem; box-shadow: 0 2px 6px rgba(0,0,0,.1); }
        footer { background: #2c3e50; color: #bdc3c7; text-align: center; padding: 1rem; }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $siteName; ?></h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Welcome to <?php echo $siteName; ?>!</h2>
        <p>Today is <?php echo $today; ?>.</p>
    </section>

    <main class="container">
        <div class="card"><h3>Latest News</h3><p>Replace with your announcement.</p></div>
        <div class="card"><h3>Features</h3><p>Showcase your products or services.</p></div>
        <div class="card"><h3>Get Involved</h3><p>Invite visitors to contact you.</p></div>
    </main>

    <footer>
        <p>&copy; <?php echo $year; ?> <?php echo $siteName; ?>.</p>
        <p>Page visits this session: <?php echo $_SESSION['visits']; ?></p>
    </footer>
</body>
</html>
