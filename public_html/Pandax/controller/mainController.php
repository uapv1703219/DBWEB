<?php
/*
 * Controler 
 */

class mainController
{
	public static function superTest($request,$context)
	{
		if($_GET["param1"] == 'yolo')
			return context::ERROR;
		else
		{
			$context->param1=$_GET["param1"];
			$context->param2=$_GET["param2"];
			return context::SUCCESS;
		}
	}

	public static function Friend($request,$conyext)
	{
		if(isset($_SESSION['pseudo']))
		{
			return context::SUCCESS;
		}
	return context::ERROR;
	}

	public static function helloWorld($request,$context)
	{
		if(isset($_SESSION['pseudo']))
		{
			$context->mavariable="hello world";
			return context::SUCCESS;
		}
	return context::ERROR;
	}

	public static function index($request,$context)
	{
		
		return context::SUCCESS;
	}

	public static function login($request, $context)
	{
		if(isset($_SESSION['pseudo'])) return context::ERROR;
		else return context::SUCCESS;
	}

	public static function loginin($request,$context)
	{
		if(isset($_POST['pseudo']))
		{
			$CURSESSION=utilisateurTable::getUserByLoginAndPass($_POST['pseudo'],$_POST['password']);
			if($CURSESSION)
				{
					$_SESSION['pseudo'] = $_POST['pseudo'];
					 $context->setSessionAttribute('logged', 1);
					 $context->setSessionAttribute('id', $CURSESSION[0]['id']);
					/*foreach($CURSESSION as $CUR) {
					$_SESSION['pseudo'] = $CUR->pseudo;
					}*/
					return context::SUCCESS;
				}
				else
				return context::ERROR;
		}
		return context::ERROR;
	}

	public static function disconnect($request,$context)
	{
		if (isset($_SESSION['pseudo'])) {
			session_destroy();
			return context::SUCCESS;
		}
		return context::ERROR;
	}
}
