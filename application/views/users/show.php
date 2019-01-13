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
    <h2><?=$user->name;?></h2>
    <p>
      <?=$user->id;?> <br>
      <?=$user->email;?> <br>
      <?=$user->phone;?> <br>
    </p>
    <a href="<?=base_url('users');?>">return</a>
</body>

</html>
