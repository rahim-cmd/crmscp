 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

     <ul class="sidebar-nav" id="sidebar-nav">

         <li class="nav-item">
             <a class="nav-link " href="<?php echo base_url('/');?>">
                 <i class="bi bi-grid"></i>
                 <span><?php echo $this->session->userdata("role");?> Dashboard</span>
             </a>
         </li><!-- End Dashboard Nav -->
         <?php 
  if($this->session->userdata('role')=="lister"){
    ?>
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-menu-button-wide"></i><span>Part Listings</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?= base_url('addlistpart');?>">
                         <i class="bi bi-circle"></i><span>Add Part for list</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('showlistedpart')?>">
                         <i class="bi bi-circle"></i><span>Show listed part</span>
                     </a>
                 </li>
             </ul>
         </li>
         <?php
  }elseif($this->session->userdata('role')=="user"){
    ?>

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-layout-text-window-reverse"></i><span>Order Tables</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?php echo base_url('order');?>">
                         <i class="bi bi-circle"></i><span>Create Order</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('showorder');?>">
                         <i class="bi bi-circle"></i><span>Show Order Tables</span>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-bar-chart"></i><span>Bank Card Info</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?php echo base_url('card');?>">
                         <i class="bi bi-circle"></i><span>Add Card</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('showcardinfo');?>">
                         <i class="bi bi-circle"></i><span>Show Cards</span>
                     </a>
                 </li>

             </ul>
         </li>
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-bar-chart"></i><span>Add Parts to Invetory</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?php echo base_url('card');?>">
                         <i class="bi bi-circle"></i><span>Add Parts to Inventory</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('showcardinfo');?>">
                         <i class="bi bi-circle"></i><span>Show Inventory</span>
                     </a>
                 </li>

             </ul>
         </li>
         <?php
  }elseif($this->session->userdata('role')=="backend"){
      ?>
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-award-fill"></i><span>Backend Operations</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?php echo base_url('showordersforexecution')?>">
                         <i class="bi bi-circle"></i><span>Show Orders</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('show_warehouse')?>">
                         <i class="bi bi-circle"></i><span>Show Warehouses</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('new_warehouse')?>">
                         <i class="bi bi-circle"></i><span>New Warehouse</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('showplacedorder')?>">
                         <i class="bi bi-circle"></i><span>Show Placed Order With Warehouse</span>
                     </a>
                 </li>
             </ul>
         </li>


         <?php
  }elseif($this->session->userdata('role')=="followup"){
    ?>
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                 😊<span>Followups</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                 <li>
                     <a href="<?php echo base_url('flags/showflags')?>">
                         <i class="bi bi-circle"></i><span>Show Placed Order With Warehouse</span>
                     </a>
                 </li>
             </ul>
         </li>


         <?php
  }else{
    ?>
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-menu-button-wide"></i><span>Part Listings</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?= base_url('addlistpart');?>">
                         <i class="bi bi-circle"></i><span>Add Part for list</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?=base_url('showlistedpart')?>">
                         <i class="bi bi-circle"></i><span>Show listed part</span>
                     </a>
                 </li>
             </ul>
         </li>
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-layout-text-window-reverse"></i><span>Order Tables</span><i
                     class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?php echo base_url('order');?>">
                         <i class="bi bi-circle"></i><span>Create Order</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('showorder');?>">
                         <i class="bi bi-circle"></i><span>Show Order Tables</span>
                     </a>
                 </li>
             </ul>
         </li>

         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-bar-chart"></i><span>Bank Card Info</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?php echo base_url('card');?>">
                         <i class="bi bi-circle"></i><span>Add Card</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('showcardinfo');?>">
                         <i class="bi bi-circle"></i><span>Show Cards</span>
                     </a>
                 </li>

             </ul>
         </li>
         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                 <i class="bi bi-gem"></i><span>Backend Operations</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                 <li>
                     <a href="<?php echo base_url('showordersforexecution')?>">
                         <i class="bi bi-circle"></i><span>Show Orders</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('show_warehouse')?>">
                         <i class="bi bi-circle"></i><span>Show Warehouses</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('new_warehouse')?>">
                         <i class="bi bi-circle"></i><span>New Warehouse</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('showplacedorder')?>">
                         <i class="bi bi-circle"></i><span>Show Placed Order With Warehouse</span>
                     </a>
                 </li>
             </ul>
         </li>
                 <li class="nav-item">
                     <a class="nav-link collapsed" data-bs-target="#iconss-nav" data-bs-toggle="collapse" href="#">
                         😊<span>Followups</span><i class="bi bi-chevron-down ms-auto"></i>
                     </a>
                     <ul id="iconss-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                         <li>
                             <a href="<?php echo base_url('flags/showflags')?>">
                                 <i class="bi bi-circle"></i><span>Show Placed Order With Warehouse</span>
                             </a>
                         </li>
                     </ul>
                 </li>
             


         <li class="nav-item">
             <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
                 👥<span>Manage Users</span><i class="bi bi-chevron-down ms-auto"></i>
             </a>
             <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                 <li>
                     <a href="<?php echo base_url('users')?>">
                         <i class="bi bi-circle"></i><span>Add New User</span>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('showallusers')?>">
                         <i class="bi bi-circle"></i><span>Show Users</span>
                     </a>
                 </li>
             </ul>
         </li>
         <?php
  }
  ?>






     </ul>

 </aside><!-- End Sidebar-->