 <?php 
$dbname="demodb";
$dbuser="sa";
$dbpass="P@ssw0rd";
$dbhost="mssql";

$connectionInfo = array ( "UID"=>$uid, "PWD"=>$pwd, "Database"=>$dbname );

$version = 1;
$author = getenv('DEMO_TEXT') ;
$email = "unknown";

$conn = sqlsrv_connect( $serverName, $connectionInfo);    

$tsql = "SELECT Email FROM email WHERE id = '$version'";

$stmt = sqlsrv_query( $conn, $tsql);    
    
if ( $stmt )    
{    
     echo "Statement executed.<br>\n";    
}     
else     
{    
     echo "Error in statement execution.\n";    
     die( print_r( sqlsrv_errors(), true));    
}    

$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC)

$email = $row[0];

echo "v$version ";
echo "\t pod: ".$_SERVER['SERVER_ADDR'];
echo "\t email: $email"; 
echo "\t user: $author";
echo "\n\32";


 ?>
