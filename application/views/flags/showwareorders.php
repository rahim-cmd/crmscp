
<style>
    table{
        font-family:arial;
        font-size:.8rem;
        text-align:center;
    }
</style>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Order Placed With Warehouse</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/');?>">Home</a></li>
                <li class="breadcrumb-item">order</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12 p-1">
                <div class="card">
                    <div class="card-body">
                        <table class="table datatable table-responsive table-hover">
                            <thead>
                                <tr>
                                    <th>Ebay Order Id</th>
                                    <th>Warehouse Name</th>
                                    <th>Warehouse Phone</th>
                                    <th>Warehouse Fax</th>
                                    <th>Warehouse Address</th>
                                    <th>Warehouse Email</th>
                                    <th>Agent</th>
                                    <th>Label Price</th>
                                    <th>Purchase Price</th>
                                    <th>Last Update By </th>
                                    <th>Time stamp</th>
                                    <th>Operations</th>
                                </tr>

                            </thead>
                           
                            <tbody>
                            <?php
                            foreach($res as $row){
                                
                                ?>
                                <tr>
                                    <td><?=$row->oid?></td>
                                    <td><?=$row->w_name?></td>
                                    <td><a href="tel:<?=$row->w_phone?>"><?=$row->w_phone?></a></td>
                                    <td><?=$row->w_fax?></td>
                                    <td><?=$row->w_add?></td>
                                    <td><?=$row->w_email?></td>
                                    <td><?=$row->w_agent?></td>
                                    <td><?=$row->label_price?></td>
                                    <td><?=$row->purchase_price?></td>
                                    <td><?=$row->cuby?></td>
                                    <td><?=$row->cutime?></td>
                                    <td><a href='<?=base_url('warehouse/delwarehouseinfo/').$row->wid?>' onclick="return confirm('Are You Sure!');">Delete</a></td>
                                    
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
    </div>
</main>