









   <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faire un don </title>
    <link rel="stylesheet" href="Don1.css">
    <style>


@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,400&display=swap');
*{
  font-family: 'Poppins', sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  scroll-behavior: smooth;
  scroll-padding-top: 4rem;
  list-style: none;
  text-decoration: none;
}
img{
  width: 100%;
}
body{
  
  color: antiquewhite;
  scroll-behavior: smooth;
}
section{
  
  padding: 4.5rem 0 3rem;
}
.topbutton{

bottom: 30px;
right: 30px;
z-index: 9;
position: fixed;

}
.topbutton a{
  height: 40px;
  width: 40px;
text-align: center;
background: #274690;
display: block;
border-radius: 10px;
cursor: pointer;
}
.topbutton a span{
  color: #000000;
  line-height: 40px;
  font-size: 30px;

}
.container{
  max-width: 1068px;
  margin-left: auto;
  margin-right: auto;
  position: sticky;
}
header{
  display: block;
  width: 100%;
  background: #274690;
  position: sticky;
  top: 0;
  left: 0;
  z-index: 100;
  

}

.wrapper .multi_color_border{  
  width: 100%;
  height: 5px;
  background: linear-gradient(to right, #F5F3F5 0% , #576CA8 25%, #576CA8 25%, #274690 50%, #414440 50%, #274690 75%, #274690 75%, #494949 100%);
}
.wrapper .top_nav{
  margin-top: 5px;
  width: 100%;
  height: 65px;
  background: rgb(255, 255, 255);
  padding: 0 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.wrapper .top_nav .left{
  display: flex;
  align-items: center;
}
.wrapper .top_nav .left .logo1 p{
  font-size: 24px;
  font-weight: bold;
  color: #ffffff;
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  margin-right: 25px;
}

.wrapper .top_nav .left .logo p span{
  color: hsl(240, 61%, 37%);
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

}
.wrapper .top_nav .right ul{
  display: flex;
}
.wrapper .top_nav .right ul li{
  margin: 0 12px;
  
}
.wrapper .top_nav .right ul li:last-child{
  background:  #274690;
  margin-right: 0;
  border-radius: 12px;
  text-transform: uppercase;
  letter-spacing: 3px;
}
.wrapper .top_nav .right ul li:hover:last-child{
  background: #576CA8;
}
.wrapper .top_nav .right ul li a{
  display: block;
  padding: 8px 10px;
  color: #666666;
}
.wrapper .top_nav .right ul li:last-child a{
  color: rgb(255, 255, 255);
}
.nav{ 
  display: flex;
  align-items:inherit;
  justify-content: center;
  padding: 20px 20px ;
  position: sticky;
}
.logo{
  display: flex;
  margin-right: 600px;
  column-gap: 0.5rem;
  font-size: 1rem;
  font-weight: 800;
  color: #ffffff;
  text-transform: uppercase;

}
.logo .bx{
  font-size: 24px;
  color: blue;
}
.navbar{
  display: flex;
}
.navbar a{
  padding: 8px 17px;
  color: blueviolet;
  font-size: 1rem;
  text-transform:initial;
  font-weight: 100;
}
.navbar a:hover{
  color:rgb(215, 209, 209)}
#menu-icon{
  font-size: 24px;
  cursor: pointer;
  display: none;
}

#menu{
  display: none;
}
.btn
{
  padding: 8px 20px;
  background: #576CA8;
  color: rgb(205, 208, 208);
  border-radius: 5rem;
}
.btn:hover{
  background: rgb(186, 184, 184);
}
.nav
{background: #274690;
    text-align: center;
   position: sticky;
    top: 0px;
}
.nav ul
{
display: inline-flex;
list-style: none;
color: rgb(213, 207, 207);
}
.nav ul li{
    width: 155px ;
    margin: 1px;
    padding: 5px;
}
.nav ul li a{
    text-decoration: none;
    color: #ffffff;
}
.active, .nav ul li:hover{
    background: #576CA8
}
.sub-menu-1
{
    display: none;
}
.nav ul li:hover .sub-menu-1
{
    display: block;
    position: absolute;
    background: #274690;
    margin-top: 1px;
    margin-left: 15px;
}
.nav ul li:hover .sub-menu-1 ul {
    display: block;
    margin: 10px;
}
.nav ul li:hover .sub-menu-1 ul li{
    width: 150px ;
    padding: 10px ;
    border-bottom:1px dotted rgb(255, 255, 255) ;
    background:transparent ;
    border-radius: 0;
    text-align: left;
}
.nav ul li:hover .sub-menu-1 ul li:last-child{
    border-bottom:none ;
}
.nav ul li:hover .sub-menu-1 ul li a:hover{
    color:#576CA8 ;
}




