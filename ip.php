<html>
        <head>
                 <title>PHP test</title>
                <meta name="Morozov" content="?">
                <meta http-equiv="Content-Type" Content="text/html; Charset=UTF-8">
        </head>
        <body>
<?php
$ip = $_SERVER['REMOTE_ADDR'];
echo "IP: $ip"."<br>"."\n";     //Show IP address
$ip2 = gethostbyaddr ($ip);;
echo "Host: $ip2"."<br>"."\n"; //Show hostname
echo date('l jS \of F Y h:i:s A')."<br>"."\n"; //Show date

//Browser version
function browser(){
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browsers = array(
                        'Chrome' => array('Google Chrome','Chrome/(.*)\s'),
                        'MSIE' => array('Internet Explorer','MSIE\s([0-9\.]*)'),
                        'Firefox' => array('Firefox', 'Firefox/([0-9\.]*)'),
                        'Safari' => array('Safari', 'Version/([0-9\.]*)'),
                        'Opera' => array('Opera', 'Version/([0-9\.]*)')
                        );

    $browser_details = array();

        foreach ($browsers as $browser => $browser_info){
            if (preg_match('@'.$browser.'@i', $user_agent)){
                $browser_details['name'] = $browser_info[0];
                    preg_match('@'.$browser_info[1].'@i', $user_agent, $version);
                $browser_details['version'] = $version[1];
                    break;
            } else {
                $browser_details['name'] = 'Unknown';
                $browser_details['version'] = 'Unknown';
            }
        }

    return 'Browser: '.$browser_details['name'].' Version: '.$browser_details['version'];
}

echo browser();
?>

        </body>
</html>

