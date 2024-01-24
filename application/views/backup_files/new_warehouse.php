
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Elements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/');?>">Home</a></li>
                <li class="breadcrumb-item">order</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <h4 class="card-title">Add Warehouse form</h4>
                  
                  <form class="forms-sample" action="<?php echo base_url();?>addwarehouse/insert" method="post">
                    <div class="form-group mb-2">
                                <label for="exampleInputMobile">SKU</label>
                                
                                    <select name="sku" class="form-control" id="sku">
                                        <option>Choose SKU</option>
                                        <?php 
                                        foreach($rec as $row){
                                            ?>

                                        <option value="<?php echo $row->id;?>"><?php echo "SCP-".$row->id;?></option>

                                        <?php
                                    }
                                    ?>

                                    </select>
                                
                                <span class="text-danger"><?php echo form_error('sku');?></span>
                            </div>
                    <div class="form-group mb-2">
                      <label for="exampleInputUsername1">Warehouse Name</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" name="wname" placeholder="Warehouse Name">
                    </div>
                    <div class="form-group mb-2">
                      <label for="exampleInputEmail1">Warehouse address</label>
                      <textarea  class="form-control" name="wadd" id="exampleFormControlTextarea1" rows="5" cols="51"></textarea>
                    </div>
                    <div class="form-group mb-2">
                      <label for="exampleInputPassword1">Warehouse Phone</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="wphone" placeholder="Warehouse Phone">
                    </div>
                    <div class="form-group mb-2">
                      <label for="exampleInputConfirmPassword1">Warehouse Email</label>
                      <input type="email" class="form-control" id="exampleInputConfirmPassword1" name="wemail" placeholder="Warehouse Email">
                    </div>
                    <div class="form-group mb-2">
                      <label for="exampleInputConfirmPassword1">Warehouse Fax</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="wfax" placeholder="Warehouse Fax">
                    </div>
                    <div class="form-group mb-2">
                      <label for="exampleInputConfirmPassword1">Warehouse Agent</label>
                      <input type="text" class="form-control" id="exampleInputConfirmPassword1" name="wagent" placeholder="Warehouse Agent">
                    </div>
                    <div class="form-group mb-2">
                      <label for="exampleInputStatus">Status</label>
                      <select class="form-control" name="status">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                      </select>
                    </div>
                    <div class="form-group mb-2">
                    <button type="submit" name="submit" class="btn btn-primary me-2">Add Warehouse</button>
                    <button class="btn btn-light">Cancel</button>
                  </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- show listed parts within the table-->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Listed Part Details</h5>

                        <!-- Default Accordion -->
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Details
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Data</h5>

                                                <!-- Default Table -->
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>listing</th>
                                                            <th>Year</th>
                                                            <th>Make</th>
                                                            <th>Model</th>
                                                            <th>Part Name</th>
                                                            <th>Trim</th>
                                                            <th>Photo</th>
                                                            <th>SKU</th>
                                                            <th>Selling Price</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr id="showlistedpart"></tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    </main>
    

<script>
$(document).ready(function() {
    $("#sku").on("change", function() {
        let id = $('#sku').val()
        if (id != "") {

            $.ajax({
                url: "<?php echo base_url('warehouse/orderDetails');?>",
                type: "post",
                data: {
                    id: id
                },
                success: function(data) {

                    $("#showlistedpart").html(data)
                  
                  

                },
            })
        }

    })
})
</script>
