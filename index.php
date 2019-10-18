<?php

class Database
{
  public $host = "localhost";
  public $user = "root";
  public $password = null;
  public $database = "pbo";

  public function __construct()
  {
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);

    if ($conn) {
      echo "<h1>Database Terkoneksi</h1>";
    } else {
      echo "<h1>Database Tidak Terkoneksi</h1>";
    }
  }
}

$database = new Database();

?>

<style>
  h1 {
    font-size: 50px;
    font-family: Arial, Helvetica, sans-serif;
  }
</style>

<table>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td>Lukman hakim</td>
  </tr>
  <tr>
    <td>NRP</td>
    <td>:</td>
    <td>17010018</td>
  </tr>
  <tr>
    <td>MK</td>
    <td>:</td>
    <td>Object Oriented Programming</td>
  </tr>
</table>