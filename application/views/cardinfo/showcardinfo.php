<main id="main" class="main">

    <div class="pagetitle">
        <h1>General Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/')?>">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">General</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Card Information</h5>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name on Card</th>
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
                                    <td class="text-danger">
                                        <?php if($this->session->userdata('email')=='rahim@eshbi.in'){ echo $row->c_cvv;}else{echo "XXX";}?>
                                    </td>
                                    <td><label><?=$row->c_exp;?></label></td>
                                    <td><?=$row->c_billing_add;?></td>
                                    <td><?=$row->cutime;?></td>
                                    <td><a href="<?= base_url('modifycard/').$row->id;?>">✏️<span
                                                class="text-warning font-weight-bold">Edit</span></a></td>
                                    <td><a href="<?= base_url('delcard/').$row->id;?>"
                                            onclick="return confirm('Are you sure you want to delete it?')">🗑️<span
                                                class="text-danger font-weight-bold">Trash</span></a></td>

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