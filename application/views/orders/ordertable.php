<main id="main" class="main">

    <div class="pagetitle">
        <h1>List of Part Listed</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url('/')?>">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Table</h5>

                        <table class="table datatable table-striped table-sm table-hover w-auto small text-center">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Order Ebay Id</th>
                                <th> SKU</th>
                                <th> Shipby Date</th>
                                <th> Paid by Card</th>
                                <th> Status</th>
                                <th>Followups Remarks</th>

                                <th>Operations</th>

                                

                            </tr>
                            </thead>
                            <tbody>
                    <?php foreach($rec as $row)
                      {
                    ?>
                                <tr>
                                    <td><?=$row->date?></td>
                                    <td><a href="<?=base_url('showfulldetails/').$row->cebayid;?>" target="_blank"><?=$row->cebayid?></td>
                                    <td>SCP-<?=$row->skuid?></td>
                                    <td><?=$row->shipbydate?></td>
                                    <td><?=$row->c_number?></td>
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
                                        
                                        <td><?=$row->f_remarks?></td>

                                        <td><a href="<?=base_url('welcome/editorderform/').$row->cebayid?>" class="text-info" class="text-info">🔧Edit</a></td>

                                    
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