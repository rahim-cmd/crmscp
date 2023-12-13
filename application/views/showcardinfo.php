<?php
    include('topbar.php');
    include('sidebar.php');
    ?>
<div class="col-lg-10 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Card Information Table</h4>
            <p class="card-description">
                Card Info <code>.Data</code>
            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Card Name</th>
                            <th>Card Number</th>
                            <th>Card CVV</th>
                            <th>Card Exp</th>
                            <th>Billing Address</th>
                            <th>Time Stamp</th>
                            <th colspan=2>Operations</th>
                        </tr>
                    </thead>
                    <?php
    foreach($cmd as $row)
{?>

                    <tbody>
                        <tr>
                            <td><?=$row->c_name;?></td>
                            <td><?=$row->c_number;?></td>
                            <td  class="text-danger"><?php if($this->session->userdata('email')=='rahim@eshbi.in'){ echo $row->c_cvv;}else{echo "XXX";}?></td>
                            <td><label><?=$row->c_exp;?></label></td>
                            <td><?=$row->c_billing_add;?></td>
                            <td><?=$row->cutime;?></td>
                            <td><a href="<?= base_url('modifycard/').$row->id;?>"><strong
                                        class="btn btn-sm btn-primary"><i class="ri-edit-box-fill"></i>Edit</strong></a></td>
                            <td><a href="<?= base_url('delcard/').$row->id;?>"><strong
                                        class="btn btn-sm btn-danger"><i class="ri-delete-bin-5-fill"></i>Delete</strong></a></td>

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




<?php
    include('footer.php');
?>