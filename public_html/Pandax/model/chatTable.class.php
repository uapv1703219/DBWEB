<?php

class chatTable{
	
	public function getChats()
	{
		$connection = new dbconnection() ;
		$sql = "select * from fredouil.chat";
		$msgs = $connection->doQuery( $sql );
		return $msgs;
	}
	public function getLastChat()
	{
		$connection = new dbconnection() ;
		$sql = "select * from fredouil.chat ORDER BY id DESC LIMIT 1";
		$msgs= $connection->doQueryObject( $sql, 'chat');
		return $msgs;
	}
	
}

?>