.forminscriptionN{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 16px;
    color:  #fff;
    
    background-color: white;
   


}.forminscription{
    width: 800px;
    height:1180px;
    background-color: white;
    border: 1px solid #1730c1;
    position: absolute;
    margin: auto;

  margin-top:200px;
    top:0;
    left: 0;
    bottom: 150;
    right: 0%;
    padding: 30px;
    border-radius: 10px;
    border-top: 6px solid rgb(34, 3, 92);
    border-bottom:6px solid  rgb(34, 3, 92);
    box-shadow: 0 0 10px #000;
   



}h4{
    border: 3px solid #274690;
    background-color: #274690;
    color: white;
    border-radius: 1px;
    width: 100%;
}
.H ul {
    color: rgb(58, 57, 57) ;
}
.form-text{
    font-size: 32px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 10px;
    color: #274690;;
    
}.form-saisie input{
width: 100%;
font-size: 14px;
outline: none;background-color:rgb(202, 199, 199);
color: black;
margin: 10px O;
padding: 10px;
border: 1px solid #FFF;
border-radius: 8px;



}
 .form-saisie span{

    font-size: 14px;
    font-weight: bold;
    color: #274690;;
 }
.btn_inscris{
     
     font-size: 16px;
background-color: rgb(31, 31, 192);
color: rgb(19, 19, 102);
margin: 20px 0;
padding: 0px;
border: none;border-radius: 10px;
margin-bottom: 25px;
text-align: center;
cursor: pointer;

 }.btn_inscris:hover{
     background-color:
     rgb(19, 19, 102);
     color: #FFF;
 } select{
    width: 100%;
    font-size: 18px;
    border-radius: 8px;
 }
 







.footer{
  background: #274690;
  color: #979393;
  margin-top: 1250px;
}
.footer-container{
  display: grid;
 gap: 2rem;
  grid-template-columns: repeat(auto-fit, minmax(240px, auto)); 
}
.footer-container h2{
  font-size: 1.7rem;
  font-weight: 500;
}
.footer-box{
  display: flex;
  flex-direction: column;
 
}
.footer-box h3{
  margin-bottom: 1rem;
  font-size: 1rem;
  font-weight: 400;
}
.footer-box a {
  font-size: 0.8rem;
  
  color: rgb(255, 255, 255);
  font-weight: 400;
  margin-bottom: 0.5rem;

}
.footer-box a:hover{
  color: #838385;
}
.social a{
  font-size: 20px;
  margin-right: 1rem;

}
.social a:hover{
  color: rgb(3, 9, 119) ;
}
    </style>
</head>

<body>
    
<div class="topbutton">
    <a href="home.php"><span class="fas fa-angle-up"> < </span></a>

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
                                <a href="c??liaque.php">Maladie coeliaque</a>
                            </li>
                            <li> <a href="sensibilite.php">Sensibilit?? AU Gluten</a></li>
                            <li> <a href="herp??tiforme.php">Dermatite herp??tiforme</a></li>
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


   
  
 <div class="forminscriptionN">
    <div class="forminscription">
       <div class="form-text">
          Faire Un Don
        </div>
        <br><br>
       
    <div class="form-saisie">
    <form action="Don1.php" method="post">
       
    <h4>MONTANT DU DON</h4><br>
     <span >Montant libre: *</span>       
         <input  name="Montant" type="number"  placeholder="*****DA"  required/><br> <br>
        
    
        <h4>INFORMATION SUR LE DONATEUR ET LE RE??U FISCAL</h4> <br>
        
                     <span >Adresse-email:*</span> 
                    <input type="email" name="Email" id="email"  placeholder="Taper votre Adresse-Email... "required/>
              
             <br> 
                    <span class="required">Sexe:*</span> 
                        <select name="Sexe" required>
    <option value=""></option>
    <option value="Femme">Femme</option>
    <option value="Homme">Homme</option>


