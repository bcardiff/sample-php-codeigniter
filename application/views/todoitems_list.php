<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <h1>Todo Items</h1>
  <ul>
  <?php foreach ($items as $item): ?>
    <li><?php echo $item['description']; ?></li>
  <?php endforeach; ?>
  </ul>
</body>
