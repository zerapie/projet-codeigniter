<div id="main">
        <div class="row">
            <div class="content-wrapper-before blue-grey lighten-5"></div>
            <div class="col s12">
                <div class="container">
                    <!-- invoice list -->
                    <section class="invoice-list-wrapper section">
                        <!-- create invoice button-->
                        <!-- Options and filter dropdown button-->
                      
                        <!-- create invoice button-->
                        <div style="bottom: 50px, right: 19px;" class="invoice-create-btn">
                            <a href="<?php echo base_url('Admin/Role/edit');?>" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                                <i class="material-icons">add</i>
                                <span class="hide-on-small-only">Create Role</span>
                            </a>
                        </div>
                        <div class="responsive-table">
                            <div id="validation" class="card card card-default scrollspy">
                                <div class="card-content">
                                    <h4 class="card-title">Form Create Role</h4>

                                    <form action="<?php echo base_url('admin/role/edit/'.$role['id_film']."/".$role['id_acteur']);?>" methode="POST">
                                        
                                        <?php
                                        /* je veriffi si j'ai un id */ 
                                        if (!empty($role['id_film']) && !empty($role['id_acteur'])) {
                                            ?>
                                            <!-- je cache mon champ pour dir que je suis dans le mode modifier / type="hidden" -->
                                            <input type="hidden" name="save" value='update'>
                                        <?php
                                        } else {
                                        ?>
                                            <input type="hidden" name="save" value='create'>
                                        <?php
                                        }
                                        ?>

                                        <!-- id_film -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <div class="input-field">
                                                    <select class="select2 browser-default" name="selectFilm">
                                                        <?php foreach ($tabListeFilm as $key => $film) {   
                                                            if ($role['id_film']==$film['id']) {    ?>
                                                                <option value="<?php echo $film['id'] ;?>" selected> <?php echo $film['id']." - ".$film['titre'] ;?> </option>
                                                            <?php   } else { ?>
                                                                <option value="<?php echo $film['id'] ;?>"         > <?php echo $film['id']." - ".$film['titre'] ;?> </option>
                                                            <?php   }   ?>
                                                        <?php } ?>
                                                    </select>
                                                </div>                                            
                                            </div>
                                        </div>
                                        <!-- id_acteur -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <div class="input-field">
                                                    <select class="select2 browser-default" name="selectActeur">
                                                        <?php foreach ($tabListeArtiste as $key => $artiste) { 
                                                            /* pour avoir le champ selectionné */
                                                            if ($role['id_acteur']==$artiste['id']) {    ?>
                                                                <option value="<?php echo $artiste['id'] ;?>" selected> <?php echo $artiste['id']." - ".$artiste['nom']." ". $artiste['prenom'] ;?> </option>
                                                        <?php } else { ?>
                                                                <option value="<?php echo $artiste['id'] ;?>"         > <?php echo $artiste['id']." - ".$artiste['nom']." ". $artiste['prenom'] ;?> </option>
                                                            <?php }   } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- nom_role -->
                                        <div class="row">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" class="validate" name="nomRole" value="<?php echo $role['nom_role'];?>">
                                                    <label for="nomRole"> nom-role </label>
                                                </div>
                                            </div>
                                            <!-- valider -->
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                                        <i class="material-icons right">send</i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>              
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>               