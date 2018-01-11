<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $this->session->get('currentUser') ?></h1> 
      <?php
      header("refresh:1;url=FirstPage");
      ?>
   </body>
   
</html>