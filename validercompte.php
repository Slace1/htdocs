<?php

 var_dump($_POST);

if (!empty($_POST)){

$username = $_POST['username'];
$ = $_POST['nom'];
$adresse = $_POST['adresse'];
$code_postal = $_POST['code_postal'];


try
{
	$bdd = new PDO('mysql:host=localhost; dbname=Mabase;charset=utf8','Jeff','4clW20F/gdKMX2Kz');
 echo '<br>connexion OK<br>';
}
catch (Exception $e)
{
       echo "ERREUR CONNECT", $e->getMessage(), $e->getLine();
}

$data = array(
	'code' => $code,
	'nom' => $nom,
	'adresse' => $adresse,
	'code_postal' => $code_postal,
	'ville' => $ville,
  'imputation'=>$imputation,
);
echo '<br>';
var_dump($bdd);
echo '<br>';


$sql = "INSERT INTO Fournisseurs (code, nom, adresse, code_postal, ville,imputation) VALUES (:code, :nom, :adresse, :code_postal, :ville, :imputation)";
$req = $bdd->prepare($sql);
//print_r($req);
var_dump($data);
$req->execute($data);

print_r($req);

}









header("Location: http://192.168.64.2/Menu/Authentification.php");

?>
