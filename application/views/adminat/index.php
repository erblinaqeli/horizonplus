<div class="container" style="margin-top: 5%">
  <a style="float: right; margin-bottom: 5%"type="button" class="btn btn-success"href="<?php echo site_url('/adminat/create/')?>">+ SHTO ADMIN</a>
<table class="table table-bordered">

  <thead>
    <tr>
      <th scope="col"><?php $i = 1; ?></th>
      <th scope="col">Emri Mbiemri</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Mobile</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ((array) $adminat as $adminat) : ?> 
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $adminat['fullname']; ?></td>
      <td><?php echo $adminat['email']; ?></td>
      <td><?php echo $adminat['username']; ?></td>
      <td><?php echo $adminat['mobile']; ?></td>
      <td><a type="button" class="btn btn-danger"href="<?php echo site_url('/adminat/delete/'.$adminat['uid']); ?>">Fshij</a>&nbsp<a type="button" class="btn btn-primary"href="adminat/edit/<?php echo $adminat['uid']; ?>">Modifiko</td>

      
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>
</div>
