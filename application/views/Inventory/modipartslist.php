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
                    Parts.
                  </p>
                  <form class="forms-sample" action="<?php echo base_url('updatepart/').$row->id;?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Part Name</label>
                      <input type="text" class="form-control" name="pname" id="exampleInputUsername1" value="<?php echo $row->p_name; ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Part Quantity</label>
                      <input type="number" class="form-control" name="pqty" id="exampleInputEmail1" value="<?php echo $row->p_qty;?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Part Price</label>
                      <input type="text" class="form-control" name="price" id="exampleInputEmail1" value="<?php echo $row->price;?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Part Trim</label>
                      <input type="text" class="form-control" name="ptrim" id="exampleInputPassword1" value="<?php echo $row->p_trim;?>">
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