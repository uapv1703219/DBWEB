<?php

abstract class basemodel
{
  private $data = array();

  public function construct($dat)
  {
    $data=$dat;
  }
//-------------------------------------TP2---------------------------------
  public function __set($key,$var)
  {
    $this->data[$key]=$var;
  }

  public function __get($key)
  {
    if(array_key_exists($key,$data)){return $this->data[$key];}
  }

  //-------------------------------------------------------------------------

 public function save()
  {
    $connection = new dbconnection() ;

    if($this->id)
    {
      $sql = "update ".get_class($this)." set " ;

      $set = array() ;
      foreach($this->data as $att => $value)
        if($att != 'id' && $value)
          $set[] = "$att = '".$value."'" ;

      $sql .= implode(",",$set) ;
      $sql .= " where id=".$this->id ;
    }
    else
    {
      $sql = "insert into ".get_class($this)." " ;
      $sql .= "(".implode(",",array_keys($this->data)).") " ;
      $sql .= "values ('".implode("','",array_values($this->data))."')" ;
    }

    $connection->doExec($sql) ;
    $id = $connection->getLastInsertId("fredouil.".get_class($this)) ;

    return $id == false ? NULL : $id ; 
  }

}
