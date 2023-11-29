<?php
    include("topbar.php");
    include("sidebar.php");
?>
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Warehouse form</h4>
                  <p class="card-description">
                    Warehouse form layout
                  </p>
                  <form class="forms-sample" action="<?php echo base_url('update/').$row->id;?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Warehouse Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="wname" value="<?=  $row->w_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Warehouse address</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="wadd" value="<?=  $row->w_add;?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Warehouse Phone</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="wphone" value="<?=  $row->w_phone;?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Warehouse Email</label>
                      <input type="email" class="form-control" id="exampleInputConfirmPassword1" name="wemail" value="<?=  $row->w_email;?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Warehouse Fax</label>
                      <input type="number" class="form-control" id="exampleInputConfirmPassword1" name="wfax" value="<?=  $row->w_fax;?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Warehouse Agent</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="wagent" value="<?=  $row->w_agent;?>">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Update Warehouse</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


<?php
    include("footer.php");
?>