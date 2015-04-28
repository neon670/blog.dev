


<!DOCTYPE html>
<html lang="en">
<head>
    <title>My First View</title>
</head>
<body>
    <p>this is the random number: <?php echo $random; ?>!</p>
    <h1><?php if ($guess == $random) {echo 'you are correct';}?></h1>
    <h1><?php if ($guess != $random){echo 'you are wrong';}?></h1>
  
    
</body>
</html>