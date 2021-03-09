        <div class="col s12">
          <div class="container">
  <!--Blog Card-->
  <div id="card-panel-type" class="section">
    <h4 class="header">Blog Card</h4>
    <div class="row mt-2">
        <?php foreach ($tabFilm as $film) {
            $nomRealisateur = null;   
            // on selection la ligne du nom de l'acteur
            $realisateur = $artisteModel->where('id', $film['id_realisateur'])
            ->first();
            if (isset($realisateur['id'])) { $nomRealisateur = $realisateur['nom']." ".$realisateur['prenom'];}
            ?>
            <div class="col s12 m6 l4 card-width">
                <div class="card-panel border-radius-6 mt-10 card-animation-1">
                    <!-- image film -->
                    <img class="responsive-img border-radius-8 z-depth-4 image-n-margin" src="../../../app-assets/images/cards/news-fashion.jpg" alt="images" />
                    <!-- nom film -->
                    <h6><a href="#" class="mt-5"><?php echo $film['titre'] ?></a></h6>
                    <!-- resume -->
                    <p><?php echo $film['resume'] ?> </p>
                    <div class="row mt-4">
                        <div class="col s2">
                            <!-- image realisateur -->
                          <a href="#">  <img src="../../../app-assets/images/user/9.jpg" width="40" alt="fashion" class="circle responsive-img mr-3" /> </a>
                        </div>
                        <!--  nom realisateur -->
                        <a href="#">    <div class="col s3 p-0 mt-1"><span class="pt-2"><?php echo $nomRealisateur ?> </span></div>                                             </a>
                        <div class="col s7 mt-1 right-align">
                            <!-- like -->
                            <a href="#">  <span class="material-icons">favorite_border</span>                                                             </a>
                            <span class="ml-3 vertical-align-top">340</span>
                            <!-- comentaire -->
                            <a href="#">  <span class="material-icons ml-10">chat_bubble_outline</span>                                                   </a>
                            <span class="ml-3 vertical-align-top">80</span>
                        </div>
                    </div>
                </div>
            </div>

        <?php   }   ?>
    </div>
  </div>

  <div class="divider mt-8"></div>

  ." ". $realisateur['prenom']