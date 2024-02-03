 <html>
  <head>
    <meta charset="utf-8"/>
    <meta name="author" content="Aex Software's"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php 
    require ("Query.php");
    $number="";
    $password="";
    if(isset($_POST["login"])){
      $number=$_POST['number'];
      $password=$_POST['password'];
    }
    $query=new Query();
    if(!empty($number) && !empty($password)){
      if($query->isExist($number,$password)){
        echo "Yor have successfully login<br>";
      }
      else{?>
        <script>
          alert("Wrong password or number ");
          window.location="../index.html";
        </script> 
      <?}
    }
    ?>
  </body>
</html>