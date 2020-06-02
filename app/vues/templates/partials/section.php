<?php
  /*
    ./app/vues/templates/partials/section.php
  */
?>
<section class="ftco-section ftco-degree-bg">
   <div class="container">
     <div class="row">
       <div class="col-lg-8 ftco-animate">
         <?php echo $content; ?>
       </div>

       <!-- .col-md-8 -->
       <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
         <div class="sidebar-box">
           <form action="#" class="search-form">
             <div class="form-group">
               <span class="icon icon-search"></span>
               <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
             </div>
           </form>
         </div>
         <?php
          include_once '../app/controleurs/categoriesControleur.php';
          \Controleurs\Categories\indexAction($connexion);
         ?>

         <?php
           include_once '../app/controleurs/postsControleur.php';
           \Controleurs\Posts\lastestIndex($connexion);
         ?>

         <?php
           include_once '../app/controleurs/tagsControleur.php';
           \Controleurs\Tags\indexAction($connexion);
         ?>

       </div>

     </div>
   </div>
 </section>
