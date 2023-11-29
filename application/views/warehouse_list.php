<?php
include('topbar.php');
include('sidebar.php');
?>



<div class="row">

    <?php
    $count=1;
    foreach($cmd as $row)
    {?>
    <div class="col-sm-5 m-2 p-2">
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <table class="table table-responsive table-hover">
                  <strong class="text-primary"><?php echo $count++;?></strong>
                    <tr>
                        <td>Warehouse Name</td>
                        <td><?=$row->w_name?></td>
                    </tr>
                    <tr>
                        <td>Warehouse Phone</td>
                        <td><?=$row->w_phone?></td>
                    </tr>
                    <tr>
                        <td>Warehouse Fax</td>
                        <td><?=$row->w_fax?></td>
                    </tr>
                    <tr>
                        <td>Warehouse Address</td>
                        <td><?=$row->w_add?></td>
                    </tr>
                    <tr>
                        <td>Warehouse Email</td>
                        <td><?=$row->w_email?></td>
                    </tr>
                    <tr>
                        <td>Agent</td>
                        <td><?=$row->w_agent?></td>
                    </tr>
                    <tr>
                        <td>Time stamp</td>
                        <td><?=$row->cutime?></td>
                    </tr>
                    <tr>
                        <td><a href="<?php echo base_url('modiwarehouse/').$row->id;?>"><strong
                                    class="btn btn-sm btn-primary"><i class="ri-edit-box-fill"></i>Edit</strong></a></td>
                        <td><a href="<?php echo base_url('delwarehouse/').$row->id;?>"><strong
                                    class="btn btn-sm btn-danger"><i class="ri-delete-bin-6-fill"></i>Delete</strong></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <?php
    }


?>

</div>


<?php
include('footer.php');
?>