<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>
  <form method="post" action="<?php echo site_url('welcome/test'); ?>">
    <input type="text" name="ime">
    <input type="text" name="prezime">
    <input type="submit" value="submit">
  </form>
</body>
</html>
