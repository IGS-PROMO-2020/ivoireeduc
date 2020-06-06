<?php 
include "incris.php";

// CONNEXION A LA BASE DE DONNEES BABY
 $db=mysqli_connect('localhost','root', '' ,'educ') or die(mysqli_error());

$NOM= htmlspecialchars($_POST['name'] );
$PRENOM=htmlspecialchars($_POST ['pre']);
$EMAIL=htmlspecialchars($_POST['eml']);
$PWD1=sha1($_POST['pwd']);
$PWD2=sha1($_POST['pwd2']);
$AVATAR=$_FILES['ava']['name'];
$tmpAVATAR=$_FILES['ava']['tmp_name'];
// dossier où les images seront téléchargées
$DOSSIER='IMAGES/';
// fonction pour enregistrer les images téléchargées dans un dossier spécifique
move_uploaded_file($tmpAVATAR, $DOSSIER. $AVATAR);





// SI IL CLIQUE SUR LE BOUTON INSCRIPTION ALORS  LES CONDITION SI APPRES SERONT EFFECTUEES 
 if(isset($_POST['inscription']))
{
// SI LES CHAMPS SONT DIFFERENT DE VIDES 
    if(!empty($_POST['name'] ) AND  !empty ($_POST['pre'] )  AND !empty ($_POST['eml']) AND !empty  ($_POST['pwd']) AND !empty($_POST['pwd2']))
 {
          // SI LES MOTS DE PASS  SONT EGAUX
          if($PWD1==$PWD2)
          {
 
          // CETTE VARIABLE PERMET D'INSERER  LES DIFFENTE VARIABLE $NOM','$PRENOM' , '$EMAIL' ,'$PWD1'  DANS LES COLONNE DE LA TABLE MEMBRES 
            $table="INSERT INTO etudiants(nom, prenom ,email ,password,avatar) values('$NOM','$PRENOM' , '$EMAIL','$PWD1','$AVATAR')";
     
           /*APRES AVOIR  CREER LES VARIABLES DE CONNEXION  A LA BASE DE  DONNEE  ET CELLE  DE LA TABLE  
          LES UTILISER  A TRAVERS LA REQUETTE */

           $dt=mysqli_query($db, $table) ;           
           header("location:connexion.php");
          }
          else
          {
         $erreur="votre mot de passe ne correspond pas";
          }

  

    
    
    }

  else
     {
    $erreur="tous les champs doivent etre renplis";

     }

 if(isset($erreur))
    {
echo"<font color-red>$erreur</fond> ";

    }





}




?>