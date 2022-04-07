<!DOCTYPE html>
<html>
    <head>
        <title>Projects &rtrif; Eric J.S.</title>
        <!-- styles -->
        <link rel="stylesheet" href="https://unpkg.com/sanitize.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="/styles/main.css">
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    </head>
    <body>
        <!-- index -->
        <div id="body-container">
            <?php 
                include 'logo-header.php';
                // include 'actions.php';
            ?>
            <main id="lost">
                <h2>Whoops!</h2>
                <p>
                That page doesn't exist. Try one of these instead &downarrow;
                </p>
            </main>
            <?php 
                include 'nav.php';
				include 'footer.php';
            ?>
        </div>
    </body>
</html>