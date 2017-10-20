<?php
  
    $commands = array(
        'echo $PWD',
        'whoami',
        'sudo git pull',
        'git status',
        'git submodule sync',
        'git submodule update',
        'git submodule status',
    );
    
    $output = '';
    foreach($commands AS $command){
        // Run it
        $tmp = shell_exec("$command 2>&1");
        // Output
        $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
        $output .= htmlentities(trim($tmp)) . "\n";
    }
   
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body>

<?php echo $output; ?>
</pre>
</body>
</html>