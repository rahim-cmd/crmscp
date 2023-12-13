<?php
include('topbar.php');
// include('sidebar.php');

?>
<div class="container">
    <div class="row mt-2 pt-1">
        <div class="col-md-10 ">
            <h3>Employee List</h3>

        </div>
        <div class="col-md-2">
            <?php
                if($this->session->userdata['email']=='rahim@eshbi.in')
                {?>
            <form action="<?php echo base_url('adduser');?>"><button class="btn btn-info">Add New User</button></form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>id</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Date and Time</th>
                            <th colspan="2">Operations</th>
                        </tr>
                    </thead>
            </div>
            <?php
                        foreach ($qury as $row)  
                        {  
                            ?><tr>
                <td><?php echo $row->id;?></td>
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->password;?></td>
                <td><?php echo $row->name;?></td>
                <td><?php echo ($row->admin==1)? "Admin": "User";?>
                            
                </td>
                <td><?php echo $row->cutime;?></td>
                <td><a href="<?php echo base_url('users/update_entry/').$row->id;?>"><i class="ri-edit-box-line"></i></a></td>
                <td><a href="<?php echo base_url('users/del_entry/').$row->id;?>"><i class="ri-delete-bin-6-line"></i></a></td>
            </tr>
            <?php }  
                        ?>

            </table>
        </div>

        <?php
                }else{

                    foreach ($qury as $row)  
                        {  
                            ?>
    </div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Email</th>
                <th>Password</th>
                
                <th>Name</th>
                <th>Role</th>
                <th>Time Stamp</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>

        <tr>
            <td><?php echo $row->id;?></td>
            <td><?php echo $row->email;?></td>
            <td><?php echo $row->password;?></td>
            <td><?php echo $row->name;?></td>
            <td><?php echo ($row->admin==1)? "Admin": "User";?></td>
            <td><?php echo $row->cutime;?></td>
            <td><a href="<?php echo base_url('users/update_entry/').$row->id;?>"><i class="ri-edit-box-line"></i></a></td>
            
        </tr>
    </table>
    <?php }  
                    
                }
            ?>
</div>
</div>
</div>

<?php
include('footer.php');
?>