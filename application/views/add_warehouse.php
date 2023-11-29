<?php
include('topbar.php');
include('sidebar.php');
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
                  <form class="forms-sample" action="<?php echo base_url();?>addwarehouse/insert" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Warehouse Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="wname" placeholder="Warehouse Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Warehouse address</label>
                      <textarea  name="wadd" id="exampleFormControlTextarea1" rows="5" cols="51"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Warehouse Phone</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="wphone" placeholder="Warehouse Phone">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Warehouse Email</label>
                      <input type="email" class="form-control" id="exampleInputConfirmPassword1" name="wemail" placeholder="Warehouse Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Warehouse Fax</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="wfax" placeholder="Warehouse Fax">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Warehouse Agent</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="wagent" placeholder="Warehouse Agent">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary me-2">Add Warehouse</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


<?php
include('footer.php');
?>