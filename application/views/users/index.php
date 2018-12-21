<a href="<?=site_url('user/create');?>">Add User</a><br><br>
<?php
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
}
?>
<table class="tbl-green">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th colspan="3">Actions</th>
    </tr>
  </thead>
  <?php foreach ($users as $user) {?>
  <tbody>
    <tr>
      <td><?= $user->id ?></td>
      <td><?= $user->name ?></td>
      <td><?= $user->email ?></td>
      <td><?= $user->phone ?></td>
      <td><a href="<?=site_url('user/show/' . $user->id);?>">See</a></td>
      <td><a href="<?=site_url('user/edit/' . $user->id);?>">Edit</a></td>
      <td><a href="<?=site_url('user/destroy/' . $user->id);?>">Destroy</a></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
