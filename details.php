<?php

include 'constants.php';
include "./includes/layout/header.php";
include "./includes/layout/nav.php";
include 'connect.php';
include 'functions.php';

if (isset($_GET['patriarchId']) && $_GET['patriarchId']) {
  $patriarchId = $_GET['patriarchId'];
  $query = "SELECT * FROM patriarch WHERE id = $patriarchId";
  $stmt = $pdo->query($query);
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
      <div class="patriarch-details-container">
          <div class="image">
              <img src="<?php echo $mediaPath . 'img/' . $row['image'] ?>" style="" alt="patriarch_<?php echo $patriarchId ?>"/>
          </div>
          <div class="content">
              <h3 class="text-black"><b><?php echo $row['id'] . '-' . $row['name']; ?></b></h3>
              <h2 class="card-title opacity-75"><?php echo $row['Gregorian']; ?></h2>
            <?php echo getPatriarchDetails($row['body']) ?>
              <a class="mt-3 text-primary d-block text-start" href="patriarchs.php">إلي صفحة الأباء البطاركة...</a>
          </div>
      </div>

      <script>
          document.addEventListener('selectionchange', function () {
              let selectedText = window.getSelection().toString();
              selectedText += '\nاقرأ المزيد عن هذا البطرك من ذلك الرابط: <?php echo $currentPageURL; ?>';
              navigator.clipboard.writeText(selectedText).then(function() {
                  console.log('Async: Copying to clipboard was successful!');
              }, function(err) {
                  console.error('Async: Could not copy text: ', err);
              });
          });
      </script>
  <?php }
} else {
  header('Location: http://localhost/');
}

include './includes/layout/footer.php';

