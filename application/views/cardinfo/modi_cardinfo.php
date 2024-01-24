<main id="main" class="main">
    <div class="pagetitle">
        <h1>Form Elements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/');?>">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Update Bank Card Information</h5>
                        <form method="post" action="<?php echo base_url('modifycardinfo/').$row->id;?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name on card</label>
                                <input type="name" class="form-control" name="name" id="name"
                                    aria-describedby="emailHelp" value="<?php echo $row->c_name?>">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Card Number</label>
                                <input type="number" class="form-control" name="cno" id="cno"
                                    value="<?php echo $row->c_number?>">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">CVV/CVC</label>
                                <input type="text" class="form-control" name="cvv" id="cvv"
                                    value="<?php echo $row->c_cvv?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Expiration</label>
                                <input type="text" class="form-control" name="exp" id="exp"
                                    value="<?php echo $row->c_exp?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Address</label>
                                <textarea type="text" row=5 col=10 class="form-control" name="billingadd" id="exp"
                                    value="<?php echo $row->c_billing_add?>"><?php echo $row->c_billing_add?></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class=" form-control btn btn-primary"
                                    value="Update Card">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>