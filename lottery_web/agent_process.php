<?php
echo "hi";
//shell_exec('python lottery.py --images photo');
//$output = shell_exec('python lottery.py');
//echo "<pre>$output</pre>";
////////////////////////////////
$command = escapeshellcmd('/opt/lampp/htdocs/lottery/lottery_web/basith.py');
$output = shell_exec($command);
echo $output;
//////////////////////////////////
//ob_start();
//passthru('/usr/bin/python3 /opt/lampp/htdocs/lottery/lottery_web/lottery.py');
//$output = ob_get_clean();
////////////////////////////////////////////
//$message = exec("/opt/lampp/htdocs/lottery/lottery_web/lottery.py 2>&1");
//print_r($message);
//header( "refresh:3;url=agent_dashboard.php" );
?>