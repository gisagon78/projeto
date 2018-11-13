<?php
  $host = "ec2-107-20-193-206.compute-1.amazonaws.com";
  $port = "5432";
  $dbname = "dac0ec92rbjkmv";
  $user = "wkuvcbhovaguby";
  $password = "db59ffca0cac70945183a6b98827d4323632a8c261436df4b8ff352618ba158b";
  $pg_options = "--client_encoding=UTF8";

  function getConnection() {
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
    $dbconn = pg_connect($connection_string);
  }


