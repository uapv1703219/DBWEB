<?php

class utilisateurTable
{
  public static function getUserByLoginAndPass($login,$pass)
  {
    $connection = new dbconnection() ;
    $sql = "select * from fredouil.utilisateur where identifiant='".$login."' and pass='".sha1($pass)."'" ;
    $res = $connection->doQueryObject( $sql,"utilisateur" );

    if($res === false)
      return false ;
    return $res ;
  }


  public static function getUserById($id)
  {
      $connection = new dbconnection() ;
      $sql = "select identifiant, nom, prenom from fredouil.utilisateur where id = '".$id."'";
      $res = $connection->doQueryObject( $sql,"utilisateur");
      return $res;
  }

  public static function getUsers()
  {
      $connection = new dbconnection() ;
      $sql = "select identifiant, nom, prenom from fredouil.utilisateur";
      $res = $connection->doQuery( $sql );
      return $res;
  }
}
