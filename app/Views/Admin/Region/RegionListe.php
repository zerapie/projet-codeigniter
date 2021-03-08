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
                            <a href="<?php echo base_url('Admin/Region/edit');?>" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
                                <i class="material-icons">add</i>
                                <span class="hide-on-small-only">Create Region</span>
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
                                        <!-- NOM -->
                                        <th>Nom</th>
                                        <!-- ACTION -->
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td></td>
                                        <!-- data table responsive icons -->
                                        <td></td>
                                        <!-- data table checkbox -->
                                        <td></td>
                                        <!-- NOM -->
                                        <td></td>
                                        <!-- ACTION -->
                                        <td>
                                            <div class="invoice-action">
                                                <a href="app-invoice-view.html" class="invoice-action-view mr-4"><i class="material-icons">remove_red_eye</i></a>
                                                <a href="app-invoice-edit.html" class="invoice-action-edit">     <i class="material-icons">edit</i>          </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>               