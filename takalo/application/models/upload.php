<?php
include("fonction.php");
session_start();

if(isset($_FILES['avatar']))
{
$dossier = '../assets/upload/';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.');
if(!in_array($extension, $extensions))
{
 $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc';
}
if($taille>$taille_maxi)
{
 $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur))
{
 $fichier = strtr($fichier,
 'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
 'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
 $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
 if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier))
 {
    // fonction($_SESSION['pseudo'],$fichier);
    $requete= "INSERT INTO utilisateurs values (NULL,'%s','%s',NOW())";
    $requete= sprintf($requete,$_SESSION['pseudo'],$fichier);
    mysqli_query($bdd,$requete);
 echo 'Upload effectué avec succès !';
  header('location:../page/accueil.php');
 }
 else
 {
 echo 'Echec de l\'upload !';
 }
}
else
{
 echo $erreur;
}
}

?>