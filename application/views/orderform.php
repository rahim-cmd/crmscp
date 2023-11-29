<?php
include('topbar.php');
include('sidebar.php');

?>

<!-- horizontal form -->
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Order Form</h4>
            <p class="card-description">
                Fill the details </p>
            <form class="forms-sample" action="" method="post">
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Date</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" name="date" id="exampleInputUsername2"
                            placeholder="date">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Customer Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cname" id="exampleInputEmail2"
                            placeholder="Customer Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Customer Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="cemail" id="exampleInputMobile"
                            placeholder="Customer email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Customer Phone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cphone" id="exampleInputPassword2"
                            placeholder="Customer Phone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputAddress" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                        <textarea id="exampleFormControlTextarea1" name="address" rows="10"
                            cols="52"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Customer ebay order id</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="cebayid" id="exampleInputMobile"
                            placeholder="Cust Ebay Id">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Part Name</label>
                    <div class="col-sm-9">
                        <select name="pname" class="form-control" id="pname">
                            <?php foreach($info as $row){
                            ?>

                            <option value="<?php echo $row->p_name;?>"><?php echo $row->p_name;?></option>

                            <?php
                        }?>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Selling Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="sellingprice" id="examplesellingPrice"
                            placeholder="Selling Price">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Part Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="partprice" id="examplepartPrice"
                            placeholder="Part Price">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Label Price</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="labelprice" id="examplelabelPrice"
                            placeholder="Label Price">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Ebay Fees</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ebayfees" id="exampleebayfees"
                            placeholder="Ebay Fees">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Marketing Fees</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="mfees" id="examplemfees"
                            placeholder="Marketing Fees">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Profit</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="Profit" id="examplemProfit" placeholder="Profit">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- content-wrapper ends -->




<?php echo include('footer.php');?>