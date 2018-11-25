<?php

class chatTable extends chat
{
	public static function getPost($id)
	{
	  $connection = new dbconnection() ;
      $sql = "select text, date, image from fredouil.Post where id =" .$id;
      $res = $connection->doQueryObject( $sql , 'post');
      return $res;
	}
}
