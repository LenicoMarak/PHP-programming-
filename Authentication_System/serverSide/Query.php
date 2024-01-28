<?php
require ("dbConnection.php");

class Query extends DbConnection{
  
  public function __construct(){
    parent::connect();
    try{
      $sql="USE school;";
      parent::getConn()->exec($sql);
    }
    catch(PDOException $e){
      var_dump($e->getCode());
      var_dump($e->getMessage());
      var_dump($e->errInfo());
    }
    parent::connect();
  }
  
  public function getName($roll){
    try{
      $sql="select FirstName from User where Roll_no=?;";
      $st=parent::getConn()->prepare($sql);
      $st->bindParam(1,$roll,PDO::PARAM_INT);
      $st->execute();
      $data=$st->fetch();
    }

    catch(PDOExcepton $e){
      echo $e.getMessage();
    }
    return $data;
  }
        
  public function isExist($number,$password){
    try{
      $sth=parent::getConn()->prepare('SELECT Number,Password FROM User where Number=? AND Password=?;');
      $sth->bindParam(1,$number,PDO::PARAM_STR);
      $sth->bindParam(2,$password,PDO::PARAM_STR);
      $sth->execute();
      while($data=$sth->fetch(PDO::FETCH_ASSOC)){
      while($data=$sth->fetch(PDO::FETCH_ASSOC)){
      while($data=$sth->fetch(PDO::FETCH_ASSOC)){
         $numMatch=$data["Number"];
         $passMatch=$data["Password"];
         if($numMatch==$number && $passMatch== $password){
            return true;
         }
      }
    }
    catch(PDOExcepton $e) {
      var_dump($e->getCode());
      var_dump($e->getMessage());
      var_dump($e->errInfo());
    }
    return false;
  }
   
  public function insert($firstName,$lastName,$number,$gender,$password){
    try{
      $sql="INSERT INTO User(
               FirstName,
               LastName,
               Number,
               Gender,
               Password
            ) 
            VALUES(?,?,?,?,?);";
      $q=parent::getConn()->prepare($sql);
      $q->bindParam(1,$firstName,PDO::PARAM_STR);
      $q->bindParam(2,$lastName,PDO::PARAM_STR);
      $q->bindParam(3,$number,PDO::PARAM_STR);
      $q->bindParam(4,$gender,PDO::PARAM_STR);
      $q->bindParam(5,$password,PDO::PARAM_STR);
      $q->execute($infoStu);
      $rows=$q->rowCount();
    } 
    catch(PDOException $e){
      var_dump($e->getCode());
      var_dump($e->getMessage());
      var_dump($e->errInfo());
    }
    return $rows;
  }
   
  public function __destruct(){
    parent::closeConn();
  }
}
?>