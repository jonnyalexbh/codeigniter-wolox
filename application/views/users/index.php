<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Users</title>
	<link href="<?php echo base_url() ?>assets/application.css" rel="stylesheet">
</head>

<body>
  <a href="<?=site_url('user/create');?>">Add User</a><br><br>
<table id="table">
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
      <td><?php echo $user->id ?></td>
      <td><?php echo $user->name ?></td>
      <td><?php echo $user->email ?></td>
      <td><?php echo $user->phone ?></td>
      <td><a href="<?=site_url('user/show/' . $user->id);?>">See</a></td>
      <td>Edit</td>
      <td>Destroy</td>
    </tr>
  </tbody>
  <?php }?>
</table>
</body>

</html>
