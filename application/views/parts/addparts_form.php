<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Elements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('/');?>">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add Parts to Inventory</h5>

                        <!-- General Form Elements -->
                        <form class="form-group" method="post" action="<?php echo base_url('parts/addparts');?>"
                            enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputListing" class="col-sm-2 col-form-label">Part Name<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="partname" id="partname">
                                </div>
                                <span class="text-danger"><?php echo form_error('partname')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputQuantity" class="col-sm-2 col-form-label">Quantity<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="quantity" id="quantity">
                                </div> 
                                <span class="text-danger"><?php echo form_error('quantity')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTrim" class="col-sm-2 col-form-label">Trim<span
                                        class="text-danger"></span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="trim" id="trim">
                                </div>
                                <span class="text-danger"><?php echo form_error('trim')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPrice" class="col-sm-2 col-form-label">Price<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="price" id="price">
                                </div>
                                <span class="text-danger"><?php echo form_error('price')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputRemarks" class="col-sm-2 col-form-label">Remarks if any</label>
                                <div class="col-sm-10">
                                    <textarea name="remarks" class="form-control" id="" cols="30" rows="3"></textarea>
                                </div>
                                <span class="text-danger"><?php echo form_error('remarks')?></span>
                            </div>

                            <div class="row mb-3">
                                <input type="submit" name="submit" value="Add Listing" class="btn btn-success">
                            </div>
                    </div>
                </div>
    </section>