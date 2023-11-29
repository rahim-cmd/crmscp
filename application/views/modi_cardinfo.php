<?php
    include('topbar.php');
    include('sidebar.php');
?>
<div class="container">
    <div id="adduser">
        <form method="post" action="<?php echo base_url('modifycardinfo/').$row->id;?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Name on card</label>
                <input type="name" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                    value="<?php echo $row->c_name?>">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Card Number</label>
                <input type="number" class="form-control" name="cno" id="cno" value="<?php echo $row->c_number?>">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">CVV/CVC</label>
                <input type="text" class="form-control" name="cvv" id="cvv" value="<?php echo $row->c_cvv?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Expiration</label>
                <input type="text" class="form-control" name="exp" id="exp" value="<?php echo $row->c_exp?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Address</label>
                <textarea type="text" row=5 col=10 class="form-control" name="billingadd" id="exp" value="<?php echo $row->c_billing_add?>">Billing Address</textarea>
            </div>
            
            <div class="form-group">
                <input type="submit" name="submit" class=" form-control btn btn-primary" value="Update Card">
            </div>
        </form>
    </div>
</div>




<?php
    include('footer.php');
?>