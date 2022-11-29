<div class="container" style="margin-top: 5%">
  <h3 style="margin-bottom: 5%">Kerkesat ne Pritje per Aprovim apo Refuzim</h3>
<table class="table table-bordered">

  <thead>
    <tr>
      <th scope="col"><?php $i = 1; ?></th>
      <th scope="col">Emri Mbiemri</th>
      <th scope="col">Numri Llogaris</th>
      <th scope="col">Arsyeja</th>
      <th scope="col">Aprovim/Refuzim</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach ((array) $borgjet as $borgjet) : ?> 
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $borgjet['fullname']; ?></td>
      <td><?php echo $borgjet['account_nr']; ?></td>
      <td><?php echo $borgjet['arsyeja']; ?></td>

     

       <td><a type="button" class="btn btn-danger"href="<?php echo site_url('/perdoruesit/delete_borgj/'.$borgjet['bid']); ?>">Refuzo</a>&nbsp<a type="button" class="btn btn-primary"href="editB/<?php echo $borgjet['bid']; ?>">Modifiko/Aprovo</td>
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>
</div>
