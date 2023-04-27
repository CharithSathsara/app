<!DOCTYPE html>
<html>
<head>
    <title>Greeting Example</title>
</head>
<body>

<h1>Greeting Example By Charith Sathsara</h1>
<p>
    <?php
    require_once 'Greeting.php';

    $greeting = new Greeting();
    $str = $greeting->getGreeting("John");
    echo "<p>" . $str . "</p>";

    ?>
</p>

</body>
</html>
