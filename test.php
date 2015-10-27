<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet"href="test.css">
</head>
<body>
<h1>Formulaire à compléter</h1>
<p> <?php echo strftime('%A %d %B %Y, %H:%M');?> </p>
</br></br></br>
  <form action="traitement.php" method="post">

    <label for="Nom">Votre nom:</label>
   <input type="text" name="Nom" id="Nom"/>
</br></br>
   <label for="Prénom">Votre prénom:</label>
  <input type="text" name="Prénom" id="Prénom"/>
</br></br>

  <label for "courriel">Courriel:</label>
  <input type="courriel" name="courriel" id="courriel" />

</br></br></br></br>



<label for "information âge">Quel est votre âge?</label>
    <input type="number" id="information âge"/>
</br></br></br></br>


</br></br></br></br>

<label for "informations_complementaires">informations complémentaires :</label>
<textarea type="text" name="informations_complementaires"
/></textarea>
</br></br>
</br></br>


<label for="plage horaire">A quel moment de la journée préférez-vous être rappelé ? </br>
  <input type="checkbox" name="matin" id="matin"/><label for="matin">Matin</label></br>
  <input type="checkbox" name="midi" id="midi"/><label for="midi">midi</label></br>
  <input type="checkbox" name="soir" id="soir"/><label for="soir">soir</label>


</br></br></br></br>
</br></br></br></br>


<div class="button">
        <button type="submit">Envoyer votre formulaire</button>
    </div>

</form>
</body>
</html>








  </body>
