
                   <?php
                        session_start();
                        if(empty($_SESSION['Email'])){  
                                header("Location:index.php");  
                            } 
                            if( time()-$_SESSION['time']>86400){  
                                header("Location:index.php");
                            } 
                          include ('header.html');
                    ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="main.css"> 
    <title>payment</title>   
</head>
<body>  
    <div class="container-fluide" style="width: 100%;background-color:#F8F8F8">  
                   <?php 
                     include ('header.html');     
                    
                    ?> 
                  
                  
                   
        
        <div class="row" style="height: 100vh;">   
                  
                 <?php                            
                 include ('aside.php');
                 ?>   
               <div class="col-12 col-lg-10"> 

                        
                        <?php include 'navbar.html' ?>
                       
                        <div style="width:98%">    
                        <img src="svg/dflish.svg" class="float-right">  
                        <img src="svg/payement.svg" alt="">                                  
                        </div>  
                        <div style="margin:10px;">   
                        <a href="ajouter.php"><button  style="border-radius: 10px;">ajouter</button></a>  
                        
                        </div>
                        <main> 
                             <?php
                             
                              include('crude/base.php');     
                             ?>  
                        </main> 

               </div>   
        </div> 
                 
              
    </div>

  

   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html> 