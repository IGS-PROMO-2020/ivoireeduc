
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="ivoire.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <link rel="stylesheet" href="java.js">
      
<body>
    <title> ABIDJAN</title>

  </head>
  <body>

       
      <header>

    <!--    TOP NAV START==================================-->

<!------ Include the above in your HEAD tag ---------->

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <a class="navbar-brand"><img src="tori.jpg" alt="Logo" style="border-radius:300px;height:60px;width:80px ;"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <!-------modal------->
     



  
    
     <button class="ther"><i class="fas fa-users fa-1x"><a href="profil.php">ESPACE ETUDIANT</a></i></button>

   
     <button class="ther"><i class="fas fa-users fa-1x"><a href="view_con.php">CONNEXION</a></i></button>

     <button class="ther"><i class="fas fa-users fa-1x"><a href="view_insc.php">INSCRIPTION </a></i></button>
     <?php 
      if (isset($_SESSION['nom'] )) 
      {
        echo ( $_SESSION['nom']);
        echo '<img src="IMAGES/'.$_SESSION['avatar'].'" alt="AVATAR" width ="60" height ="40">';
      }

      ?>



    

    <!-- //  :::$sql="SELECT*FROM membres FROM  avatar='$AVATAR'; -->
    <!-- //  :*$resu!:lt = mysqli_query ($db, $sql); -->
    <!-- //  $row = mysqli_fetch_array ($result) -->



 


 </div>
     <!-----------modal----------->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <form class="form-inline my-2 my-lg-0 border border-danger rounded">
          <input class="form-control mr-sm-2 border-0" type="text" placeholder="Search" aria-label="Search">
          <i class="material-icons">search</i>
        </form>
          <li class="nav-item active">
            
            <a class="nav-link" href="#"> ACTUALITE <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            NIVEAU
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">SUPERIEUR</a>
                                <a class="dropdown-item" href="#">SECONDAIRE</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">PRIMAIRE</a>
                            </div>
                        </li>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">ASSISTANCE</a>
          </li>
        </ul>
        
      </div>
    </nav>



    
       <!--carusel-->
         <div class="container">


       <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
           <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
           <div class="carousel-item active">
             <img  id="HH"src="man.jpg" class="d-block w-100" alt="...">
             <div class="carousel-caption d-none d-md-block">
               <h5>First slide label</h5>
               <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
             </div>
           </div>
           <div class="carousel-item">
             <img  id="kk" src="aca.jpg" class="d-block w-100"   >
             <div class="carousel-caption d-none d-md-block">
               <h5>Second slide label</h5>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
             </div>
           </div>
           <div class="carousel-item">
             <img  id="MM" src="adl.jpg" class="d-block w-100" >
             <div class="carousel-caption d-none d-md-block">
               <h5>Third slide label</h5>
               <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
             </div>
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
      </div> 
      <br>
     <br>
     <!-- site touristique--->


     <div class="site">
      <h3> <center> cours de l'ensigement superieur </center></h3>
    </div>
      <!-- articles--->
           <div class="container cta-100 ">
             <div class="container">
               <div class="row blog">
                 <div class="col-md-12">
                   <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                     <ol class="carousel-indicators">
                       <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                       <li data-target="#blogCarousel" data-slide-to="1"></li>
                     </ol>
                     <!-- Carousel items -->
                     <div class="carousel-inner">
                       <div class="carousel-item active">
                         <div class="row">
                           <div class="col-md-4" >
                             <div class="item-box-blog">
                               <div class="item-box-blog-image">
                                 <!--Date-->
                                 <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                 <!--Image-->
                                 <figure> <img alt="" src=""> </figure>
                               </div>
                               <div class="item-box-blog-body">
                                 <!--Heading-->
                                 <div class="item-box-blog-heading">
                                   <a href="#" tabindex="0">
                                     <h5>lettre moderne</h5>
                                   </a>
                                 </div>
                                 <!--Data-->
                                 <div class="item-box-blog-data" style="padding: px 15px;">
                                   <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                 </div>
                                 <!--Text-->
                                 <div class="item-box-blog-text">
                                   <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                 </div>
                                 <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                 <!--Read More Button-->
                               </div>
                             </div>
                           </div>
                           <div class="col-md-4" >
                             <div class="item-box-blog">
                               <div class="item-box-blog-image">
                                 <!--Date-->
                                 <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                 <!--Image-->
                                 <figure> <img alt="" src="baselique.jpg"> </figure>
                               </div>
                               <div class="item-box-blog-body">
                                 <!--Heading-->
                                 <div class="item-box-blog-heading">
                                   <a href="#" tabindex="0">
                                     <h5>physique/chimie</h5>
                                   </a>
                                 </div>
                                 <!--Data-->
                                 <div class="item-box-blog-data" style="padding: px 15px;">
                                   <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                 </div>
                                 <!--Text-->
                                 <div class="item-box-blog-text">
                                   <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                 </div>
                                 <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">informatique</a> </div>
                                 <!--Read More Button-->
                               </div>
                             </div>
                           </div>
                           <div class="col-md-4" >
                             <div class="item-box-blog">
                               <div class="item-box-blog-image">
                                 <!--Date-->
                                 <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                 <!--Image-->
                                 <figure> <img alt="" src="ele.jpg"> </figure>
                               </div>
                               <div class="item-box-blog-body">
                                 <!--Heading-->
                                 <div class="item-box-blog-heading">
                                   <a href="#" tabindex="0">
                                     <h5>finance</h5>
                                   </a>
                                 </div>
                                 <!--Data-->
                                 <div class="item-box-blog-data" style="padding: px 15px;">
                                   <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                 </div>
                                 <!--Text-->
                                 <div class="item-box-blog-text">
                                   <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                 </div>
                                 <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                 <!--Read More Button-->
                               </div>
                             </div>
                           </div>
                         </div>
                         <!--.row-->
                       </div>
                       <!-- deuxieme slide pour site touristique -->
                       <!--.item-->
                       <div class="carousel-item ">
                         <div class="row">
                           <div class="col-md-4" >
                             <div class="item-box-blog">
                               <div class="item-box-blog-image">
                                 <!--Date-->
                                 <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                 <!--Image-->
                                 <figure> <img alt="" src="man2.jpg"> </figure>
                               </div>
                               <div class="item-box-blog-body">
                                 <!--Heading-->
                                 <div class="item-box-blog-heading">
                                   <a href="#" tabindex="0">
                                     <h5>droit</h5>
                                   </a>
                                 </div>
                                 <!--Data-->
                                 <div class="item-box-blog-data" style="padding: px 15px;">
                                   <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                 </div>
                                 <!--Text-->
                                 <div class="item-box-blog-text">
                                   <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                 </div>
                                 <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                 <!--Read More Button-->
                               </div>
                             </div>
                           </div>
                           <div class="col-md-4" >
                             <div class="item-box-blog">
                               <div class="item-box-blog-image">
                                 <!--Date-->
                                 <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                 <!--Image-->
                                 <figure> <img alt="" src="plage2.jpg"> </figure>
                               </div>
                               <div class="item-box-blog-body">
                                 <!--Heading-->
                                 <div class="item-box-blog-heading">
                                   <a href="#" tabindex="0">
                                     <h5>informatique</h5>
                                   </a>
                                 </div>
                                 <!--Data-->
                                 <div class="item-box-blog-data" style="padding: px 15px;">
                                   <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                 </div>
                                 <!--Text-->
                                 <div class="item-box-blog-text">
                                   <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                 </div>
                                 <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                 <!--Read More Button-->
                               </div>
                             </div>
                           </div>
                           <div class="col-md-4" >
                             <div class="item-box-blog">
                               <div class="item-box-blog-image">
                                 <!--Date-->
                                 <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                 <!--Image-->
                                 <figure> <img alt="" src="caimant.jpg"> </figure>
                               </div>
                               <div class="item-box-blog-body">
                                 <!--Heading-->
                                 <div class="item-box-blog-heading">
                                   <a href="#" tabindex="0">
                                     <h5>lettre moderne</h5>
                                   </a>
                                 </div>
                                 <!--Data-->
                                 <div class="item-box-blog-data" style="padding: px 15px;">
                                   <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                 </div>
                                 <!--Text-->
                                 <div class="item-box-blog-text">
                                   <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                 </div>
                                  <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                 <!--Read More Button-->
                               </div>
                             </div>
                           </div>
                         </div>
                         <!--.row-->
                       </div>
                       <!--.item-->
                     </div>
                     <!--.carousel-inner-->
                   </div>
                   <!--.Carousel-->
                 </div>
               </div>
             </div>
           </div>
