<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
         <title>liste des patients</title> 
         <link rel="stylesheet" href="Liste.css"> 
        
         </head> 
         <body> 
            
          

<div class="topbutton">
    <a href="admin.php"><span class="fas fa-angle-up"> </span></a>

</div>

    <div class="wrapper">

        <div class="multi_color_border"></div>
        <div class="top_nav">
            <div class="left">


            </div>
            <div class="right">
                <ul>
                   
                    <li><a href="Home1.php">Nous Contacter</a></li>
                    <li><a href="Home1.php">A propos de nous</a></li>
                    <li><a href="signup.php">inscription</a></li>
                  
                </ul>
            </div>
        </div>
    </div>
    <header>
        <div class="nav container">
            <a href="Home1.php" class="logo"><i class='bx bxs-home-alt-2'></i>GlutenFree</a>
            <input type="checkbox" name="" id="menu">
            <label for="menu" <i class='bx bx-menu' id="menu-icon"></i> </label>
            <ul class="navbar">
                <li>
                    <a href="">Les Maladies</a>

                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="cœliaque.php">Maladie coeliaque</a>
                            </li>
                            <li> <a href="sensibilite.php">Sensibilité AU Gluten</a></li>
                            <li> <a href="herpétiforme.php">Dermatite herpétiforme</a></li>
                        </ul>
                    </div>




                </li>
                <li>
                    <a href="">nos espace</a>

                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="Enfant.php">espace enfant</a>
                            </li>
                            <li> <a href="point.php">Point de vente </a></li>
                            <li> <a href="produitt.php">les Produit </a></li>
                        </ul>
                    </div>




                </li>
                <li>
                    <a href="#home">Le gluten </a>
                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="gulten.php">c'est quoi le gluten </a>
                            </li>
                            <li> <a href="source.php"> source du gluten</a></li>
                            
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#home">Regime</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="recette.php">Recette </a>
                            </li>
                            <li> <a href="Erreur.php"> Au quotidien</a></li>

                        </ul>
                    </div>
                </li>

            </ul>



        </div>






    </header>






<center>
<div class="donateur">


         <h2>  Liste des patients qui ont reserver un rendez-vous:</h2> <br> <br>
         <table> 
        <th>Numero</th> 
        <th>nom</th> 
        <th>Prenom</th>
         <th>Adresse email</th>
         <th> numero de téléphone</th>
        <th>Sexe</th>
         <th>Age</th>
         <th>Medecin</th>
         <th>Date</th> 
    <?php $host = "localhost"; $user = "root"; $password = ""; $dbName = "hospital"; 
    $conn = mysqli_connect($host, $user, $password,$dbName); 
    
    // إستيراد معلومات المرضى من قاعدة البيانات 
    $query = "SELECT * FROM patient"; 
    $result = mysqli_query($conn,$query); 
    if ($result){ 
        while($row = mysqli_fetch_assoc($result)){ 
echo "<tr><td>" . $row['id_patien'] . "</td>
<td>" . $row['name'] . "</td>
<td>" .$row['PRENOM']."</td>
<td>" . $row['email'] . "</td>
<td>" . $row['phone'] . "</td>
<td>" . $row['Sexe'] . "</td>
<td>" . $row['Age'] . "</td>
<td>" . $row['medecin'] . "</td>
<td>" . $row['date'] . "</td>
</tr>"; } 
  echo "</table>"; } 
            else{ echo "probleme"; } ?>



</div>

/center>




  <!--footerrrrrrr-->
  <section class="footer">
        <br><br> <br>
        <div class="footer-container container">
            <h2>GlutenFree</h2>
            <div class="footer-box">
                <h3>Lien</h3>
    
                <a href="cœliaque.php">Maladie coeliaque </a>
                <a href="gulten.php">c'est quoi le gluten </a>
                <a href="recette.php"> Recette</a>
    
            </div>
    
            <div class="footer-box">
                <h3>location</h3>
                <a href="#"> ALger </a>
                <a href="#">Annaba</a>
                <a href="#">Oran</a>
    
    
            </div>
    
    
            <div class="footer-box">
                <h3>Contact</h3>
                <a href="#">+213 (0)987 665 6543</a>
                <a href="#">glutenfree@gmail.com</a>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
    
    
            </div>
        </div>
    
    </section>




         </body>
</html>