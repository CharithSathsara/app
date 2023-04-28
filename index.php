<!DOCTYPE html>
<html>
<head>
    <title>master.lk web page</title>
</head>
<body>

<h1>Welcome to master.lk</h1>
<p>
    <?php
    require_once 'Greeting.php';

    $greeting = new Greeting();
    $str = $greeting->getGreeting("Charith");
    echo "<p>" . $str . "</p>";

    ?>
</p>

</body>
</html>
