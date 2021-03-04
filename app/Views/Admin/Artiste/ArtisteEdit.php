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
                        <div class="invoice-create-btn">
                            <a href="app-invoice-add.html" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                                <i class="material-icons">add</i>
                                <span class="hide-on-small-only">Create artiste</span>
                            </a>
                        </div>
                        <?php d($soloArtiste); ?>  
                        <div class="responsive-table">
                            <div id="validation" class="card card card-default scrollspy">
                                <div class="card-content">
                                    <h4 class="card-title">Form Create Artist</h4>
                                    
                                        <form action="<?php echo base_url('admin/artiste/edit/'.$soloArtiste['id']);?>" methode="POST">
                                    
                                        <?php
                                        /* je veriffi si j'ai un id */ 
                                        if (isset($soloArtiste['id'])) {
                                            ?>
                                            <!-- je cache mon champ pour dir que je suis dans le mode modifier -->
                                            <input type="hidden" name="save" value='update'>
                                        <?php
                                        } else {
                                        ?>
                                            <input type="hidden" name="save" value='create'>
                                        <?php
                                        }
                                        ?>
                                        <!-- id -->
                                        
                                        <!-- nom -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input type="text" class="validate" name="nameForm" value="<?php echo $soloArtiste['nom']; ?>">
                                                <label for="name4">Name</label>
                                            </div>
                                        </div>
                                        <!-- prenom -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input type="text" class="validate" name="prenomForm" value="<?php echo $soloArtiste['prenom']; ?>">
                                                <label for="prenom4">prenom</label>
                                            </div>
                                        </div>
                                        <!-- annee_naissance -->
                                        <div class="row">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">date_range</i>
                                                    <input type="text" class="validate" name="annee_naissance" value="<?php echo $soloArtiste['annee_naissance']; ?>">
                                                    <label for="annee_naissance5">annee_naissance</label>
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