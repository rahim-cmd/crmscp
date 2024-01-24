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
    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Form Elements</h5>

                        <?php 
                                foreach($res as $row)
                                {

                            ?>
                        <form class="forms-sample" action="<?php echo base_url('welcome/updateorders/').$row->cebayid;?>"
                            method="post">
                            <div class="form-group row mb-2">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="date" id="exampleInputUsername2"
                                        value="<?=$row->date?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('date');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Customer Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="cname" id="exampleInputEmail2"
                                        value="<?=$row->custname?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('cname');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Customer Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="cemail" id="exampleInputMobile"
                                        value="<?=$row->cemail?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('cemail');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Customer
                                    Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="cphone" id="exampleInputPassword2"
                                        value="<?=$row->cphone?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('cphone');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputAddress" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea id="exampleFormControlTextarea1" class="form-control" name="address"
                                        rows="3" cols="52"><?=$row->cadd?></textarea>
                                </div>
                                <span class="text-danger"><?php echo form_error('address');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Customer ebay order
                                    id</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="cebayid" id="exampleInputMobile"
                                        value="<?=$row->cebayid?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('cebayid');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">SKU</label>
                                <div class="col-sm-9">
                                    <select name="sku" class="form-control" id="sku">
                                        <option value="<?=$row->skuid?>" selected>SCP-<?=$row->skuid?></option>
                                        <?php 
                                        foreach($info as $rows){
                                            ?>

                                        <option value="<?php echo $rows->id;?>"><?php echo "SCP-".$rows->id;?></option>

                                        <?php
                                    }
                                    ?>

                                    </select>
                                </div>
                                <span class="text-danger"><?php echo form_error('sku');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Selling Price</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="sellingprice" id="sellingprice"
                                        value="<?=floatval($row->sellingprice);?>" readonly>
                                </div>
                                <span class="text-danger"><?php echo form_error('sellingprice');?></span>
                            </div>


                            <div class="form-group row mb-2">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Ebay Fees</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="ebayfees" id="exampleebayfees"
                                        value="<?=$row->ebayfees?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('ebayfees');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Marketing Fees</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="mfees" id="examplemfees"
                                        value="<?=$row->marketingfees?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('mfees');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputshipByDate" class="col-sm-3 col-form-label">Shipby Date</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="shipbydate" id="shipbydate"
                                        value="<?=$row->shipbydate?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('shipbydate');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputCard" class="col-sm-3 col-form-label">Payment By Card</label>
                                <div class="col-sm-9">
                                    <select name="card" class="form-control" id="card">
                                        <option value="<?=$row->paidbycard?>"><?=$row->c_number?></option>
                                        <?php 
                                        foreach($rec as $crow)
                                        { 
                                            ?>

                                        <option value="<?php echo $crow->id;?>"><?php echo $crow->c_number;?></option>

                                        <?php
                                        }
                                        ?>
                                        <option value="Paid by Link">Paid by Link</option>

                                    </select>
                                </div>
                                <span class="text-danger"><?php echo form_error('card');?></span>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="exampleInputcustomeMessage" class="col-sm-3 col-form-label">Message for Backend Users</label>
                                <div class="col-sm-9">
                                    <textarea   rows="5" cols="30" class="form-control" name="custmsg" id="custmsg"></textarea>
                                </div>
                                <span class="text-danger"><?php echo form_error('shipbydate');?></span>
                            </div>
                           
                                <div class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Flags</legend>
                                    <div class="col-sm-10">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="under_process"
                                            name="under_process" value='under_process'
                                            <?php if($row->under_process!= NULL){?> checked <?php }?>>
                                        <label class="form-check-label" for="gridCheck1">
                                            Under Process
                                        </label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="part_found"
                                            name="part_found" value='part_found' <?php if($row->part_found!= NULL){?>
                                            checked <?php }?>>
                                        <label class="form-check-label" for="gridCheck2">
                                            Part Found
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="followup_1"
                                            name="followup_1" value='followup_1' <?php if($row->followup_1!= NULL){?>
                                            checked <?php }?>>
                                        <label class="form-check-label" for="gridCheck2">
                                            Followup-1
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="followup_2"
                                            name="followup_2" value='followup_2' <?php if($row->followup_2!= NULL){?>
                                            checked <?php }?>>
                                        <label class="form-check-label" for="gridCheck2">
                                            Followup-2
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="completed" name="completed"
                                            value='completed' <?php if($row->completed!= NULL){?> checked <?php }?>>
                                        <label class="form-check-label" for="gridCheck2">
                                            Completed
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="return_exchange"
                                            name="return_exchange" value='return_exchange'
                                            <?php if($row->return_exchange!= NULL){?> checked <?php }?>>
                                        <label class="form-check-label" for="gridCheck2">
                                            Return_Exchange
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="return_refund"
                                            name="return_refund" value='return_refund'
                                            <?php if($row->return_refund!= NULL){?> checked <?php }?>>
                                        <label class="form-check-label" for="gridCheck2">
                                            Return_Refund
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="cancelled" name="cancelled"
                                            value='cancelled' <?php if($row->cancelled!= NULL){?> checked <?php }?>>
                                        <label class="form-check-label" for="gridCheck2">
                                            Cancelled
                                        </label>
                                    </div>
                                    <div class="col-sm-10">
                                        <label class="form-check-label" for="gridCheck2">
                                            Remarks
                                        </label>
                                        <textarea class="form-control" name="remarks" id="remarks"
                                            style="height: 100px"><?=$row->remarks?></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary me-2">Update Order</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>

                        <?php
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
                url: "<?php echo base_url('welcome/fetchSp');?>",
                type: "post",
                data: {
                    id: id
                },
                success: function(data) {

                    $("#sellingprice").val(data)

                },

            })
        }
        if (id != "") {

            $.ajax({
                url: "<?php echo base_url('welcome/fetchPartListed');?>",
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