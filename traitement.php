
<?php
echo "Votre nom est ".$_POST['Nom'];
echo "Votre prénom est ".$_POST['Prénom'];
echo "email de l\'utilisateur".$_POST['courriel'];
echo "Infos complémentaires ".$_POST['informations_complementaires'];



$message = $_POST['Nom']."\n".$_POST['Prénom']."\n".$_POST['courriel']."\n".$_POST['informations_complementaires'];

$fichier = fopen('contacts', 'a+');

fputs($fichier, $message);
fclose($fichier);
?>
