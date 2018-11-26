<?php

class postTable
{
    public static function getPostById($id)
    {
        $connection = new dbconnection() ;
        $sql = "select texte, date, image from fredouil.post where id = ".$id."";
        $res = $connection->doQueryObject( $sql ,"post");
        return $res;
    }
}

?>