<?php if($this->cart->contents()) : ?>
    <form action="cart/process" method="post">
    	<table class="table table-striped">
    		<thead>
    			<tr>
    				<th>Quantity</th>
    				<th>Item Title</th>
    				<th>Item Price</th>
    			</tr>
    		</thead>
    		<tbody>
    		<?php  $i = 0; ?>
    		<?php foreach($this->cart->contents() as $items) : ?>
    			<tr>
    				<td><?php echo $items['qty']; ?></td>
    				<td><?php echo $items['name']; ?></td>
    				<td>$<?php echo $this->cart->format_number($items['price']); ?></td>
    			</tr>
    			<?php echo '<input type="hidden" name="item_name['.$i.']" value="'.$items['name'].'" />'; ?>
    			<?php echo '<input type="hidden" name="item_code['.$i.']" value="'.$items['id'].'" />'; ?>
    			<?php echo '<input type="hidden" name="item_qty['.$i.']" value="'.$items['qty'].'" />'; ?>

    		<?php  $i = 0; ?>
    	<?php  endforeach; ?>
    	        <tr>
    	        	<td></td>
    	        	<td>Shipping</td>
    	        	<td><?php echo $this->config->item('shipping'); ?></td>
    	        </tr>
    	        <tr>
    	        	<td></td>
    	        	<td>Tax</td>
    	        	<td><?php echo $this->config->item('tax'); ?></td>
    	        </tr>
    	         <tr>
			          <td></td>
			          <td>Total</td>
			          <td>$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
			     </tr>
    		</tbody>
    	</table>
    	<hr>
        <?php if(!$this->session->userdata('logged_in')) : ?>
            <p><a href="<?php echo base_url(); ?>users/register" class="btn btn-primary">Register</a>
            You Must Create Acount Or Login</p>
            <?php else: ?>
          
    	   <h3>Shiping Info</h3>
    	   <div class="form-group">
	    	   	<label for="">Adress :</label>
	    	   	<input type="text" class="form-control" name="adress">
    	   </div>
    	   <div class="form-group">
	    	   	<label for="">Adress 2 :</label>
	    	   	<input type="text" class="form-control" name="adressé">
    	   </div>
    	   <div class="form-group">
	    	   	<label for="">City :</label>
	    	   	<input type="text" class="form-control" name="city">
    	   </div>
    	   <div class="form-group">
	    	   	<label for="">State :</label>
	    	   	<input type="text" class="form-control" name="state">
    	   </div>
    	   <div class="form-group">
	    	   	<label for="">Zip Code :</label>
	    	   	<input type="text" class="form-control" name="zipcode">
    	   </div>
    	   <button class="btn btn-primary" name="submit" type="submit">Checkout</button>
    	  <?php endif; ?>
    </form>
<?php else : ?>
	<p class="alert alert-warning"> You Have No Item In Your Cart !</p>
<?php endif; ?>