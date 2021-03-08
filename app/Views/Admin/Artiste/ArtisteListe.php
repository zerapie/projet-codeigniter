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
                                <span class="hide-on-small-only">Create User</span>
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
                                        <th>
                                            <span>ID#</span>
                                        </th>
                                        <!-- nom -->
                                        <th>Nom</th>
                                        <!--    prenom   -->
                                        <th>Prenom</th>
                                        <!-- annee naissance     -->
                                        <th>Annee_Naissance</th>
                                        <!--    IMAGE     -->
                                        <th>Image</th>
                                        <!-- action -->
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                        foreach ($tabArtistes as $key => $artiste) {    ?>
                                        <tr>
                                            <!-- data table responsive icons -->
                                            <td>                                            </td>
                                            <!-- data table checkbox -->
                                            <td>                                            </td>
                                            <!-- ID -->
                                            <td> <?php echo $artiste['id'] ?>               </td>
                                            <!-- nom -->
                                            <td> <?php echo $artiste['nom'] ?>              </td>
                                            <!-- prenom -->
                                            <td> <?php echo $artiste['prenom'] ?>           </td>
                                            <!-- annee naissance -->
                                            <td> <?php echo $artiste['annee_naissance'] ?>  </td>
                                            <!--    IMAGE     -->
                                            <th>Image</th>
                                            <!-- ACTION -->
                                            <td> 
                                                <div class="invoice-action">
                                                    <a href="<?php echo base_url('admin/artiste/edit/'.$artiste['id']); ?>"   class="invoice-action-edit">        <i class="material-icons">edit</i>           </a>
                                                    <a href="<?php echo base_url('admin/artiste/delete/'.$artiste['id']); ?>" class="invoice-action-view mr-4">   <i class="material-icons">delete_forever</i> </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }   ?>
                                </tbody>
                                    <?php echo $pager->links() ?>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>               