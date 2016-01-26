<?php

define( 'DS', DIRECTORY_SEPARATOR );
define( 'BASE_DIR', dirname( __FILE__ ) . DS );

/*sempre que necessitar incluir um arquivo, utilize BASE_DIR como base inicial*/

/*
incluir arquivo 'a.php' que esteja dentro da pasta raíz '/'
*/
//echo BASE_DIR;
 //   echo DS;
//echo  dirname( __FILE__ ) ;

echo "<br />";

echo $_SERVER['PHP_SELF'];
echo "<br />";
 $teste=str_replace("server_variaveis.php","",$_SERVER['PHP_SELF']);
echo "<br />";
echo $teste." ".$path;
echo "<br />";
echo $_SERVER['SCRIPT_FILENAME'];
echo "<br />";
echo $_SERVER['REQUEST_URI'];
echo "<br />";
$indicesServer = array('PHP_SELF', 
'argv', 
'argc', 
'GATEWAY_INTERFACE', 
'SERVER_ADDR', 
'SERVER_NAME', 
'SERVER_SOFTWARE', 
'SERVER_PROTOCOL', 
'REQUEST_METHOD', 
'REQUEST_TIME', 
'REQUEST_TIME_FLOAT', 
'QUERY_STRING', 
'DOCUMENT_ROOT', 
'HTTP_ACCEPT', 
'HTTP_ACCEPT_CHARSET', 
'HTTP_ACCEPT_ENCODING', 
'HTTP_ACCEPT_LANGUAGE', 
'HTTP_CONNECTION', 
'HTTP_HOST', 
'HTTP_REFERER', 
'HTTP_USER_AGENT', 
'HTTPS', 
'REMOTE_ADDR', 
'REMOTE_HOST', 
'REMOTE_PORT', 
'REMOTE_USER', 
'REDIRECT_REMOTE_USER', 
'SCRIPT_FILENAME', 
'SERVER_ADMIN', 
'SERVER_PORT', 
'SERVER_SIGNATURE', 
'PATH_TRANSLATED', 
'SCRIPT_NAME', 
'REQUEST_URI', 
'PHP_AUTH_DIGEST', 
'PHP_AUTH_USER', 
'PHP_AUTH_PW', 
'AUTH_TYPE', 
'PATH_INFO', 
'ORIG_PATH_INFO') ; 

echo '<table cellpadding="10">' ; 
foreach ($indicesServer as $arg) { 
    if (isset($_SERVER[$arg])) { 
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ; 
    } 
    else { 
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
    } 
} 
echo '</table>' ; 

//include BASE_DIR . 'a.php';


/*
incluir arquivo 'b.php' que esteja dentro da pasta '/foo'
*/

//include BASE_DIR . 'foo' . DS . 'b.php';

?>