</select>   <br> 


                         <span >Pr??nom:*</span> 
                        <input type="text" 
                         name="Prenom" placeholder="Taper votre Prenom ... "required/>
                   
                      <span >Nom:*</span> 
                      
                        <input type="text" name="Nom"    placeholder="Taper votre Nom ... "required/>
                   
                 <span >Adresse:*</span> 
                        
                        <input type="text" name="adresse" placeholder="ex. city zitoun ain elberda ... "required />
                   
                             <span >Code postal:*
                                
                            </span>
                            <input type="number" name="postcode"  placeholder="ex. 75008 ... "required />
                        
                                                                
                            <span >Ville:*</span>
                      
                            <input type="text" name="Ville"  placeholder="ex. ANNABA ... "required  />
                            <br>
                      
                  <span >Pays:*</span> 
                 <select name="Pays" id="Pays" required   >
            
    
    <option value=""></option>
    <option value="AFGHANISTAN">AFGHANISTAN</option>
    <option value="AFRIQUE DU SUD">AFRIQUE DU SUD</option>
    <option value="??LAND, ??LES">??LAND, ??LES</option>
    <option value="ALBANIE">ALBANIE</option>
    <option value="ALG??RIE" >ALG??RIE</option>
    <option value="ALLEMAGNE">ALLEMAGNE</option>
    <option value="ANDORRE">ANDORRE</option>
    <option value="ANGOLA">ANGOLA</option>
    <option value="ANGUILLA">ANGUILLA</option>
    <option value="ANTARCTIQUE">ANTARCTIQUE</option>
    <option value="ANTIGUA-ET-BARBUDA">ANTIGUA-ET-BARBUDA</option>
    <option value="ANTILLES N??ERLANDAISES">ANTILLES N??ERLANDAISES</option>
    <option value="ARABIE SAOUDITE">ARABIE SAOUDITE</option>
    <option value="ARGENTINE">ARGENTINE</option>
    <option value="ARM??NIE">ARM??NIE</option>
    <option value="ARUBA">ARUBA</option>
    <option value="AUSTRALIE">AUSTRALIE</option>
    <option value="AUTRICHE">AUTRICHE</option>
    <option value="AZERBA??DJAN">AZERBA??DJAN</option>
    <option value="BAHAMAS">BAHAMAS</option>
    <option value="BAHRE??N">BAHRE??N</option>
    <option value="BANGLADESH">BANGLADESH</option>
    <option value="ARBADE">BARBADE</option>
    <option value="B??LARUS">B??LARUS</option>
    <option value="BELGIQUE">BELGIQUE</option>
    <option value="BELIZE">BELIZE</option>
    <option value="B??NIN">B??NIN</option>
    <option value="BERMUDES">BERMUDES</option>
    <option value="BHOUTAN">BHOUTAN</option>
    <option value="BOLIVIE, l'??TAT PLURINATIONAL DE">BOLIVIE, l'??TAT PLURINATIONAL DE</option>
    <option value="BOSNIE-HERZ??GOVINE">BOSNIE-HERZ??GOVINE</option>
    <option value="BOTSWANA">BOTSWANA</option>
    <option value="BOUVET, ??LE">BOUVET, ??LE</option>
    <option value="BR??SIL">BR??SIL</option>
    <option value="BRUN??I DARUSSALAM">BRUN??I DARUSSALAM</option>
    <option value="BULGARIE">BULGARIE</option>
    <option value="BURKINA FASO">BURKINA FASO</option>
    <option value="BURUNDI">BURUNDI</option>
    <option value="CA??MANES, ??LES">CA??MANES, ??LES</option>
    <option value="CAMBODGE">CAMBODGE</option>
    <option value="CAMEROUN">CAMEROUN</option>
    <option value="CANADA">CANADA</option>
    <option value="CAP-VERT">CAP-VERT</option>
    <option value="CENTRAFRICAINE, R??PUBLIQUE">CENTRAFRICAINE, R??PUBLIQUE</option>
    <option value="CHILI">CHILI</option>
    <option value="CHINE">CHINE</option>
    <option value="CHRISTMAS, ??LE">CHRISTMAS, ??LE</option>
    <option value="CHYPRE">CHYPRE</option>
    <option value="COCOS (KEELING), ??LES">COCOS (KEELING), ??LES</option>
    <option value="COLOMBIE">COLOMBIE</option>
    <option value="COMORES">COMORES</option>
    <option value="CONGO">CONGO</option>
    <option value="CONGO, LA R??PUBLIQUE D??MOCRATIQUE DU">CONGO, LA R??PUBLIQUE D??MOCRATIQUE DU</option>
    <option value="COOK, ??LES">COOK, ??LES</option>
    <option value="COR??E, R??PUBLIQUE DE">COR??E, R??PUBLIQUE DE</option>
    <option value="COR??E, R??PUBLIQUE POPULAIRE D??MOCRATIQUE DE">COR??E, R??PUBLIQUE POPULAIRE D??MOCRATIQUE DE</option>
    <option value="COSTA RICA">COSTA RICA</option>
    <option value="C??TE D'IVOIRE">C??TE D'IVOIRE</option>
    <option value="CROATIE">CROATIE</option>
    <option value="CUBA">CUBA</option>
    <option value="DANEMARK">DANEMARK</option>
    <option value="DJIBOUTI">DJIBOUTI</option>
    <option value="DOMINICAINE, R??PUBLIQUE">DOMINICAINE, R??PUBLIQUE</option>
    <option value="DOMINIQUE">DOMINIQUE</option>
    <option value="??GYPTE">??GYPTE</option>
    <option value="EL SALVADOR">EL SALVADOR</option>
    <option value="??MIRATS ARABES UNIS">??MIRATS ARABES UNIS</option>
    <option value="QUATEUR">??QUATEUR</option>
    <option value="??RYTHR??E">??RYTHR??E</option>
    <option value="ESPAGNE">ESPAGNE</option>
    <option value="ESTONIE">ESTONIE</option>
    <option value="??TATS-UNIS">??TATS-UNIS</option>
    <option value="??THIOPIE">??THIOPIE</option>
    <option value="FALKLAND, ??LES (MALVINAS)">FALKLAND, ??LES (MALVINAS)</option>
    <option value="F??RO??, ??LES">F??RO??, ??LES</option>
    <option value="FIDJI">FIDJI</option>
    <option value="FINLANDE">FINLANDE</option>
    <option value="FRANCE">FRANCE</option>
    <option value="GABON">GABON</option>
    <option value="GAMBIE">GAMBIE</option>
    <option value="G??ORGIE">G??ORGIE</option>
    <option value="G??ORGIE DU SUD ET LES ??LES SANDWICH DU SUD">G??ORGIE DU SUD ET LES ??LES SANDWICH DU SUD</option>
    <option value="GHANA">GHANA</option>
    <option value="GIBRALTAR">GIBRALTAR</option>
    <option value="GR??CE">GR??CE</option>
    <option value="GRENADE">GRENADE</option>
    <option value="GROENLAND">GROENLAND</option>
    <option value="GUADELOUPE">GUADELOUPE</option>
    <option value="GUAM">GUAM</option>
    <option value="GUATEMALA">GUATEMALA</option>
    <option value="GUERNESEY">GUERNESEY</option>
    <option value="GUIN??E">GUIN??E</option>
    <option value="GUIN??E ??QUATORIALE">GUIN??E ??QUATORIALE</option>
    <option value="GUIN??E-BISSAU">GUIN??E-BISSAU</option>
    <option value="GUYANA">GUYANA</option>
    <option value="GUYANE FRAN??AISE">GUYANE FRAN??AISE</option>
    <option value="HA??TI">HA??TI</option>
    <option value="HEARD, ??LE ET MCDONALD, ??LES">HEARD, ??LE ET MCDONALD, ??LES</option>
    <option value="HONDURAS">HONDURAS</option>
    <option value="HONG-KONG">HONG-KONG</option>
    <option value="HONGRIE">HONGRIE</option>
    <option value="LE DE MAN">??LE DE MAN</option>
    <option value="LES MINEURES ??LOIGN??ES DES ??TATS-UNIS">??LES MINEURES ??LOIGN??ES DES ??TATS-UNIS</option>
    <option value="??LES VIERGES BRITANNIQUES">??LES VIERGES BRITANNIQUES</option>
    <option value="??LES VIERGES DES ??TATS-UNIS">??LES VIERGES DES ??TATS-UNIS</option>
    <option value="INDE">INDE</option>
    <option value="INDON??SIE">INDON??SIE</option>
    <option value="IRAN, R??PUBLIQUE ISLAMIQUE D'">IRAN, R??PUBLIQUE ISLAMIQUE D'</option>
    <option value="IRAQ">IRAQ</option>
    <option value="IRLANDE">IRLANDE</option>
    <option value="ISLANDE">ISLANDE</option>
   
    <option value="ITALIE">ITALIE</option>
    <option value="JAMA??QUE">JAMA??QUE</option>
    <option value="JAPON">JAPON</option>
    <option value="JERSEY">JERSEY</option>
    <option value="JORDANIE">JORDANIE</option>
    <option value="KAZAKHSTAN">KAZAKHSTAN</option>
    <option value="KENYA">KENYA</option>
    <option value="KIRGHIZISTAN">KIRGHIZISTAN</option>
    <option value="KIRIBATI">KIRIBATI</option>
    <option value="KOWE??T">KOWE??T</option>
    <option value="LAO, R??PUBLIQUE D??MOCRATIQUE POPULAIRE">LAO, R??PUBLIQUE D??MOCRATIQUE POPULAIRE</option>
    <option value="LESOTHO">LESOTHO</option>
    <option value="LETTONIE">LETTONIE</option>
    <option value="LIBAN">LIBAN</option>
    <option value="LIB??RIA">LIB??RIA</option>
    <option value="LIBYENNE, JAMAHIRIYA ARABE">LIBYENNE, JAMAHIRIYA ARABE</option>
    <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
    <option value="LITUANIE">LITUANIE</option>
    <option value="LUXEMBOURG">LUXEMBOURG</option>
    <option value="MACAO">MACAO</option>
    <option value="MAC??DOINE, L'EX-R??PUBLIQUE YOUGOSLAVE DE">MAC??DOINE, L'EX-R??PUBLIQUE YOUGOSLAVE DE</option>
    <option value="MADAGASCAR">MADAGASCAR</option>
    <option value="MALAISIE">MALAISIE</option>
    <option value="MALAWI">MALAWI</option>
    <option value="MALDIVES">MALDIVES</option>
    <option value="MALI">MALI</option>
    <option value="MALTE">MALTE</option>
    <option value="MARIANNES DU NORD, ??LES">MARIANNES DU NORD, ??LES</option>
    <option value="MAROC">MAROC</option>
    <option value="MARSHALL, ??LES">MARSHALL, ??LES</option>
    <option value="MARTINIQUE">MARTINIQUE</option>
    <option value="MAURICE">MAURICE</option>
    <option value="MAURITANIE">MAURITANIE</option>
    <option value="MAYOTTE">MAYOTTE</option>
    <option value="MEXIQUE">MEXIQUE</option>
    <option value="MICRON??SIE, ??TATS F??D??R??S DE">MICRON??SIE, ??TATS F??D??R??S DE</option>
    <option value="MOLDOVA, R??PUBLIQUE DE">MOLDOVA, R??PUBLIQUE DE</option>
    <option value="MONACO">MONACO</option>
    <option value="MONGOLIE">MONGOLIE</option>
    <option value="MONT??N??GRO">MONT??N??GRO</option>
    <option value="MONTSERRAT">MONTSERRAT</option>
    <option value="MOZAMBIQUE">MOZAMBIQUE</option>
    <option value="MYANMAR">MYANMAR</option>
    <option value="NAMIBIE">NAMIBIE</option>
    <option value="NAURU">NAURU</option>
    <option value="N??PAL">N??PAL</option>
    <option value="NICARAGUA">NICARAGUA</option>
    <option value="NIGER">NIGER</option>
    <option value="NIG??RIA">NIG??RIA</option>
    <option value="NIU??">NIU??</option>
    <option value="NORFOLK, ??LE">NORFOLK, ??LE</option>
    <option value="NORV??GE">NORV??GE</option>
    <option value="NOUVELLE-CAL??DONIE">NOUVELLE-CAL??DONIE</option>
    <option value="NOUVELLE-Z??LANDE">NOUVELLE-Z??LANDE</option>
    <option value="OC??AN INDIEN, TERRITOIRE BRITANNIQUE DE L'">OC??AN INDIEN, TERRITOIRE BRITANNIQUE DE L'</option>
    <option value="OMAN">OMAN</option>
    <option value="OUGANDA">OUGANDA</option>
    <option value="OUZB??KISTAN">OUZB??KISTAN</option>
    <option value="PAKISTAN">PAKISTAN</option>
    <option value="PALAOS">PALAOS</option>
    <option value="PALESTINIEN OCCUP??, TERRITOIRE">PALESTINIEN OCCUP??, TERRITOIRE</option>
    <option value="PANAMA">PANAMA</option>
    <option value="PAPOUASIE-NOUVELLE-GUIN??E">PAPOUASIE-NOUVELLE-GUIN??E</option>
    <option value="PARAGUAY">PARAGUAY</option>
    <option value="PAYS-BAS">PAYS-BAS</option>
    <option value="P??ROU">P??ROU</option>
    <option value="PHILIPPINES">PHILIPPINES</option>
    <option value="PITCAIRN">PITCAIRN</option>
    <option value="pOLOGNE">POLOGNE</option>
    <option value="POLYN??SIE FRAN??AISE">POLYN??SIE FRAN??AISE</option>
    <option value="PORTO RICO">PORTO RICO</option>
    <option value="PORTUGAL">PORTUGAL</option>
    <option value="QATAR">QATAR</option>
    <option value="R??UNION">R??UNION</option>
    <option value="ROUMANIE">ROUMANIE</option>
    <option value="ROYAUME-UNI">ROYAUME-UNI</option>
    <option value="RUSSIE, F??D??RATION DE">RUSSIE, F??D??RATION DE</option>
    <option value="RWANDA">RWANDA</option>
    <option value="AHARA OCCIDENTAL">SAHARA OCCIDENTAL</option>
    <option value="SAINT-BARTH??LEMY">SAINT-BARTH??LEMY</option>
    <option value="SAINT-KITTS-ET-NEVIS">SAINT-KITTS-ET-NEVIS</option>
    <option value="SAINT-MARIN">SAINT-MARIN</option>
    <option value="SAINT-MARTIN">SAINT-MARTIN</option>
    <option value="SAINT-PIERRE-ET-MIQUELON">SAINT-PIERRE-ET-MIQUELON</option>
    <option value="AINT-SI??GE">SAINT-SI??GE (??TAT DE LA CIT?? DU VATICAN)</option>
    <option value="SAINT-VINCENT-ET-LES GRENADINES">SAINT-VINCENT-ET-LES GRENADINES</option>
    <option value="SAINTE-H??L??NE, ASCENSION ET TRISTAN DA CUNHA">SAINTE-H??L??NE, ASCENSION ET TRISTAN DA CUNHA</option>
    <option value="SAINTE-LUCIE">SAINTE-LUCIE</option>
    <option value="SALOMON, ??LES">SALOMON, ??LES</option>
    <option value="SAMOA">SAMOA</option>
    <option value="SAMOA AM??RICAINES">SAMOA AM??RICAINES</option>
    <option value="SAO TOM??-ET-PRINCIPE">SAO TOM??-ET-PRINCIPE</option>
    <option value="S??N??GAL">S??N??GAL</option>
    <option value="SERBIE">SERBIE</option>
    <option value="SEYCHELLES">SEYCHELLES</option>
    <option value="SIERRA LEONE">SIERRA LEONE</option>
    <option value="SINGAPOUR">SINGAPOUR</option>
    <option value="SLOVAQUIE">SLOVAQUIE</option>
    <option value="SLOV??NIE">SLOV??NIE</option>
    <option value="SOMALIE">SOMALIE</option>
    <option value="SOUDAN">SOUDAN</option>
    <option value="SRI LANKA">SRI LANKA</option>
    <option value="SU??DE">SU??DE</option>
    <option value="SUISSE">SUISSE</option>
    <option value="SURINAME">SURINAME</option>
    <option value="SVALBARD ET ??LE JAN MAYEN">SVALBARD ET ??LE JAN MAYEN</option>
    <option value="SWAZILAND">SWAZILAND</option>
    <option value="SYRIENNE, R??PUBLIQUE ARABE">SYRIENNE, R??PUBLIQUE ARABE</option>
    <option value="TADJIKISTAN">TADJIKISTAN</option>
    <option value="TA??WAN, PROVINCE DE CHINE">TA??WAN, PROVINCE DE CHINE</option>
    <option value="TANZANIE, R??PUBLIQUE-UNIE DE">TANZANIE, R??PUBLIQUE-UNIE DE</option>
    <option value="CHAD">TCHAD</option>
    <option value="TCH??QUE, R??PUBLIQUE">TCH??QUE, R??PUBLIQUE</option>
    <option value="TERRES AUSTRALES FRAN??AISES">TERRES AUSTRALES FRAN??AISES</option>
    <option value="THA??LANDE">THA??LANDE</option>
    <option value="TIMOR-LESTE">TIMOR-LESTE</option>
    <option value="TOGO">TOGO</option>
    <option value="TOKELAU">TOKELAU</option>
    <option value="TONGA">TONGA</option>
    <option value="TRINIT??-ET-TOBAGO">TRINIT??-ET-TOBAGO</option>
    <option value="TUNISIE">TUNISIE</option>
    <option value="TURKM??NISTAN<">TURKM??NISTAN</option>
    <option value="TURKS ET CA??QUES, ??LES">TURKS ET CA??QUES, ??LES</option>
    <option value="TURQUIE">TURQUIE</option>
    <option value="TUVALU">TUVALU</option>
    <option value="UKRAINE">UKRAINE</option>
    <option value="URUGUAY">URUGUAY</option>
    <option value="VANUATU">VANUATU</option>
    <option value="VENEZUELA, R??PUBLIQUE BOLIVARIENNE DU">VENEZUELA, R??PUBLIQUE BOLIVARIENNE DU</option>
    <option value="VIET NAM">VIET NAM</option>
    <option value="WALLIS ET FUTUNA">WALLIS ET FUTUNA</option>
    <option value="??MEN">Y??MEN</option>
    <option value="ZAMBIE">ZAMBIE</option>
    <option value="ZIMBABWE">ZIMBABWE</option>

