<div class="container" style="margin-top: 5%">
  <a style="float: right; margin-bottom: 5%"type="button" class="btn btn-success"href="<?php echo site_url('/perdoruesit/create/')?>">+ Shto Perdorues</a>
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
  	<?php foreach ((array) $perdoruesit as $perdoruesit) : ?> 
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $perdoruesit['fullname']; ?></td>
      <td><?php echo $perdoruesit['email']; ?></td>
      <td><?php echo $perdoruesit['username']; ?></td>
      <td><?php echo $perdoruesit['mobile']; ?></td>
      <td><a type="button" class="btn btn-danger"href="<?php echo site_url('/perdoruesit/delete/'.$perdoruesit['uid']); ?>">Fshij</a>&nbsp<a type="button" class="btn btn-primary"href="perdoruesit/edit/<?php echo $perdoruesit['uid']; ?>">Modifiko</td>

      
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>
</div>
