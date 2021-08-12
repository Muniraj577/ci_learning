<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Codeigniter 3 CRUD Example from scratch</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="<?php echo base_url('category/create') ?>"> Create New Item</a>
        </div>
    </div>
</div>


<table class="table table-bordered">


  <thead>
      <tr>
          <th>Title</th>
          <th>Slug</th>
          <th width="220px">Action</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($data as $item): ?>      
      <tr>
          <td><?php echo $item->title; ?></td>
          <td><?php echo $item->slug; ?></td>          
      <td>
        <!-- <form method="DELETE" action="<?php echo base_url('category/delete/'.$item->id);?>">
         
          <button type="submit" class="btn btn-danger"> Delete</button>
        </form> -->
         <!-- <a class="btn btn-info" href="<?php echo base_url('category/'.$item->id) ?>"> show</a> -->
         <a class="btn btn-primary" href="<?php echo base_url('category/edit/'.$item->id) ?>"> Edit</a>
      </td>     
      </tr>
      <?php endforeach; ?>
  </tbody>


</table>