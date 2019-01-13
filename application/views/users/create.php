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
  <h2>Add</h2>
  <?php echo form_open('user/store'); ?>
  <label for="name">Name</label>
    <input type="input" name="name" /><br />

    <label for="email">Email</label>
    <input type="input" name="email" /><br />

    <label for="phone">Phone</label>
    <input type="input" name="phone" /><br />

    <input type="submit" name="submit" value="Create user" />
    <a href="<?=base_url('users');?>">return</a>
  </form>
</body>

</html>
