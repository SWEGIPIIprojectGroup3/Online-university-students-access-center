<?php
class Stars {
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo;
  private $stmt;
  public $error;
  function __construct () {
    try {
      $this->pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
        ]
      );
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }

  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct () {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }

  // (C) SAVE/UPDATE USER STAR RATING
  function save ($pid, $uid, $stars) {
    try {
      $this->stmt = $this->pdo->prepare(
        "REPLACE INTO `laundaryrating` (`providername`, `username`, `rating`) VALUES (?,?,?)"
      );
      $this->stmt->execute([$pid, $uid, $stars]);
      return true;
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }
  }

  // (D) GET USER STAR RATINGS
  function get ($uid) {
    $this->stmt = $this->pdo->prepare(
      "SELECT * FROM `laundaryrating` WHERE `username`=?"
    );
    $this->stmt->execute([$uid]);
    $ratings = [];
    while ($row = $this->stmt->fetch()) {
      $ratings[$row["providername"]] = $row["rating"];
    }
    return $ratings;
  }

  // (E) GET AVERAGE STAR RATING
  function avg () {
    $this->stmt = $this->pdo->prepare(
      "SELECT `providername`, ROUND(AVG(`rating`), 2) `avg`, COUNT(`username`) `num`
       FROM `laundaryrating`
       GROUP BY `providername`"
    );
    $this->stmt->execute();
    $average = [];
    while ($row = $this->stmt->fetch()) {
      $average[$row["providername"]] = [
        "avg" => $row["avg"], // AVERAGE RATING
        "num" => $row["num"] // NUMBER OF REVIEWS
      ];
    }
    return $average;
  }
}

// (F) DATABASE SETTINGS - CHANGE TO YOUR OWN !
define("DB_HOST", "localhost");
define("DB_NAME", "online students access center");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (G) NEW STARS OBJECT
$_STARS = new Stars();
