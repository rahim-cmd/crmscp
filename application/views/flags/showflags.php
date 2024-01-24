<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Elements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <?php
         foreach($records as $chk)
        {
         ?>
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">


                        <!-- General Form Elements -->
                        <form method="post" action="<?php echo base_url('flags/updateflags/').$chk->oidebay?>">

                            <div class="form-check">
                                <input type="text" class="form-group" name="oid" id="oid" value="<?=$chk->oidebay?>"
                                    readonly>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="under_process" name="under_process"
                                    value='under_process' <?php if($chk->under_process!= NULL){?> checked <?php }?>>
                                <label class="form-check-label" for="gridCheck1">
                                    Under Process
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="part_found" name="part_found"
                                    value='part_found' <?php if($chk->part_found!= NULL){?> checked <?php }?>>
                                <label class="form-check-label" for="gridCheck2">
                                    Part Found
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="followup_1" name="followup_1"
                                    value='followup_1' <?php if($chk->followup_1!= NULL){?> checked <?php }?>>
                                <label class="form-check-label" for="gridCheck2">
                                    Followup-1
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="followup_2" name="followup_2"
                                    value='followup_2' <?php if($chk->followup_2!= NULL){?> checked <?php }?>>
                                <label class="form-check-label" for="gridCheck2">
                                    Followup-2
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="completed" name="completed"
                                    value='completed' <?php if($chk->completed!= NULL){?> checked <?php }?>>
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
                                <input class="form-check-input" type="checkbox" id="return_refund" name="return_refund"
                                    value='return_refund' <?php if($chk->return_refund!= NULL){?> checked <?php }?>>
                                <label class="form-check-label" for="gridCheck2">
                                    Return_Refund
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="cancelled" name="cancelled"
                                    value='cancelled' <?php if($chk->cancelled!= NULL){?> checked <?php }?>>
                                <label class="form-check-label" for="gridCheck2">
                                    Cancelled
                                </label>
                            </div>
                            <div class="col-sm-10">
                                <label class="form-check-label" for="gridCheck2">
                                    Remarks
                                </label>
                                <textarea class="form-control" name="remarks" id="remarks" cols="70" rows="10"><?=$chk->f_remarks?></textarea>
                            </div>
                            <div class="colsm-10 mt-5">
                            <button type="submit" name="submit"
                               
                                class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Update Details
                            </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <?php
                                    }

                                ?>
    </section>
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

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    </body>