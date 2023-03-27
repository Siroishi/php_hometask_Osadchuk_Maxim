<?php
    require_once __DIR__.'/../../vendor/autoload.php'; // Autoload files using Composer autoload
    use Phpcourse\Myproject\Classes\MyMainClass; // Use the namespace of the class you want to use
    $myMainClass = new MyMainClass(); // Create an instance of the class

    // example of using the class constant
    echo "<br><br>Example of using the class constant:<br>";
    echo $myMainClass::MY_CONST;

    // example of using the class static property
    echo "<br><br>Example of using the class static property:<br>";
    use Phpcourse\Myproject\Classes\Classes\ClassExample;
    echo ClassExample::$helloInformation;
