<?php
// Carga en dos variables los valores enviados por la URL

$n1=$_GET['n1'];
$n2=$_GET['n2'];


// Carga en una variable una cadena de caracteres con el fichero XML que se debe enviar.
// http : / /www.dneonline . com/calculator . asmx?op=Add
// Utiliza sintaxis heredoc para facilitar la escritura.
$msgSoap = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <CountryFlag xmlns="http://www.oorsprong.org/websamples.countryinfo">
      <sCountryISOCode>US</sCountryISOCode>
    </CountryFlag>
  </soap:Body>
</soap:Envelope>
XML;

// inicia curl
$ch = curl_init();

// crea un array de configuración para curl
// url del servicio, http://www.dneon1ine.com/ca1cu1ator.asmx?WSDL '
// RETURNTRANSFER, true.
// HTTP VERSION, 1.1
// CUSTOMREQUEST, POST
// POSTFIELDS, Variable con fichero xml.
// HTTPHEADER, text/xml y juego de caracteres 7tf-8

$curlConfig = array(
    CURLOPT_URL            => "http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_POSTFIELDS     => $msgSoap,
    CURLOPT_HTTPHEADER     => array(
        'Content-Type: text/xml; charset=utf-8',
        'Content-Length: ' . strlen($msgSoap))
);

// ejecuta y cierra curl
curl_setopt_array($ch, $curlConfig);
$result = curl_exec($ch);
curl_close($ch);

// Utiliza preg_match para localizar el resultado en la respuesta.
// http : / /www.dneonline . com/calculator. asmx ?op=Add

preg_match("/<AddResult>(.*)<\/AddResult>/", $result, $matches);

// muestra el resultado
echo $result;
