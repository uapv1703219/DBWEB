<?php
// Afficher les erreurs à l'écran
ini_set('display_errors', 1);

//nom de l'application
$nameApp = "Pandax";

//action par défaut
$action = "index";

if(key_exists("action", $_REQUEST))
$action =  $_REQUEST['action'];

require_once 'lib/core.php';
require_once $nameApp.'/controller/mainController.php';
ini_set('session.gc_maxlifetime', 20);
session_start();

$context = context::getInstance();
$context->init($nameApp);

$view=$context->executeAction($action, $_REQUEST);

//Layout apparaissant toujours sur la page
if (isset($_SESSION['pseudo'])) {
	$template_session=$nameApp."/view/sessionSuccess.php";
}
else
{
	$template_session=$nameApp."/view/sessionError.php";
}

//traitement des erreurs de bases, reste a traiter les erreurs d'inclusion
if($view===false)
{
	echo "Une grave erreur s'est produite, il est probable que l'action ".$action." n'existe pas...";
	die;
}
//inclusion du layout qui va lui meme inclure le template view
elseif($view!=context::NONE)
{
	$template_notif=$nameApp."/notif/".$action."notif".$view.".php";
	$template_view=$nameApp."/view/".$action.$view.".php";
	include($nameApp."/layout/".$context->getLayout().".php");
}

?>
