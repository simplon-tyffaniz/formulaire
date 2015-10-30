<!doctype html>
<html>



<?php
echo "Votre nom est ".$_POST['Nom'];
echo "Votre prenom est ".$_POST['Prenom'];
echo "email de l\'utilisateur".$_POST['courriel'];
echo "Infos complémentaires ".$_POST['informations_complementaires'];

try {

$bdd = new PDO('mysql:host=localhost;dbname=formulaire;charset=utf8', 'root', 'ecodair');

}

catch (Exception $e)

{
  die('Erreur :'.$e->getMessage());
}

$demande = $bdd->prepare('INSERT INTO recup(id, Nom, Prenom, courriel) VALUES (:id, :Nom, :Prenom, :courriel)');
$demande ->execute(array(
  'id'=>'',
  'Nom' =>$_POST['Nom'],
  'Prenom' =>$_POST['Prenom'],
  'courriel' =>$_POST['courriel']
));


?>
</html>
