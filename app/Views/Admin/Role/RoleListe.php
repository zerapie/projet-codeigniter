<?php 
 
?><div id="main">
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
                    <a href="<?php echo base_url('Admin/Role/edit');?>" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                        <i class="material-icons">add</i>
                        <span class="hide-on-small-only">Create Role</span>
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
                                <!-- nom -->
                                <th>id_film</th>
                                <!--    prenom   -->
                                <th>id_acteur</th>
                                <!-- annee naissance     -->
                                <th>nom_role</th>
                                <!-- action -->
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                foreach ($tabRoles as $key => $role) { 
                                    // on selection la ligne a l'id du film
                                    $film = $filmModel->where('id', $role['id_film'])
                                                      ->first();
                                    // on selection la ligne du nom de l'acteur
                                    $artiste = $artisteModel->where('id', $role['id_acteur'])
                                                            ->first();
                                    // recherche en database
                            ?>
                                <tr>
                                    <!-- data table responsive icons -->
                                    <td>                                            </td>
                                    <!-- data table checkbox -->
                                    <td>                                            </td>
                                    <!-- nom -->
                                    <td>    <?php if (isset($film['id'])) { echo $film['id']." - ".$film['titre'] ;} ?>                           </td>
                                    <!-- prenom -->
                                    <td>    <?php if (isset($artiste['nom']))   {echo $artiste['id']." - ".$artiste['nom']." ". $artiste['prenom'] ;} ?>    </td>
                                    <!-- annee naissance -->
                                    <td>    <?php echo $role['nom_role'] ?>  </td>
                                    <!-- ACTION -->
                                    <td> 
                                        <div class="invoice-action">
                                            <a href="<?php echo base_url('admin/role/edit/'.$role['id_film'].'/'.$role['id_acteur']); ?>"   class="invoice-action-edit">        <i class="material-icons">edit</i>           </a>
                                            <a href="app-invoice-view.html" class="invoice-action-view mr-4">   <i class="material-icons">delete_forever</i> </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php   }   
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </div>
</div>
</div>
</div>               