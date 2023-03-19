<?php
$client = new SoapClient('http://localhost:1717/?wsdl');
$param=new stdClass();
$param->montant=23;
$res=$client->__soapCall("Convert",array($param));
//var_dump($res);
echo("Montant after Convert : <br/>" .  $res->return);

$res3=$client->__soapCall("GetAllComptes",array());
//var_dump($res3);
echo ("<hr/>");
echo ("Touts les comptes :<br/>");
foreach($res3->return as $cpte){
    echo("Compte number : ".$cpte->code);
    echo("<br/>Solde :".$cpte->solde);
    echo("<br/>---------<br/>");
}
?>
