<!DOCTYPE html>
<html>
<head>
    <title>Welcome to LAMP STACK</title>
</head>
<body>
    <?php 
        require 'Welcome.php';
        $welcome = new Welcome();
    ?>
    <h1><?php echo $welcome->greet() ?></h1>
</body>
</html>