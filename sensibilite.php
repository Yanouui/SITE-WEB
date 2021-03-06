<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensibilit√© Au Gluten</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
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
  color: rgb(22, 22, 22);
  scroll-behavior: smooth;
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
  font-weight: 600;
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
section{
  
  padding: 0rem 0rem 0rem 0rem;}

.IMAGE{
  margin-top: 0px;
  background: url( mmmmmmm.jpg);
  background-repeat: no-repeat;
  background-size:cover;
  background-position: center;
 
  height: 440px;
  
  display: flex;
  align-items: center;

}
.section{
    line-height: 25px;
}
h1{
   color: #274690;
}h4{
 color: #576CA8; 
}.soustitre{
  margin-left: 50px;
   margin-right: 20px;
}.parag{
    margin-left: 50px;
   margin-right: 50px;
}.TITRE{
    margin-left: 20px;
   margin-top: 50px;
   font-size: x-large;
   font-family:'Ubuntu', sans-serif;
}.LISTE{
    margin-left: 50px;
   margin-right: 50px;
}

.content-table {
  border-collapse: collapse;
  margin: 70px 250px;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.section {
  line-height: 30px;
}

.content-table thead tr {
  width: 10px;
  background-color: #274690;
  color: #ffffff;
  text-align: left;
  font-weight: bold;

}

.content-table th,
.content-table td {
  padding: 12px 1px;
}

.content-table tbody tr {
  border-bottom: 1px solid #274690;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #ffffff;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #274690;
}

.content-table tbody tr.active-row {

  color: #000000;
}

/*footer*/
.footer{
  background: #274690;
  color: #979393;
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
            <label for="menu"> <i  class='bx bx-menu' id="menu-icon"></i> </label>
            <ul class="navbar">
                <li>
                    <a href="">Les Maladies</a>

                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="cŇďliaque.php">Maladie coeliaque</a>
                            </li>
                            <li> <a href="sensibilite.php">Sensibilit√© AU Gluten</a></li>
                            <li> <a href="herp√©tiforme.php">Dermatite herp√©tiforme</a></li>
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
                            <li> <a href="point.php">Point de vente</a></li>
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
                            <li> <a href="Erreur.php">Au quotidien</a></li>

                        </ul>
                    </div>
                </li>

            </ul>



        </div>






    </header>

    <section class="section">
        <span class="IMAGE">
            
        </span>
        
        <div class="TITRE">
            <h1> Sensibilit√© au gluten non cŇďliaque : Comment la diagnostiquer 
            </h1>
        </div> <br>
        
        

         <br>
        <div class="parag">
           &nbsp; Le spectre des probl√®mes m√©dicaux associ√©s au gluten comprend la maladie cŇďliaque, la dermatite
            herp√©tiforme, l‚Äôataxie caus√©e par le gluten, l‚Äôallergie au bl√© et la sensibilit√© au gluten non cŇďliaque. Le
            terme ¬ę sensibilit√© au gluten non cŇďliaque (SGNC) ¬Ľ est utilis√© pour d√©crire l‚Äô√©tat clinique d‚Äôindividus
            pr√©sentant des sympt√īmes lors de la consommation d‚Äôaliments contenant du gluten et qui se sentent mieux
            lorsqu‚Äôils suivent un r√©gime alimentaire sans gluten (SG), mais qui ne sont PAS atteint de la maladie
            cŇďliaque.
        </div> <br>
        
        
        <div class="soustitre">
            <h4> Sensibilit√© au gluten non cŇďliaque</h4>
        </div> <br>
        <div class="parag">
            La sensibilit√© au gluten non cŇďliaque (SGNC) est fr√©quemment autodiagnostiqu√©e; c‚Äôest donc pourquoi il est
            difficile d‚Äô√©tablir sa r√©elle pr√©valence. Il n‚Äôexiste actuellement aucun biomarqueur pour ce probl√®me
            m√©dical. <br>  Au cours d‚Äôune enqu√™te britannique effectu√©e aupr√®s de 1 002 personnes, 13 % des participants ont
            rapport√© avoir une sensibilit√© au gluten et 3,7 % de ceux-ci ont dit suivre un r√©gime alimentaire SG. Lors
            d‚Äôune vaste √©tude italienne effectu√©e aupr√®s de 12 255 personnes, il a √©t√© trouv√© que la SGNC est l√©g√®rement
            plus commune que la maladie cŇďliaque. Les donn√©es de la National Health and Nutrition Examination Survey
            men√©e aux √Čtats-Unis ont permis d‚Äô√©tablir qu‚Äôentre 0,55 % et 0,63 % de la population suivait un r√©gime
            alimentaire SG m√™me en l‚Äôabsence de la maladie cŇďliaque. Cette pr√©valence est semblable √† celle des cas
            diagnostiqu√©s et non diagnostiqu√©s de maladie cŇďliaque. <br>

            Les sympt√īmes de la SGNC sont tr√®s variables. Ceux-ci comprennent les ballonnements, les douleurs
            abdominales et la diarrh√©e; les sympt√īmes peuvent ressembler √† ceux du syndrome du c√īlon irritable. Les
            autres manifestations intestinales comprennent les naus√©es, le reflux gastrique, les ulc√©rations buccales et
            la constipation. Les individus peuvent pr√©senter des sympt√īmes non intestinaux comme un malaise g√©n√©ral, de
            la fatigue, des maux de t√™te, avoir l‚Äôesprit brouill√©, de l‚Äôengourdissement, des douleurs articulaires ou
            des √©ruptions cutan√©. <br> <br>
            Les sympt√īmes cliniques de la SGNC et de la maladie cŇďliaque se chevauchent, ce qui rend la distinction
            entre les deux probl√®mes m√©dicaux difficile sur la base seule des sympt√īmes. Dans une √©tude effectu√©e aupr√®s
            d‚Äôadultes, les patients atteints de la maladie cŇďliaque √©taient plus susceptibles d‚Äôavoir des ant√©c√©dents
            familiaux et personnels positifs de probl√®mes m√©dicaux auto-immuns et de carences nutritives que les
            patients atteints de SGNC. Il est primordial de noter que dans la SGNC, les anticorps tTG, EMA et DGP sont
            absents, et qu‚Äôil n‚Äôy a aucune atrophie des villosit√©s (dommages √† l‚Äôintestin gr√™le) lors de la biopsie.
            Ainsi, le diagnostic de la SGNC ne peut √™tre √©tabli qu‚Äôen excluant la maladie cŇďliaque. <br> <br>

            La sensibilit√© au gluten non cŇďliaque a √©t√© rapport√©e pour la premi√®re fois dans les ann√©es 1970. Au cours
            de la derni√®re d√©cennie toutefois, un nombre croissant de personnes suivent un r√©gime alimentaire SG pour
            ses bienfaits per√ßus sur la sant√©. Cela a renouvel√© l‚Äôint√©r√™t et les pr√©occupations √† savoir si ces
            individus sont r√©ellement atteints d‚Äôun probl√®me m√©dical associ√© au gluten. Il est vrai que certaines de ces
            personnes suivant un r√©gime alimentaire SG de leur plein gr√© peuvent r√©ellement √™tre atteintes de la maladie
            cŇďliaque. Ces individus pourraient n‚Äôavoir re√ßu aucun diagnostic ou de conseils nutritionnels de la part
            d‚Äôun di√©t√©tiste ni de suivi appropri√© de la part de leur m√©decin. Ainsi, ils pourraient √™tre plus √† risque
            de d√©velopper des complications de la maladie cŇďliaque √† long terme. Puisque les dommages inflig√©s √†
            l‚Äôintestin gr√™le se r√©sorbent et que le tissu transglutaminase (et les autres anticorps) se normalise apr√®s
            avoir entam√© un r√©gime alimentaire SG, il devient difficile d‚Äô√©tablir un r√©el diagnostic de la maladie
            cŇďliaque. <br>

            
        </div> <br>
        <table class="content-table">
        
            <thead>
        
                <tr>
                    <th> 
                       
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                    <th> Maladie cŇďliaque &nbsp;&nbsp;&nbsp   </th>
        <th> Sensibilit√© au gluten non cŇďliaque (SGNC) </th>
        
                </tr>
            </thead>
            <tbody>
                <tr class="active-row">
                    <td>l‚Äėapparition des sympt√īmes </td>
                    <td> Des semaines, voire des ann√©es </td>
                    <td>Quelques heures ou quelques jours </td>
        <td></td>
        
                </tr>
                <tr class="active-row">
                    <td>Pathogen√®se  </td>
                    <td> Auto-immune </td>
                    <td>R√©action immunologique jusqu‚Äė√† pr√©sent inexpliqu√©e </td>
        
        
                </tr>
                <tr class="active-row">
                    <td> Sympt√īmes</td>
                    <td> Intestinaux et extra-intestinaux </td>
                    <td> Intestinaux et extra-intestinaux </td>
        
                </tr>
                <tr class="active-row">
                    <td> Complications</td>
                    <td> Pathologies associ√©es, complications √† long terme </td>
                    <td>Aucune pathologie associ√©e, complications √† long terme inconnues </td>
        
                </tr>
                <tr class="active-row">
                    <td>Th√©rapie </td>
                    <td> Alimentation sans gluten √† vie
                    
                    Les personnes souffrant de maladie cŇďliaque doivent d√©finitivement bannir tout aliment contenant du gluten m√™me si
                    ceux-ci ne contiennent que des traces. </td>
                    <td>
                        Alimentation sans gluten avec am√©nagements temporaires possibles
                    </td>
                
                
                </tr>
                
               
            </tbody>
        </table>
        <div class="soustitre">
            <H4> Message d‚Äôensemble</H4>
        </div> <br>
        <div class="parag">
            La chose la plus importante √† savoir pour le public et les professionnels de la sant√© est que le diagnostic
            de la sensibilit√© au gluten non cŇďliaque ne devrait pas √™tre effectu√© sans exclure la maladie cŇďliaque. Un
            r√©gime alimentaire sans gluten NE devrait PAS √™tre entam√© sans un examen clinique appropri√© comprenant les
            tests s√©rologiques des anticorps des tissus transglutaminase (IgA) du patient lorsqu‚Äôil consomme toujours du
            gluten.


    </section>
<br><br><br><br><br>


    <!--footerrrrrrr-->
    <section class="footer">
        <br><br> <br>
        <div class="footer-container container">
            <h2>GlutenFree</h2>
            <div class="footer-box">
                <h3>Lien</h3>
    
                <a href="cŇďliaque.php">Maladie coeliaque </a>
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
                <a href="#">cvbn@gmail.com</a>
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