<?php

/*
 * @author Balaji
 */

error_reporting(1);

$data_host = htmlspecialchars(Trim($_POST['data_host']));
$data_name = htmlspecialchars(Trim($_POST['data_name']));
$data_user = htmlspecialchars(Trim($_POST['data_user']));
$data_pass = htmlspecialchars(Trim($_POST['data_pass']));
$data_sec = htmlspecialchars(Trim($_POST['data_sec']));
$domain = Trim($_SERVER['HTTP_HOST']);
$licPath = "http://lic.prothemes.biz/atozseotools.php";

$con = mysqli_connect($data_host,$data_user,$data_pass,$data_name);

if (mysqli_connect_errno())
{
echo "Database Connection failed";
die();
}

// Don't crack license checker. It will crash whole site and handle incorrectly!

// If you want to request new purchase code for "localhost" installation and for "development" site (or)
// Reset the old code for your new domain name than contact support! 

// For Support, mail to us: rainbowbalajib [at] gmail.com

$stats = Trim(file_get_contents($licPath."?code=$data_sec&domain=$domain"));
$stats = explode("::",$stats);

$sucRate = Trim($stats[0]);
$authCode = Trim($stats[1]);

if ($sucRate == '1') {
    //Fine
}
elseif ($sucRate == '0') {
    echo 'Item purchase code not valid';
    die();
}
elseif ($sucRate == '2') {
    echo 'Already code used on another domain! Contact Support';
    die();
}
elseif ($sucRate == '') {
    echo 'Unable Connect to Server!';
    die();
}
else {
    echo 'Item purchase code not valid / banned';
    die();
}

if($authCode == ""){
    $authCode = Md5($domain);
}

$data = '<?php
/*
 * @author Balaji
 * @name: A to Z SEO Tools - PHP Script
 * @copyright © 2016 ProThemes.Biz
 *
 */
 
// Disable Errors
error_reporting(1);

// Database Hostname
$dbHost = \''.$data_host.'\';

// Database Username
$dbUser = \''.$data_user.'\';

// Database Password
$dbPass = \''.$data_pass.'\';

// Database Name
$dbName = \''.$data_name.'\';

//Item Purchase Code
$item_purchase_code = \''.$data_sec.'\';

//Domain Security Code
$authCode = \''.$authCode.'\';

//mod_rewrite
$mod_rewrite = \'1\';

?>';

file_put_contents('../../config.php',$data);

echo "1";
die();
?>