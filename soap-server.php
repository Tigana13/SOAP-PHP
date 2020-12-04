<?
ini_set( "soap.wsdl_cache_enabled", 0 );
ini_set( 'soap.wsdl_cache_ttl', 0 );

function login( $login, $password )
{
  return "some string";
}

function doFilter( $params )
{
  return "some string";
}

$server = new SoapServer( "students.wsdl" );
$server->addFunction( "registerStudent" );
$server->addFunction( "filterByAdmission" );
$server->handle();
?>
