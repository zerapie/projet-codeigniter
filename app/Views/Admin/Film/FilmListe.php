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
                            <a href="<?php echo base_url('Admin/Film/edit');?>" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                                <i class="material-icons">add</i>
                                <span class="hide-on-small-only">Create Film</span>
                            </a>
                        </div>
                 
                        <div class="responsive-table">
                            <table class="table invoice-data-table white border-radius-4 pt-1">
                                <thead>
                                    <tr>
                                        <!-- data table responsive icons -->
                                        <th></th>
                                        <!-- data table checkbox -->
                                        <th></th>
                                        <!-- ID -->
                                        <th>id</th>
                                        <!-- TITRE -->
                                        <th>titre</th>
                                        <!-- ANNEE -->
                                        <th>annee</th>
                                        <!-- ID REALISATEUR -->
                                        <th>id_realisateur</th>
                                        <!-- GENRE -->
                                        <th>Genre</th>
                                        <!-- RESUME -->
                                        <th>resume</th>
                                        <!-- CODE PAYS -->
                                        <!-- ACTION -->
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($tabFilm as $key => $film) {   ?>
                                        <tr>
                                            <!-- data table responsive icons -->
                                            <td></td>
                                            <!-- data table checkbox -->
                                            <td></td>
                                            <!-- ID -->
                                            <td>    <?php echo $film['id'] ?>               </td>
                                            <!-- TITRE -->
                                            <td>    <?php echo $film['titre'] ?>            </td>
                                            <!-- ANNEE -->
                                            <td>    <?php echo $film['annee'] ?>            </td>
                                            <!-- ID REALISATEUR -->
                                            <td>    <?php echo $film['id_realisateur'] ?>   </td>
                                            <!-- GENRE -->
                                            <td>    <?php echo $film['genre'] ?>            </td>
                                            <!-- RESUME -->
                                            <td>    <?php echo $film['resume'] ?>           </td>
                                            <!-- ACTION -->
                                            <td>
                                                <div class="invoice-action">
                                                    <a href="<?php echo base_url('admin/artiste/edit/'.$film['id']); ?>" class="invoice-action-edit">     <i class="material-icons">edit</i>          </a>
                                                    <a href="<?php echo base_url('admin/artiste/delete/'.$film['id']); ?>" class="invoice-action-view mr-4"><i class="material-icons">delete_forever</i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }   ?>

                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>               