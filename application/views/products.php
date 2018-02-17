<?php if($this->session->flashdata('registered')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('registered');?></div>
<?php endif; ?>
<?php if($this->session->flashdata('pass_login')): ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('pass_login');?></div>
<?php endif; ?>
<?php if($this->session->flashdata('fail_login')): ?>
    <div class="alert alert-danger"><?php echo $this->session->flashdata('fail_login');?></div>
<?php endif; ?>
 <?php foreach ($products  as $product) : ?>
  
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="<?php echo base_url(); ?>products/detail/<?php echo $product->id; ?>">
      	     <img src="<?php echo base_url(); ?>assest/images/<?php echo $product->image; ?>" alt="...">
      </a>
      <div class="caption">
         <h3><?php echo $product->title; ?></h3> 

        <span class="price">$<?php echo $product->price; ?></span>
        <form action="<?php echo base_url(); ?>cart/add" method="POST">
        	QTY :<input type="text" name="qty" value="1" class="qty">
        	<input type="hidden" name="number" value="<?php echo $product->id; ?>">
        	<input type="hidden" name="title" value="<?php echo $product->title; ?>">
        	<input type="hidden" name="price" value="<?php echo $product->price; ?>">
            <button class="btn btn-primary" type="submit">Add To Cart</button>
        </form>
      </div>
    </div>
</div> 


<?php endforeach; 
