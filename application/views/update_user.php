<?php
include('topbar.php');
include('sidebar.php');
?>
<div class="container">
    <div id="adduser">
        <form method="post" action="<?php echo base_url('users/update_user/').$row->id;?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                    value="<?php echo $row->email?>">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="<?php echo $row->password?>">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" class="form-control" name="name" id="last_name" value="<?php echo $row->name?>">
            </div>
            <?php if($this->session->userdata('email')!="rahim@eshbi.in"){?>
            <div class="form-group">
                <label for="exampleInputPassword1">Role</label>
                <input type="text" class="form-control" name="role" id="org" value="<?php echo $row->role?>" readonly>
            </div>
                <?php
            }else{?>
                <div class="form-group">
                <label for="exampleInputPassword1">Role</label>
                <input type="text" class="form-control" name="role" id="org" value="<?php echo $row->role?>">
            </div>
            <?php
            }
            ?>
            
            <div class="form-group">
                <label for="role">Time Stamp</label>
                <input type="text" class="form-control" name="cutime" id="role" value="<?php echo $row->cutime?>">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class=" form-control btn btn-primary" value="Update User">
            </div>
        </form>
    </div>
</div>




<?php
include('footer.php');
?>