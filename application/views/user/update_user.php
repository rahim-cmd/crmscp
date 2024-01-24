<main id="main" class="main">

    <div class="pagetitle">
        <h1>Add New Users</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('/');?>">Home</a></li>
                <li class="breadcrumb-item">user</li>
                <li class="breadcrumb-item active">form</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

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
            <div class="form-group">
                <label for="exampleInputPassword1">Sudo Name</label>
                <input type="text" class="form-control" name="sudoname" id="sudo_name" value="<?php echo $row->sudoname?>">
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
                <input type="submit" name="submit" class=" form-control btn btn-primary" value="Update User">
            </div>
        </form>
    </div>
</div>
</main>





