<?php
include ("utilisateur.class.php");

class message extends basemodel
{
	public static function getPost($id)
	{
	  $connection = new dbconnection() ;
      $sql = "select text, date, image from fredouil.Post where id =" .$id;
      $res = $connection->doQueryObject( $sql,"post");
      return $res;
	}

	public static function getParent($id)
	{
	  $connection = new dbconnection() ;
      $sql = "select parent from fredouil.message where id=" .$id;
      $res = $connection->doQueryObject( $sql,"utilisateur" );
      
      return $res;
	}

	public static function getLikes($id)
	{
	  $connection = new dbconnection() ;
      $sql = "select aime from fredouil.message where id=".$id;
      $res = $connection->doQuery( $sql );
      return $res;
	}

		public function getDestinataire($id)
	{
		$connection = new dbconnection() ;
		$sql = "select destinataire from fredouil.message where id = ".$id;
		$username= $connection->doQueryObject( $sql,"utilisateur" );
		return $username;
	}

		public function getEmetteur($id)
	{
		$connection = new dbconnection() ;
		$sql = "select emetteur from fredouil.message where id = ".$id;
		$username= $connection->doQueryObject( $sql,"utilisateur" );
		return $res;
	}
	
}


?>