<!-- site touristique--->
         
            <div class="tou">
                  <h3> <center> cour de l'enseignement secondaire</center></h3>
                  <br><br>
                  <div class="button">

                  <div class="NN">
                   <div class="col-md-12">
                   <a href=" calculatrice/index.html"> modules</a>

                    </div>
                     </div>
                    </div>
           </div>
<!-- articles--->
         

                 <div class="container cta-100 ">
                   <div class="container">
                     <div class="row blog">
                       <div class="col-md-12">
                         <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                           <ol class="carousel-indicators">
                             <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                             <li data-target="#blogCarousel" data-slide-to="1"></li>
                           </ol>
                           <!-- Carousel items -->
                           <div class="carousel-inner">
                             <div class="carousel-item active">
                               <div class="row">
                                 <div class="col-md-4" >
                                   <div class="item-box-blog">
                                     <div class="item-box-blog-image">
                                       <!--Date-->
                                       <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                       <!--Image-->
                                       <figure> <img alt="" src="cac.jpg"> </figure>
                                     </div>
                                     <div class="item-box-blog-body">
                                       <!--Heading-->
                                       <div class="item-box-blog-heading">
                                         <a href="#" tabindex="0">
                                           <h5>histoire geographie</h5>
                                         </a>
                                       </div>
                                       <!--Data-->
                                       <div class="item-box-blog-data" style="padding: px 15px;">
                                         <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                       </div>
                                       <!--Text-->
                                       <div class="item-box-blog-text">
                                         <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                       </div>
                                       <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                       <!--Read More Button-->
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-md-4" >
                                   <div class="item-box-blog">
                                     <div class="item-box-blog-image">
                                       <!--Date-->
                                       <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                       <!--Image-->
                                       <figure> <img alt="" src="zaholi.jpg"> </figure>
                                     </div>
                                     <div class="item-box-blog-body">
                                       <!--Heading-->
                                       <div class="item-box-blog-heading">
                                         <a href="#" tabindex="0">
                                           <h5>svt</h5>
                                         </a>
                                       </div>
                                       <!--Data-->
                                       <div class="item-box-blog-data" style="padding: px 15px;">
                                         <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                       </div>
                                       <!--Text-->
                                       <div class="item-box-blog-text">
                                         <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                       </div>
                                       <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                       <!--Read More Button-->
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-md-4" >
                                   <div class="item-box-blog">
                                     <div class="item-box-blog-image">
                                       <!--Date-->
                                       <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                       <!--Image-->
                                       <figure> <img alt="" src="GENE.jpg"> </figure>
                                     </div>
                                     <div class="item-box-blog-body">
                                       <!--Heading-->
                                       <div class="item-box-blog-heading">
                                         <a href="#" tabindex="0">
                                           <h5>français</h5>
                                         </a>
                                       </div>
                                       <!--Data-->
                                       <div class="item-box-blog-data" style="padding: px 15px;">
                                         <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                       </div>
                                       <!--Text-->
                                       <div class="item-box-blog-text">
                                         <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                       </div>
                                       <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                       <!--Read More Button-->
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <!--.row-->
                             </div>
                             <!--.item-->
                             <div class="carousel-item ">
                               <div class="row">
                                 <div class="col-md-4" >
                                   <div class="item-box-blog">
                                     <div class="item-box-blog-image">
                                       <!--Date-->
                                       <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                       <!--Image-->
                                       <figure> <img alt="" src="danse.jpg"> </figure>
                                     </div>
                                     <div class="item-box-blog-body">
                                       <!--Heading-->
                                       <div class="item-box-blog-heading">
                                         <a href="#" tabindex="0">
                                           <h5></h5>
                                         </a>
                                       </div>
                                       <!--Data-->
                                       <div class="item-box-blog-data" style="padding: px 15px;">
                                         <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                       </div>
                                       <!--Text-->
                                       <div class="item-box-blog-text">
                                         <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                       </div>
                                       <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                       <!--Read More Button-->
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-md-4" >
                                   <div class="item-box-blog">
                                     <div class="item-box-blog-image">
                                       <!--Date-->
                                       <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                       <!--Image-->
                                       <figure> <img alt="" src="korh.jpg"> </figure>
                                     </div>
                                     <div class="item-box-blog-body">
                                       <!--Heading-->
                                       <div class="item-box-blog-heading">
                                         <a href="#" tabindex="0">
                                           <h5>science physique</h5>
                                         </a>
                                       </div>
                                       <!--Data-->
                                       <div class="item-box-blog-data" style="padding: px 15px;">
                                         <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                       </div>
                                       <!--Text-->
                                       <div class="item-box-blog-text">
                                         <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                       </div>
                                       <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                       <!--Read More Button-->
                                     </div>
                                   </div>
                                 </div>
                                 <div class="col-md-4" >
                                   <div class="item-box-blog">
                                     <div class="item-box-blog-image">
                                       <!--Date-->
                                       <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                       <!--Image-->
                                       <figure> <img alt="" src="Sofitel.jpg"> </figure>
                                     </div>
                                     <div class="item-box-blog-body">
                                       <!--Heading-->
                                       <div class="item-box-blog-heading">
                                         <a href="#" tabindex="0">
                                           <h5>français</h5>
                                         </a>
                                       </div>
                                       <!--Data-->
                                       <div class="item-box-blog-data" style="padding: px 15px;">
                                         <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                       </div>
                                       <!--Text-->
                                       <div class="item-box-blog-text">
                                         <p>Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, adipiscing. Lorem ipsum dolor sit amet, consectetuer adipiscing. Lorem ipsum dolor.</p>
                                       </div>
                                        <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                       <!--Read More Button-->
                                     </div>
                                   </div>
                                 </div>
                               </div>
                               <!--.row-->
                             </div>
                             <!--.item-->
                           </div>
                           <!--.carousel-inner-->
                         </div>
                         <!--.Carousel-->
                       </div>
                     </div>
                   </div>
                 </div>




        <script>
        $(function(){
                    $("#menu-toggle").click(function(e) {
                        e.preventDefault();
                        $("#wrapper").toggleClass("toggled");
                    });

                    $(window).resize(function(e) {
                      if($(window).width()<=768){
                        $("#wrapper").removeClass("toggled");
                      }else{
                        $("#wrapper").addClass("toggled");
                      }
                    });
                  });

        </script>














      <footer>
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="footer">
    	<div class="footer1">
    <div class="container-fluid">

    	<div class="container ">
    	<div class="row">
    		<div class="col-sm-4">
    		  <h2>About Us</h2><p>
                               <div class="myframegmap">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448183.73912804417!2d76.81306640115254!3d28.646677246352574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1513154329228" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div></p><br>
    		</div>
    		<div class="col-sm-4">
    			<h2>Home</h2>
    			<p>
    				<i class="fa fa-home"></i>    <a href="#"> Home</a><br>
    				<i class="fa fa-user-o"></i>    <a href="#"> About Us</a><br>
    				<i class="fa fa-map-marker"></i>    <a href="#"> Contact Us</a><br>
    				<i class="fa fa-briefcase"></i>    <a href="#"> Services</a><br>
    				<i class="fa fa-question-circle"></i>    <a href="#"> Term & Conditions</a><br><br>


    			</p>


    		</div>
    		<div class="col-sm-4 ">
    			<h2>Contact Us</h2>
    			<p >

    				<i class="fa fa-phone"></i>    <a href="tel:0123456789"> +0123456789</a><br>
    				<i class="fa fa-envelope"></i>    <a href="mailto:abc@abc.com"> abc@abc.com</a><br>
    				<i class="fa fa-map-marker"></i>     A-101 Delhi, India
    			</p>

    			<br>
    		</div>
    	</div>
    		<div class="clear30"></div>
    </div>
    </div></div>


    <div class="footer2">
    	<div class="container-fluid">
    	<div class="container">
    		<div class="row">
    			<div class="clear30"></div>
    			<div class="col-sm-12 text-center"><p><strong>copyright © 2013-2018 All right reserved.</strong></p></div>
    			<div class="clear30"></div>
    		</div>

    	</div>

    </div>
    </div>
    </div>

      </footer>

     
      <script src="https://kit.fontawesome.com/fd57cb25db.js" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
