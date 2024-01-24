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
        <form method="post" action="<?php echo base_url('adduser')?>">
            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input type="email" class="form-control" name="email" id="email" autocomplete="off" aria-describedby="emailHelp"
                    placeholder="Enter email">
                    <span class="text-danger"><?php echo form_error('email');?></span>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="password" autocomplete="off" placeholder="Password">
                <span class="text-danger"><?php echo form_error('password');?></span>
            </div>

            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" name="name" id="last_name" autocomplete="off" placeholder="Name">
                <span class="text-danger"><?php echo form_error('name');?></span>
            </div>
            <div class="form-group">
                <label for="exampleInputRole">Role</label>
                <input type="text" class="form-control" name="role" id="role" autocomplete="off" placeholder="Role">
                <span class="text-danger"><?php echo form_error('role');?></span>
            </div>
            <div class="form-group">
                <label for="exampleInputSudoname">Sudo Name</label>
                <input type="text" class="form-control" name="sudoname" id="sudo_name" autocomplete="off" placeholder="Sudo Name">
                <span class="text-danger"><?php echo form_error('role');?></span>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class=" form-control btn btn-primary">Add User</button>
            </div>
        </form>
    </div>
</div>
</main>



