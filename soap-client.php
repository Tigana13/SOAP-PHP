<?
$client = new SoapClient( "http://localhost/wsdls/organization.wsdl", array( 'cache_wsdl' => WSDL_CACHE_NONE ) );
try {
  $responseLogin = $client->login( 'test_user', 'test_password' ); // call login() from .wsdl
  if($responseLogin == "success") { // if success
    $response = $client->doFilter( $params ); // call doFilter() from .wsdl
    ?>
      <pre><? print_r( $response ); ?></pre>
    <?
  }
} catch ( SoapFault $sf ) {
  echo $sf->getMessage();

// Full SoapFault message
//  echo '<pre>';
//  var_dump( $sf );
//  echo '</pre>';

// Analyze last request
//  $xml = $client->__getLastRequest();
//  echo $xml;
}
?>
