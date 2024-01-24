<style type="text/css">
table {
    font-family: arial;
    font-size: .8rem;
    border: 1px solid gray;
    text-align: center;
}

table,
thead,
tbody,
td {
    font-family: arial;
    font-size: .8rem;
    border: 1px solid gray;
    text-align: center;
}
</style>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Table</h5>

                        <table class="table-classic table-sm table-hover w-auto small text-center">
                            <thead>
                                <tr>
                                    <th>Order Date</th>
                                    <th>Listing</th>
                                    <th>Year</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Part Name</th>
                                    <th>Trim</th>
                                    <th>Photo</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Customer Phone</th>
                                    <th>Customer Address</th>
                                    <th>Order ID</th>
                                    <th>SKU ID</th>
                                    <th>Selling Price</th>
                                    <th>Ebay Fees</th>
                                    <th>Marketing Fees</th>
                                    <th>Shipby Date</th>
                                    <th>Paid By</th>
                                </tr>
                            </thead>

                            <?php 
                            foreach ($var->result() as $row){
                                ?>
                            <tbody>
                                <tr>
                                    <td><?=$row->date?></td>
                                    <td><?=$row->listing?></td>
                                    <td><?=$row->year?></td>
                                    <td><?=$row->make?></td>
                                    <td><?=$row->model?></td>
                                    <td><?=$row->partname?></td>
                                    <td><?=$row->trim?></td>
                                    <td><img height='100px' weight='100px' src="<?=base_url($row->photo)?>"></td>
                                    <td><?=$row->custname?></td>
                                    <td><?=$row->cemail?></td>
                                    <td><?=$row->cphone?></td>
                                    <td><?=$row->cadd?></td>
                                    <td><?=$row->cebayid?></td>
                                    <td>SCP-<?=$row->skuid?></td>
                                    <td><?=$row->sellingprice?></td>
                                    <td><?=$row->ebayfees?></td>
                                    <td><?=$row->marketingfees?></td>
                                    <td><?=$row->shipbydate?></td>
                                    <td><?=$row->c_number?></td>
                                </tr>
                            </tbody>
                            <?php
                        }
                    ?>
                        </table>

                        <div class="section mt-5">
                            <div class="row">
                                <div class="col-sm-10">
                                    <table class="responsive">
                                        <thead>
                                            <tr>
                                                <th>Order Id</th>
                                                <th>Warehouse Name</th>
                                                <th>Warehouse Address</th>
                                                <th>Warehouse Phone</th>
                                                <th>Warehouse Email</th>
                                                <th>Warehouse Fax</th>
                                                <th>Warehouse Agent</th>
                                                <th>Purchase Price</th>
                                                <th>Label Price</th>
                                                <th>Tracking</th>
                                                <th>Remarks</th>
                                                <th>Created By</th>
                                            </tr>
                                        </thead>
                                        <?php
                        foreach ($reco->result() as $value) {
                            ?>

                                        <tbody>
                                            <tr>
                                                <td><?=$value->oid?></td>
                                                <td><?=$value->w_name?></td>
                                                <td><?=$value->w_add?></td>
                                                <td><?=$value->w_phone?></td>
                                                <td><?=$value->w_email?></td>
                                                <td><?=$value->w_fax?></td>
                                                <td><?=$value->w_agent?></td>
                                                <td><?=$value->purchase_price?></td>
                                                <td><?=$value->label_price?></td>
                                                <td><?=$value->tracking?></td>
                                                <td><?=$value->w_remarks?></td>
                                                <td><?=$value->cuby?></td>
                                            </tr>
                                        </tbody>

                                    </table>



                                    <?php
                        }
                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
