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

                            <h4 class="card-title">Add New Warehouse</h4>

                            <form class="forms-sample" action="<?php echo base_url('warehouse/insertwhouse');?>"
                                method="post">
                                
                                <div class="form-group mb-2">
                                    <label for="exampleInputUsername1">Warehouse Name</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1" name="wname"
                                        placeholder="Warehouse Name">
                                </div>
                                <span class="text-danger"><?php echo form_error('wname');?></span>
                                <div class="form-group mb-2">
                                    <label for="exampleInputEmail1">Warehouse address</label>
                                    <textarea class="form-control" name="wadd" id="exampleFormControlTextarea1" rows="5"
                                        cols="51"></textarea>
                                </div>
                                <span class="text-danger"><?php echo form_error('wadd');?></span>
                                <div class="form-group mb-2">
                                    <label for="exampleInputPassword1">Warehouse Phone</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="wphone"
                                        placeholder="Warehouse Phone">
                                </div>
                                <span class="text-danger"><?php echo form_error('wphone');?></span>
                                <div class="form-group mb-2">
                                    <label for="exampleInputConfirmPassword1">Warehouse Email</label>
                                    <input type="email" class="form-control" id="exampleInputConfirmPassword1"
                                        name="wemail" placeholder="Warehouse Email">
                                </div>
                                <span class="text-danger"><?php echo form_error('wemail');?></span>
                                <div class="form-group mb-2">
                                    <label for="exampleInputConfirmPassword1">Warehouse Fax</label>
                                    <input type="text" class="form-control" id="exampleInputConfirmPassword1"
                                        name="wfax" placeholder="Warehouse Fax">
                                </div>
                                <span class="text-danger"><?php echo form_error('wfax');?></span>
                                <div class="form-group mb-2">
                                    <label for="exampleInputConfirmPassword1">Warehouse Agent</label>
                                    <input type="text" class="form-control" id="exampleInputConfirmPassword1"
                                        name="wagent" placeholder="Warehouse Agent">
                                </div>
                                <span class="text-danger"><?php echo form_error('wagent');?></span>
                                <div class="form-group mb-2">
                                    <label for="exampleInputStatus">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <button type="submit" name="submit" class="btn btn-primary me-2">Add New
                                        Warehouse</button>
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