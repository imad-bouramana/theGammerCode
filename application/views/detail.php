<div class="row detail">
	<div class="col-md-4">
		<img src="<?php echo base_url(); ?>assest/images/<?php echo $product->image; ?>" alt="">
	</div>
	<div class="col-md-8">
		<h3><?php echo $product->title; ?></h3>
		<div class="detail_price">
			$<?php echo $product->price; ?>
		</div>
			 <div class="detail_desc">
				<p><?php echo $product->description; ?></p>
			</div> 
		
		<form action="<?php echo base_url(); ?>cart/add" method="POST">
        	QTY :<input type="text" name="qty" value="1" class="qty">
        	<input type="hidden" name="number" value="<?php echo $product->id; ?>">
        	<input type="hidden" name="title" value="<?php echo $product->title; ?>">
        	<input type="hidden" name="price" value="<?php echo $product->price; ?>">
            <button class="btn btn-primary" type="submit">Add To Cart</button>
        </form>
	</div>
</div>	