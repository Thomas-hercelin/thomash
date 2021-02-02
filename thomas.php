<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resume</title>
    <link rel="stylesheet" type="text/css" href="cv.css">
	<title></title>
</head>

<h1>Formulaire</h1>
<?php 

je-code.com/desinscription.php?mail=thomas.hercelin15@gmail.com
$_GET["mail"]


if( isset($_POST["envoie"]) ){
  if( $_POST["message"]==''|| !isset($_POST["message"])){
    echo "Veuillez remplir le champ message";
  
}
else{
mail('thomas.hercelin15@gmail.com','coucou MDS', $_POST["message"]);
echo 'message envoyé, merci!';
if(isset($_POST["autorize"])){
  if (!isset($_POST['mail'])){
    $_POST['mail']='';
  }

 

  $adresseMail = $_POST['mail'];
  $message = $_POST['message'];
  $db = new PDO('mysql:host=exmachinefmci.mysql.db;dbname=exmachinefmci;charset=utf8','exmachinefmci','carp310M');
  $result = $db->prepare('INSERT INTO mailhercelin(mail)VALUES(:adresseMail)');
  $result->execute(array('adresseMail'=>$adresseMail, 'message' => $message));
 }
}
}

?>

<p>Adresse : Parc des Princes, France<br>E-mail : thomas.psg@hotmail.fr<br>Téléphone : 06.05.04.03.02</p>
<body>

     
      <section class="contact">
        <form method="post" action="mailto:thomas.hercelin@my-digital-school.org">

 

               
                <input type="text" id="name" name="user_name" placeholder="Nom :"><br><br>
               
                <input type="email" id="mail" name="user_mail" placeholder="E-mail :"><br><br>
               
                <input type="text" id="message" name="user_message" placeholder="Message:"><br><br>
                
                <input type="text" id="téléphone" name="user_message" placeholder="Téléphone:"><br><br>
               
                Mr<input type="radio" name="civ">MS<input type="radio" name="civ"><br><br>


                <select>
                	<option>FR</option>
                	<option>UK</option>
                	<option>BE</option>
                </select><br><br>

                <textarea placeholder="message" autofocus></textarea><br>
                   <!--<input type="submit" value="Envoyer"> <br>-->

                  

            <a href="index.html">Retour à la page d'accueil</a>
        </form>
        <section>
          I autorize to save my information<input type="checkbox" name="autorize">

          <input type="submit" value="Envoyer" name="Envoie"><br><br>

</body>
</html>