<?php
  $data = $_POST;

  if (empty($data['username']) ||
    empty($data['phone']) ||
    empty($data['noted'])) {
      die('Please fill all required fields!');
  }

