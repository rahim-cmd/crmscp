<main id="main" class="main">

    <div class="pagetitle">
        <h1></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('/')?>">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">orders</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">warehouse orders</h5>

                        <table class="table datatable table-striped table-sm table-hover w-auto small text-center">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Order Ebay Id</th>
                                
                                <th> Status</th>

                                

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($rec as $row)
                      {
                    ?>
                                <tr>
                                    <td><?=$row->cutime?></td>
                                    <td><a href="<?=base_url('flags/index/').$row->oid;?>"><?=$row->oid?></td>
                                    
                                    <td><?php 
                                        if($row != null )
                                        {
                                            echo "<span class='badge bg-primary'>".$row->under_process ."</span>" ;
                                            echo "<span class='badge bg-dark'>".$row->part_found ."</span> " ;
                                            echo "<span class='badge bg-secondary'>".$row->followup_1 ."</span> " ;
                                            echo "<span class='badge bg-info'>".$row->followup_2 ."</span> " ;
                                            echo "<span class='badge bg-success'>".$row->completed ."</span> " ;
                                            echo "<span class='badge bg-warning'>".$row->return_exchange ."</span> " ;
                                            echo "<span class='badge bg-warining'>".$row->return_refund ."</span> " ;
                                            echo "<span class='badge bg-danger'>".$row->cancelled ."</span> " ;
                                           
                                        } 
                                        ?></td>

                                    
                                </tr>

                            <?php 
                            }
                            ?>

                            </tbody>
                        </table>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>