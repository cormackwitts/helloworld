<html>
    <head>
        <title>Your Name</title>
        <link rel=stylesheet href="stylesheet.css">
    </head>
    <header>
        <div class="headerdiv">
            <h2>Cormack's Site</h2>
        </div>
    </header>
    <body>
    <?php
    $name = $_GET('user')
    echo ("Thank you for visiting the site, " . $name . ".")
    ?>
    <p>Click below to go back</p>
    <a href="page2.html">Previous page</a>
    </body>
</html>
