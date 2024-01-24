<?php
    include('topbar.php');
    include('sidebar.php');
?>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Parts Table</h4>
            <p class="card-description">
                All Parts<code>storecarpart</code>
            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>
                                Part Name
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Part Trim
                            </th>
                            <th colspan=2>
                                Operations
                            </th>

                        </tr>
                    </thead>


                    <?php
                            foreach($parts as $row)
                    {?>
                    <tbody>
                        <tr>
                            <td class="py-1">
                                <?=  $row->p_name;?>
                            </td>
                            <td>
                                <?=  $row->p_qty;?>
                            </td>
                            <td>
                                <?=  $row->price;?>
                            </td>
                            <td>
                                <?=  $row->p_trim;?>
                            </td>
                            <td>
                                <a href="<?= base_url('editparts/').$row->id;?>"><span class="text-warning">✏️Edit</span></a>&nbsp;
                                <a href="<?= base_url('delpart/').$row->id;?>" onclick="return confirm('Are you sure you want to delete it?')"><span class="text-danger">🗑️Delete</span></a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    include('footer.php');?>