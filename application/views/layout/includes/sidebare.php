  <div class="div_form">
    <form action="cart/update" method="post">
      <table class="table table-condensed table-striped table-bordered text-center" style="color: #444">
        <thead>
          <tr>
            <th>QTY</th>
            <th>Name</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
         <?php $i = 1; ?>

         <?php foreach ($this->cart->contents() as $items): ?>
           <input type="hidden" name="<?php echo $i.'[rowid]'; ?>" value="<?php echo $items['rowid']; ?>" >
          

          <tr>
            <td><input type="text" name="<?php echo $i.'[qty]'; ?>" value="<?php echo $items['qty']; ?>" class="qty"></td>
            <td><?php echo $items['name']; ?></td>
            <td>$<?php echo $this->cart->format_number($items['price']); ?></td>
           
          </tr>

          <?php $i++; ?>

        <?php endforeach; ?>
        <tr>
          <td></td>
          <td>Total</td>
          <td>$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
        </tr>
  
   
      </tbody>
    </table>
    <p><button class="btn btn-primary"  type="submit">Update Cart</button> 
     <a href="cart" class="btn btn-default">Go To Cart</a></p>

   </form>
 </div>
 <div class="panel panel-default">
  <div class="panel-heading">Categories</div>
  <div class="panel-body">
   <ul class="list-group">
    <?php  foreach(get_category_h() as $categorie) : ?>
      <li class="list-group-item"><a href="<?php echo base_url(); ?>products/categorie/<?php echo $categorie->id ?>"><?php echo $categorie->name; ?></a></li>
    <?php endforeach; ?> 
  </ul>
</div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">Popular</div>
  <div class="panel-body">
   <ul class="list-group">
     <?php  foreach(get_popular_h() as $popular) : ?>
      <li class="list-group-item"><a href="<?php echo base_url(); ?>products/detail/<?php echo $popular->id ?>"><?php echo $popular->title; ?></a></li>
    <?php endforeach; ?> 
  </ul>
</div>
</div>