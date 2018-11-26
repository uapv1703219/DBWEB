<?php

class messageTable 
{
		public function getMessages()
	{
		$connection = new dbconnection() ;
		$sql = "select * from fredouil.message";
		$msgs = $connection->doQuery( $sql );
		return $msgs;
	}
		public function getMessageSentTo($id)
	{
		$connection = new dbconnection() ;
		$sql = "select afficheMessage(".$id.")";
		$msg= $connection->doQueryObject( $sql,"message");
		return $msg;
	}
		public function getMessagesSentTo($id,$debut,$fin)
	{
		$connection = new dbconnection() ;
		$sql = "select  filtreMessages(".$debut.",".$fin.",".$id.")";
		$msg= $connection->doQuery( $sql);
		return $msg;
	}
}


?>
