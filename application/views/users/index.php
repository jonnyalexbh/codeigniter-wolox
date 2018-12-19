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
<table id="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
    </tr>
  </thead>
  <?php foreach ($users as $user) {?>
  <tbody>
    <tr>
      <td><?php echo $user->id ?></td>
      <td><?php echo $user->name ?></td>
      <td><?php echo $user->email ?></td>
      <td><?php echo $user->phone ?></td>
    </tr>
  </tbody>
  <?php }?>
</table>
</body>

</html>
