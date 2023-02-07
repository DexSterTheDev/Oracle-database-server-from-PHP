<?php
  $conn = oci_connect('username', 'password', '//hostname/orcl');
  if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
  }
  echo 'Connected to Oracle database.';
  oci_close($conn);
?>
