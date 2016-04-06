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
    <li>
      <?php echo $item['description']; ?>
      -
      <?php echo anchor('/done?id='.$item['id'], 'mark as done'); ?>
    </li>
  <?php endforeach; ?>
  </ul>
  <?php echo form_open('/create'); ?>
    <input type="text" name="description" />
    <input type="submit" value="Add" />
  </form>
</body>
