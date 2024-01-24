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
                        <h5 class="card-title">Modify Part Listing Form</h5>
<?php foreach($cmd as $query){
    ?>
                        <!-- General Form Elements -->
                        <form class="form-group" method="post" action="<?php echo base_url('partlist/updatepartlisted/').$query->id;?>"
                            enctype="multipart/form-data">
                            <div class="row mb-3">
                                <label for="inputListing" class="col-sm-2 col-form-label">Update Listing<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="listing" value="<?= $query->listing?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('listing')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputYear" class="col-sm-2 col-form-label">Year<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="year" value="<?= $query->year?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('year')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputMake" class="col-sm-2 col-form-label">Make<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="make" value="<?= $query->make?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('make')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputModel" class="col-sm-2 col-form-label">Model<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="model" value="<?=$query->model?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('model')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPartName" class="col-sm-2 col-form-label">Part Name<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="partname" value="<?=$query->partname?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('partname')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputTrim" class="col-sm-2 col-form-label">Trim<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="trim" value="<?= $query->trim?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('trim')?></span>
                            </div>
                            
                                <label for="inputTrim" class="col-sm-2 col-form-label">Preview Of Image</label>
                                <img src="<?=base_url($query->photo)?>" alt="<?=$query->photo?>" width="100px" height="80px">
                           
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Image Upload<span
                                        class="text-danger">*</span></label>

                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="userfile" name="userfile" value="<?=$query->photo?>">
                                    
                                </div>
                            
                            </div>

                            <div class="row mb-3">
                                <label for="inputSku" class="col-sm-2 col-form-label">Selling Price<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="sellingprice" name="sellingprice" value="<?= $query->sellingprice?>">
                                </div>
                                <span class="text-danger"><?php echo form_error('sellingprice')?></span>
                            </div>
                            <div class="row mb-3">
                                <label for="inputRemarks" class="col-sm-2 col-form-label">Remarks</label>
                                <div class="col-sm-10">
                                    <textarea name="remarks" class="form-control" id="" cols="30" rows="10"><?php echo $query->remarks?></textarea>
                                </div>
                                <span class="text-danger"><?php echo form_error('remarks')?></span>
                            </div>

                            <div class="row mb-3">
                                <input type="submit" name="submit" value="Update Listing" class="btn btn-success">
                            </div>
                        </form>
                    <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                    