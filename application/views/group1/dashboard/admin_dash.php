
    <div style="display: none" id="<?php echo $dispButton ?>" class="clickBait"></div>
    
    <div class="panel panel-danger">
        <div class="panel-heading">
            Administration
        </div>
        <div class="panel-body">
            <div class="row">
                <!-- Duties Panel START -->
                <div style="padding:0;" class="panel panel-default col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel-heading">
                        Misc Duties
                    </div>
                    <div class="panel-body">
                        <button class="btn btn-primary">Add Duty</button>
                        
                        <form action="." method="post" style="display: inline-block">
                            <input type="hidden" name="selection" value="browse_duties">
                            <button type="submit" class="btn btn-info">Browse Duties</button>
                        </form>

                        <br><br>
                        <!-- search for duties -->
                        <form action="." method="post">
                            <label>Find a Duty:</label>
                            <div class="input-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <input placeholder="Enter duty ID" class="form-control" type="number" name="dutyID">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Duties Panel END -->
                <!-- Users Panel START -->
                <div style="padding:0;" class="panel panel-default col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel-heading">
                        Users
                    </div>
                    <div class="panel-body">
                        
                        <button class="btn btn-primary" name="selection" data-toggle="modal" data-target=".bs-example-modal-lg" id="add_user">Add User</button>        
                        <!-- create 2 modals for these buttons as well -->
                        <form action="." method="post" style="display: inline-block">
                            <input type="hidden" name="selection" value="browse_users">
                            <button type="submit" class="btn btn-info">Browse Users</button>
                        </form>
                        <br><br>
                        <!-- search for users -->
                        <form action="." method="post">
                            <label>Find a user:</label>
                            <div class="input-group col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <input placeholder="Enter user ID" class="form-control" type="number" name="userID">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default">Search</button>
                                </span>
                            </div>
                        </form>
                            <!-- removed table && kept buttons -->
                    </div>
                </div>
                <!-- Users Panel END -->
            </div>

            
        </div>
    </div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div style="overflow: auto;" class="modal-content">
        <?php include('application/views/group1/registration/registration_main.php'); ?>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    if($('.clickBait').attr('id') == 1){
        // click add user button
        $('#add_user').trigger('click');
    }
});
</script>