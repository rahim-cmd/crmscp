<?php
include('topbar.php');
include('sidebar.php');
?>

<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order Table</h4>
                  <p class="card-description">
                    Order Data <code>storecarparts</code>
                  </p>
                  <div class="table-responsive  ">
                    <table class="table table-striped table-sm table-hover w-auto small">
                        <tr >
                          <th>Date</th>
                          <th>Customer Name.</th>
                          <th>Customer Email</th>
                          <th>Customer Phone</th>
                          <th>Customer Address</th>
                          <th>Customer Ebay Id</th>
                          <th> Part Name</th>
                          <th> Selling Price</th>
                          <th> Part Purchase Price</th>
                          <th> Label Price</th>
                          <th> Ebay Fees</th>
                          <th> Marketing Fees</th>
                          <th> Profit</th>
                          <th> Profit Percent</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Jacob</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>53275531</td>
                          <td>12 May 2017</td>
                          <td><label class="badge badge-danger">Pending</label></td>
                        </tr>
                        
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <?php 
            include('footer.php');
            ?>