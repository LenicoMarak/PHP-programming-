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
    if(isset($_POST['submit2'])){
       $firstName=$_POST['firstName'];
       $lastName=$_POST['lastName'];
       $number=$_POST['number'];
       $gender=$_POST['gender'];
       $password=$_POST['password'];
       $passRepeat=$_POST['passwordRepeat'];
       $objRe=new Query();
       $row=$objRe->insert($firstName,$lastName,$number,$gender,$password);
    }
    if($row>0){
    ?>
      <div class="sucBox" id="pop">
        <div>
          <h3>Successful</h3>
        </div>
        <p>You have signin to your account</p>
        <button onClick="closeSms()" id="ok">OK</button>
      </div>
    <?
    }
    else{?>
       <p>Failed while submitting your form</p>
       <a href="../signUp.html">Try again</a>
    <?
    }?>
    <script>
      let popId=document.getElementById("pop");
      function closeSms(){
         popId.classList.add("popSms");
      }
    </script>
  </body>
</html>