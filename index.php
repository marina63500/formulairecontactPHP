<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact en php</title>
    <link rel="stylesheet"  href="/asset/style.css">
 
</head>

<body>
    <h1><?php echo "Formulaire de contact"?></h1>

    <form  method= "post"  action="traitement.php" >

        <label for= "nom" >Nom : </label> 
        <input id = "nom" type="text" name="nom" placeholder="Entrer votre nom"/>
 
         <label for= "prenom" >Prénom : </label> 
        <input id = "prenom" type="text" name="prenom" placeholder="Entrer votre prénom"/>

        
        <label for= "email" >Email : </label> 
        <input type="email" id="email" placeholder="Entrer votre email"  name="email" required />

        <label for="objet">Objet : </label>
            <select name="objet" id="objet">
                <option value="">--Choisir un sujet--</option>
                <option value="rens">renseignement sur un article</option>
                <option value="suivi">suivi de commande</option>
                <option value="sav">Ma démarche de sav</option>
            </select>
    
        <label for="message">Message :</label>
        <textarea id ="message" name= "message" rows="5" cols="50" placeholder = "  Entrer votre texte ici" required></textarea>
    
        <button type="submit" value="Envoyer le formulaire">Envoyer le formulaire</button>
    
    </form>

    <?php
?>

</body>
</html>