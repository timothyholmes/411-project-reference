<?php
  $db = new SQLite3('../auth.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

  $db->query(
  'CREATE TABLE IF NOT EXISTS "users" (
      "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
      "username" VARCHAR,
      "password" VARCHAR,
      "email" VARCHAR
    )'
  );

  $db->close();
?>
