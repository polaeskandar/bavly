<?php

include 'constants.php';
include "./includes/layout/header.php";
include "./includes/layout/nav.php";
include 'connect.php';
include 'functions.php';

if (isset($_GET["search"]) && $_GET["search"] != null) {
  $searchTerm = $_GET['search'];
  $stmt = $pdo->query("SELECT * FROM patriarch WHERE name LIKE '%$searchTerm%' OR id LIKE '%$searchTerm%' OR Gregorian LIKE '%$searchTerm%'");
  $count = $stmt->rowCount();

  if ($count) { ?>
      <p class="result-count">وٌجِد <?php echo $count ?> نتيجة بحث</p>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
          <div class="patriarch-details-container search">
              <div class="image">
                  <img src="<?php echo $mediaPath . 'img/' . $row['image'] ?>" style="" alt="patriarch_<?php echo $patriarchId ?>"/>
              </div>
              <div class="content">
                  <h3 class="text-black"><b><?php echo $row['id'] . '-' . $row['name']; ?></b></h3>
                  <h2 class="card-title opacity-75"><?php echo $row['Gregorian']; ?></h2>
                <?php echo getPatriarchDetails($row['body']) ?>
              </div>
          </div>
          <hr>
    <?php }
  } else { ?>
      <div class="data-not-found">
          <img src="<?php echo $mediaPath ?>/img/not-found.jpeg" alt="not_found">
          <p>عفواً لا يوجد بيانات</p>
      </div>
  <?php }
} else if (isset($_GET["search"])) { ?>
    <div class="data-not-found">
        <img src="<?php echo $mediaPath ?>/img/no-data.jpeg" alt="no_data_found">
        <p>ادخل اسم أو رقم أو تاريخ بطرك في خانة البحث</p>
    </div>
<?php }

include './includes/layout/footer.php'; ?>
