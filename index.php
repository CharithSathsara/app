<!DOCTYPE html>
<html>
<head>
    <title>master.lk web page</title>
</head>
<body>

<h1>Welcome to master.lk E-Learning Systemd</h1>
<p>
    <?php
    require_once 'Greeting.php';

    $greeting = new Greeting();
    $str = $greeting->getGreeting("Charith Sathsara");
    echo "<p>" . $str . "</p>";

    ?>
</p>

</body>
</html>
