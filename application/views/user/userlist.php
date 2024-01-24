
<style type="text/css">
    table{
        font-family:arial;
        font-size:.8rem;
    }
</style>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>User Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                        <h5 class="card-title">User Table</h5>


                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <b>N</b>ame
                                    </th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th data-type="date" data-format="YYYY/DD/MM">Cutime</th>
                                    <th>Role</th>
                                    <th>Sudoname</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($qury as $row){
                ?>

                                <tr>
                                    <td><?=$row->name?></td>
                                    <td><?=$row->email?></td>
                                    <td><?=hash('md5',$row->password);?></td>
                                    <td><?=$row->cutime?></td>
                                    <td><?=$row->role?></td>
                                    <td><?=$row->sudoname?></td>
                                    <td><a class="text-warning" href="<?=base_url('users/edituser/').$row->id?>">✏️Edit</a><br>
                                    <a class="text-danger" onclick="return confirm('Are you Sure ?')" href="<?=base_url('users/deleteuser/').$row->id?>">🗑️Delete</a></td>

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