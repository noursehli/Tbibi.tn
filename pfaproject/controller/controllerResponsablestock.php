<?php
$controller= "Responsablestock" ;
require_once ("{$ROOT}{$DS}model{$DS}ModelResponsablestock.php");
if(isset($_REQUEST['action']))
$action = $_REQUEST['action'];
else $action="LogIn";


switch ($action) { 

    case "LogIn":

        $pagetitle ="Connexion Responsable Stock"; 
        $view ="LogIn";
        require ("{$ROOT}{$DS}view{$DS}view.php");
        break;
        
        case "LogedIn" :
        
        if(isset($_REQUEST['username']) && 
        isset($_REQUEST['password']));
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $log=ModelResponsablestock::login($username,$password);
        if (!$log==null){
            $pagetitle = "Connexion Responsable Stock"; 
            $view = "LogedIn";
            }else{
            $pagetitle = "Connexion Responsable Stock"; 
            $view = "NotLogedIn";}
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;

case "Register":

$pagetitle="Créer un nouveau compte";
$view="CreerCompte";
require ("{$ROOT}{$DS}view{$DS}view.php");
break;

case "Registred" :
if(isset($_REQUEST['Responsable_ID']) && 
isset($_REQUEST['Responsable_firstname']) &&
isset($_REQUEST['Responsable_Lastname']) &&
isset($_REQUEST['Salary']) &&
isset($_REQUEST['Responsable_Hire_Date']) &&
isset($_REQUEST['Login']) &&
isset($_REQUEST['PWD']) &&
isset($_REQUEST['Grade'])){ 
$Responsable_ID=$_REQUEST["Responsable_ID"];
$Responsable_firstname = $_REQUEST["Responsable_firstname"];
$Responsable_Lastname = $_REQUEST["Responsable_Lastname"];
$Salary = $_REQUEST["Salary"];
$Responsable_Hire_Date = $_REQUEST["Responsable_Hire_Date"];
$Login = $_REQUEST["Login"];
$PWD = $_REQUEST["PWD"];
$Grade = $_REQUEST["Grade"];
$recherche = ModelResponsablestock::select($Responsable_ID);
if($recherche==null){
$u = new ModelResponsablestock($Responsable_ID,$Responsable_firstname,$Responsable_Lastname,$Salary,$Responsable_Hire_Date,$Login,$PWD,$Grade);
$tab = array(
"Responsable_ID" => $Responsable_ID,
"Responsable_firstname" => $Responsable_firstname,
"Responsable_Lastname" => $Responsable_Lastname,
"Salary" => $Salary,
"Responsable_Hire_Date" => $Responsable_Hire_Date,
"Login" => $Login,
"PWD" => $PWD,
"Grade" => $Grade,
);
$u->insert($tab);
$pagetitle = "Responsable Enregistré";
$view = "Registred";
require ("{$ROOT}{$DS}view{$DS}view.php");
}break;
}}
?>