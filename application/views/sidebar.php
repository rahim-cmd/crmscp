  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url();?>login/dashboard">
                  <i class="mdi mdi-grid-large menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
              </a>
          </li>
          <!-- <li class="nav-item nav-category">UI Elements</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-floor-plan"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i> 
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item nav-category">Forms and Datas</li>
          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                  aria-controls="form-elements">
                  <i class="menu-icon mdi mdi-cart"></i>
                  <span class="menu-title">Order elements</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>orderform">Create Orders</a></li>
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>showform">Show Orders List</a></li>
                  </ul>
              </div>
          </li>


          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                  <i class="menu-icon mdi mdi-store-24-hour"></i>
                  <span class="menu-title">Inventory</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="icons">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>addparts">Add Parts</a>
                      </li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>showallparts">Show All
                              Parts</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>addwarehouse">Add Warehouses</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>show_warehouse">Show Warehouses</a></li>
                  </ul>
              </div>
          </li>

          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icon" aria-expanded="false" aria-controls="icon">
                  <i class="menu-icon mdi mdi-bank-outline"></i>
                  <span class="menu-title">Bank Info</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="icon">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>card">Add Card Info</a></li>
                      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('showcardinfo');?>">Show Card Info</a></li>
                  </ul>
              </div>
          </li>
<?php 
if($this->session->userdata("email")=="rahim@eshbi.in")
{
?>
          <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="icons">
              <i class="menu-icon mdi mdi-account"></i>
                  <span class="menu-title">Users</span>
                  <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                  <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="<?php echo base_url();?>showallusers">Show All Users</a>
                      </li>
                      
                  </ul>
              </div>
          </li>
          <?php
}else{
echo "";
}
          ?>

      </ul>
  </nav>