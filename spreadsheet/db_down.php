<?php
  $db = new SQLite3('../auth.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

  $db->query(
  'DROP TABLE students'
  );

  $db->close();
?>
