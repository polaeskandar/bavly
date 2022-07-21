<?php

require_once "./includes/layout/header.php";
require_once "./includes/layout/nav.php";
require_once 'connect.php';
require_once 'functions.php';

?>

<div class="sort-box">
    <form method="GET">
        <button type="submit" name="arrange_asc">ترتيب تصاعدي</button>
    </form method="GET">
    <form>
        <button type="submit" name="arrange_desc">ترتيب تنازلي</button>
    </form>
</div>

<?php
$query = "SELECT * FROM patriarch ORDER BY id desc";

if (isset($_GET['arrange_desc'])) {
  $query = "SELECT * FROM patriarch ORDER BY id desc";
} else if (isset($_GET['arrange_asc'])) {
  $query = "SELECT * FROM patriarch ORDER BY id asc";
}

$stmt = $pdo->query($query);
?>

<div class="patriarchs-container">
  <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
      <a href="details.php?patriarchId=<?php echo $row['id'] ?>">
          <div class="patriarch-box mb-3">
              <div class="card-header">
                  <h3 class="text-black">
                      <b><?php echo $row['id'] . '-' . $row['name']; ?></b>
                  </h3>
              </div>
              <div class="card-body">
                  <h4 class="card-title text-black opacity-75"><?php echo $row['Gregorian']; ?></h4>
              </div>
          </div>
      </a>
  <?php } ?>
</div>

<?php require_once './includes/layout/footer.php'; ?>
