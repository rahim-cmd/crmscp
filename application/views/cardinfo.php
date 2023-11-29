<?php
    include('topbar.php');
    include('sidebar.php');
?>
<div class="container">
    <div id="adduser">
        <form method="post" action="<?php echo base_url('addcard')?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Name on card</label>
                <input type="name" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                    placeholder="Enter name on card">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Card Number</label>
                <input type="number" class="form-control" name="cno" id="cno" placeholder="Card Number">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">CVV/CVC</label>
                <input type="text" class="form-control" name="cvv" id="cvv" placeholder="CVV/CVC">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Expiration</label>
                <input type="text" class="form-control" name="exp" id="exp" placeholder="Expiration date">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Billing Address</label>
                <textarea type="text" row=5 col=10 class="form-control" name="billingadd" id="exp" placeholder="Expiration date"></textarea>
                
            </div>
            
            <div class="form-group">
                <input type="submit" name="submit" class=" form-control btn btn-primary" value="Add Card">
            </div>
        </form>
    </div>
</div>




<?php
    include('footer.php');
?>