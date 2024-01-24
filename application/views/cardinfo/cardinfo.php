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
                        <h5 class="card-title">Add Bank Card Information</h5>
                        <form method="post" action="<?php echo base_url('addcard')?>">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name on card</label>
                                <input type="name" class="form-control" name="name" id="name"
                                    aria-describedby="emailHelp" placeholder="Enter name on card">
                                <span class="text-danger"><?php echo form_error('name');?></span>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Card Number</label>
                                <input type="number" class="form-control" name="cno" id="cno" placeholder="Card Number">
                                <span class="text-danger"><?php echo form_error('cno');?></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">CVV/CVC</label>
                                <input type="text" class="form-control" name="cvv" id="cvv" placeholder="CVV/CVC">
                                <span class="text-danger"><?php echo form_error('cvv');?></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Expiration</label>
                                <input type="text" class="form-control" name="exp" id="exp"
                                    placeholder="Expiration date">
                                <span class="text-danger"><?php echo form_error('exp');?></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Billing Address</label>
                                <textarea type="text" row=5 col=10 class="form-control" name="billingadd" id="exp"
                                    placeholder="Billing address"></textarea>
                                <span class="text-danger"><?php echo form_error('billingadd');?></span>
                            </div>

                            <div class="form-group">
                                <button type="submit" name="submit" class=" form-control btn btn-primary">Add Card
                                    Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>