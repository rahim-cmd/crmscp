<style>
    table th,td{
        font-size:0.8rem;
        font-family:arial;
    }
</style>

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
                        <h5 class="card-title">Parts Listed</h5>


                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>
                                        listing
                                    </th>
                                    <th>Year</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                    <th>Part Name</th>
                                    <th>Trim</th>
                                    <th>Photo</th>
                                    <th>SKU</th>
                                    <th>Selling Price</th>
                                    <th>Remarks</th>

                                    <th data-type="date" data-format="YYYY/DD/MM">Cutime</th>
                                    <th>Created/Updated By</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($query as $row){
                                                        ?>

                                <tr>
                                    <td><?=$row->listing?></td>
                                    <td><?=$row->year?></td>
                                    <td><?=$row->make?></td>
                                    <td><?=$row->model?></td>
                                    <td><?=$row->partname?></td>
                                    <td><?=$row->trim?></td>
                                    <td><img width="80px" height="80px" src="<?=base_url($row->photo);?>"></td>
                                    <td><?="SCP-".$row->id?></td>
                                    <td><?=$row->sellingprice?></td>
                                    <td><?=$row->remarks?></td>
                                    <td><?=$row->cutime?></td>
                                    <td><?=$row->cuby?></td>
                                    <td><a href="<?=base_url('editpartlisting/').$row->id?>" class="btn btn-outline-warning btn-sm">Edit</td>
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
    </div>
</main>