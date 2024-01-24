<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/');?>">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <?php 
      
      echo "<h2 class='text-success'>Welcome,<span class='text-primary'> ".$this->session->userdata('name')."</span></h2>";
  ?>
    <div class="main">
        <div class="section">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-title text-center">
                            Total Number of Orders
                        </div>
                        
                        <div class="card-body text-center">
                          <?php
                            echo "<h5 class='text-primary text-xl'>" .$dat. "</h5>";
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-title text-center">
                            Today's Order
                        </div>
                        
                        <div class="card-body text-center">
                          <?php
                            echo "<h5 class='text-primary text-xl'>" .$rec. "</h5>";
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>