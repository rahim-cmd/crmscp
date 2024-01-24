<style type="text/css">
table {

    font-family: arial;
    font-size: .8rem;
}
</style>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Place Order With Warehouses</h1>
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

                            <h4 class="card-title">Sensitive Form.</h4>

                            <form class="forms-sample" action="<?php echo base_url('warehouse/insertnewhouse');?>"
                                method="post">
                                <div class="form-group mb-2">
                                    <label for="exampleInputMobile">Order ID</label>
                                    
                                        <?php
                                   foreach($rec as $row)
                                   {
                                   ?>
                                        <input type="text" name="oid" id="oid" class="form-control" value="<?=$row->cebayid?>" readonly>
                                    <?php
                                   }
                                   ?>
                                    </select>

                                    <span id="check" class="text-danger"><?php echo form_error('oid');?></span>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="warehouse">Select Warehouse</label>

                                    <select name="warehouse" class="form-control" id="warehouse">
                                        <option value="">Choose Warehouse</option>
                                        <option value="7">Mobeen Bhai</option>
                                        <?php 
                                        foreach($whouse->result() as $row){
                                            ?>

                                        <option value="<?php echo $row->id;?>"><?php echo $row->w_name;?></option>

                                        <?php
                                    }
                                    ?>

                                    </select>

                                    <span class="text-success" id="inventory"></span>
                                    <span class="text-danger"><?php echo form_error('warehouse');?></span>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="agentName">Agent Name</label>
                                    <input type="text" name="agent" id="agent" class="form-control"
                                        placeholder="agent">
                                </div>
                                <span class="text-danger"><?php echo form_error('agent');?></span>

                                <div class="form-group mb-2">
                                    <label for="purchasePrice">Purchase Price</label>
                                    <input type="text" name="purchaseprice" id="purchaseprice" class="form-control"
                                        placeholder="purchase price">
                                </div>
                                <span class="text-danger"><?php echo form_error('purchaseprice');?></span>
                                <div class="form-group mb-2">
                                    <label for="labelPrice">Label Price</label>
                                    <input type="text" name="labelprice" id="labelprice" class="form-control"
                                        placeholder="label price">
                                </div>
                                <span class="text-danger"><?php echo form_error('labelprice');?></span>
                                <div class="form-group mb-2">
                                    <label for="userfile">Upload Label Image</label>
                                    <input type="file" name="userfile" id="userfile" class="form-control"
                                        >
                                </div>
                                <span class="text-danger"><?php echo form_error('userfile');?></span>
                                <div class="form-group mb-2">
                                    <label for="trackinInfo">Tracking Info</label>
                                    <input type="text" name="tracking" id="tracking" class="form-control"
                                        placeholder="Tracking Details">
                                </div>
                                <span class="text-danger"><?php echo form_error('tracking');?></span>
                                 <div class="form-group mb-2">
                                    <label for="remarks">Remarks</label>
                                    <textarea name="remarks" id="remarks" rows="3" cols="50" class="form-control"
                                        placeholder="Remarks if any"></textarea>
                                </div>
                                <span class="text-danger"><?php echo form_error('remarks');?></span>
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Flags</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                        <?php
                                    foreach($flag as $chk)
                                    {
                                        ?>
                                        
                                            <input class="form-check-input" type="checkbox" id="under_process"
                                                name="under_process" value='under_process'
                                                <?php if($chk->under_process!= NULL){?> checked <?php }?>>
                                            <label class="form-check-label" for="gridCheck1">
                                                Under Process
                                            </label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="part_found"
                                                name="part_found" value='part_found'
                                                <?php if($chk->part_found!= NULL){?> checked <?php }?>>
                                            <label class="form-check-label" for="gridCheck2">
                                                Part Found
                                            </label>
                                        </div>
                                      
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="followup_1"
                                                name="followup_1" value='followup_1'
                                                <?php if($chk->followup_1!= NULL){?> checked <?php }?>>
                                            <label class="form-check-label" for="gridCheck2">
                                                Followup-1
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="followup_2"
                                                name="followup_2" value='followup_2'
                                                <?php if($chk->followup_2!= NULL){?> checked <?php }?>>
                                            <label class="form-check-label" for="gridCheck2">
                                                Followup-2
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="completed"
                                                name="completed" value='completed'
                                                <?php if($chk->completed!= NULL){?> checked <?php }?>>
                                            <label class="form-check-label" for="gridCheck2">
                                                Completed
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="return_exchange"
                                                name="return_exchange" value='return_exchange' 
                                                <?php if($chk->return_exchange!= NULL){?> checked <?php }?>>
                                            <label class="form-check-label" for="gridCheck2">
                                                Return_Exchange
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="return_refund"
                                                name="return_refund" value='return_refund'
                                                <?php if($chk->return_refund!= NULL){?> checked <?php }?>>
                                            <label class="form-check-label" for="gridCheck2">
                                                Return_Refund
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="cancelled"
                                                name="cancelled" value='cancelled'
                                                <?php if($chk->cancelled!= NULL){?> checked <?php }?>>
                                            <label class="form-check-label" for="gridCheck2">
                                                Cancelled
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <?php
                                    }

                                ?>
                                <button type="submit" name="submit"
                                    onclick="return confirm('Are you ready! It sends email too to warehouse');"
                                    class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Add Details
                                </button>
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
                        <h5 class="card-title">Order Details</h5>
                        <!-- Default Table -->
                        <table class="table text-sm">
                            <thead>
                                <tr>
                                    <th>Order Date</th>
                                    <th>Customer Name</th>
                                    <th>Customer Address</th>
                                    <th>Order Id</th>
                                    <th>SKUID</th>
                                    <th>Listing</th>
                                    <th>Year</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Part Name</th>
                                    <th>Trim</th>
                                    <th>Photo</th>
                                    <th>Min Buy Price</th>
                                    <th>Max Buy Price</th>
                                    <th>Ship by Date</th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr id="showorderdetails"></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
</main>



<script>
$(document).ready(function() {


    $("#oid").on("click", function() {
        let id = $('#oid').val()
        if (id != "") {
            $.ajax({

                url: "<?php echo base_url('warehouse/checkwareinfo')?>",
                type: "post",
                data: {
                    id: id
                },
                success: function($data) {
                    $('#check').html($data)
                    // alert(data)
                }

            });
            $.ajax({
                url: "<?php echo base_url('warehouse/orderdetails');?>",
                type: "post",
                data: {
                    id: id
                },
                success: function(data) {

                    $("#showorderdetails").html(data)
                    // alert(data)



                },
            })
        }

    })
})
</script>
<script>
    $(document).ready(function(){

        $('#warehouse').on('change',function(){

            let chkMobeen = $('#warehouse').val()
            if(chkMobeen=="7"){
                let oid=$('#oid').val()
                if(oid !="")
                {
                    
                    $.ajax({
                        url:"<?php echo base_url('warehouse/checkInventory');?>",
                        type:"post",
                        data:{oid : oid},

                        success:function (res){

                            $('#inventory').html(res)

                                     console.log(res)      

                            
                        }

                    })
                }
            }
            else
            {
                //for displaying blank if not our warehouse
                document.querySelector('#inventory').innerHTML="";

            }
        })
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script type="text/javascript" src="<?php base_url('assets/js/jquery.min.js')?>"></script>
</body>