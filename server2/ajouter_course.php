<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style_crude.css">   
    <title>ajouter</title> 
</head>
<body>
<?php 
                    $connect=mysqli_connect("localhost","root","","e_classe_db");
                          if(isset($_POST['submit'])){
                                    $nom=$_POST['nom'];   
                                    $prenom=$_POST['prenom'];
                                    $ville=$_POST['ville'];
                                    $email=$_POST['email'];  
                                    $sql="INSERT INTO `course`( `nom`, `prenom`, `ville`, `email`) VALUES(' $nom',' $prenom',' $ville','$email')";
                                    $myql=mysqli_query($connect,$sql); 
                                    header('location:course.php');
                                }
                            
                   ?>   
                  
                <div  class="register">   
                  <h2>Ajouter</h2>  
                  <form action="" method="post">
                        <input type="text" name="nom" placeholder="nom" ><br> 
                       
                        <input type="text" name="prenom" placeholder="prenom" ><br>  
                       
                        <input type="text" name="ville" placeholder="ville" > <br>    
                      
                        <input type="text" name="email" placeholder="email" ><br>  
                       
                        <button type="submit" name="submit">
                         ajouter 
                        </button>  
                    </form>    
                        
              </div>
</body>
</html>