<?php
include('topbar.php');
include('sidebar.php');
?>


<!-- partial -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Part form</h4>
                  <p class="card-description">
                    Parts
                  </p>
                  
                  <form class="forms-sample" action="<?php echo base_url();?>addpart" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Part Name</label>
                      <input type="text" class="form-control" name="pname" id="exampleInputUsername1" placeholder="Part Name">
                      <span class="pt-1 text-danger"><?php echo form_error('pname');?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Part Quantity</label>
                      <input type="number" class="form-control" name="pqty" id="exampleInputEmail1" placeholder="Part Quantity">
                      <span class="pt-1 text-danger"><?php echo form_error('pqty');?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Part Price</label>
                      <input type="text" class="form-control" name="price" id="exampleInputEmail1" placeholder="Price">
                      <span class="pt-1 text-danger"><?php echo form_error('price');?></span>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Part Trim</label>
                      <input type="text" class="form-control" name="ptrim" id="exampleInputPassword1" placeholder="Part Trim">
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>


<?php
include('footer.php');
?>