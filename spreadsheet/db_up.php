<?php
  $db = new SQLite3('../auth.sqlite', SQLITE3_OPEN_CREATE | SQLITE3_OPEN_READWRITE);

  $db->query(
  'CREATE TABLE IF NOT EXISTS "students" (
      "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
      "firstname" VARCHAR,
      "lastname" VARCHAR,
      "email" VARCHAR,
      "level" VARCHAR,
      "class" VARCHAR,
      "major" VARCHAR,
      "minor" VARCHAR,
      "hrs" VARCHAR,
      "gpa" VARCHAR
    )'
  );

  $db->query('INSERT INTO students (firstname, lastname, email, level, class, major, minor, hrs, gpa) VALUES ("Moth", "Man", "mothman@odu.edu", "Freshman", "CS150", "Computer Science", "Basket Weaving", "12", "3.9")');
  $db->query('INSERT INTO students (firstname, lastname, email, level, class, major, minor, hrs, gpa) VALUES ("Kylo", "Ren", "hansboy@odu.edu", "Sophmore", "SITH110", "Religious Studies", "Fencing", "15", "2.4")');
  $db->query('INSERT INTO students (firstname, lastname, email, level, class, major, minor, hrs, gpa) VALUES ("Jessie", "Tempesta", "jt@odu.edu", "Junior", "ACCT450", "Accounting", "", "24", "4.0")');
  $db->query('INSERT INTO students (firstname, lastname, email, level, class, major, minor, hrs, gpa) VALUES ("Hanna", "Skywalker", "toothpickfan@odu.edu", "Senior", "SITH110", "Computer Science", "Cybersecurity", "15", "2.4")');

  $db->close();
?>