</select>

<br>
<span >T??l??phone:*</span>
            <input  type="tel" 
             name="T??l??phone"    placeholder="Taper votre numero t??l??phone ... "required  />
<br>     <br>         <H4>
                  Options de paiement:
                </H4>
                
<br>
                <span>Num??ro de carte bancaire:*</span>
                <input type="number" name="numcarte"  
                 placeholder="Saisissez votre num??ro de carte bancaire  ... "required />
               
          <br>
          
            <input name="Valider" type="submit" value="Valider" id="btn_inscris" class="btn_inscris"/>
    
    </form>
    </div>
    </div>
</div>
<section class="footer">
        <br><br> <br>
        <div class="footer-container container">
            <h2>GlutenFree</h2>
            <div class="footer-box">
                <h3>Lien</h3>
    
                <a href="c??liaque.php">Maladie coeliaque </a>
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


<?PHP
// ?????????????? ???????????????? ???? ??????????
$host = "localhost"; 
$user = "root";
 $password = ""; 
 $dbName = "dd";
  $conn = mysqli_connect($host, $user, $password,$dbName); 
// ?????????? ?????????????????? ???????????????? ???????????? ???????????? ?????? ?????????? ???????????????? 
if(isset($_POST['Valider'])) { 
  $Montant=$_POST["Montant"];
$Email=$_POST["Email"];
$Sexe=$_POST["Sexe"];
$Prenom=$_POST["Prenom"];
$Nom=$_POST["Nom"];
$adresse=$_POST["adresse"];
$postcode=$_POST["postcode"];
$Ville=$_POST["Ville"];
$Pays=$_POST["Pays"];
$T??l??phone=$_POST["T??l??phone"];
$numcarte=$_POST["numcarte"];

$Nom=filter_var($_POST['Nom'],FILTER_SANITIZE_STRING);
$Email=filter_var($_POST['Email'],FILTER_SANITIZE_EMAIL);
$query ="INSERT INTO donn(Montant, Email, Sexe, Prenom, Nom, adresse,
 postcode, Ville, Pays, T??l??phone, numcarte) 
VALUES(' $Montant','$Email','$Sexe','$Prenom','$Nom','$adresse',
'$postcode','$Ville','$Pays','$T??l??phone','$numcarte')";

$result = mysqli_query($conn,$query); 
echo  '<script>alert("votre don est fini");</script>';
}
?>




</html>