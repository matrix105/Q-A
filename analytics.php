<?php
include_once('./class/class-auth.php');
include_once('./class/class-popup.php');

//ADMIN PROTECTION WITH PASSWORD
require_once 'protect.php';
Protect\with('log.php', 'password');


$CURRENT_PAGE = "Analytics";
$PAGE_TITLE = "Analytics";

$funObj = new dbFunction();
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<?php include './includes/template/head.php' ?>

<body style="overflow: scroll;">
  <?php include './includes/template/navigation.php' ?>

  <?php

  $quests =  array();
  $sql = "SELECT COUNT(quest1) as total FROM `survey` WHERE 1";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $total=$row["total"];

  $items = array();
  for ($x = 1; $x < 5; $x++) {
    $y = "avg";
    $sql1 = "SELECT AVG(quest" . $x . ") AS avg1 FROM `survey` WHERE 1";
    $result1 = $db->query($sql1);
    $row1 = $result1->fetch_assoc();
    $y .= $x;
    $items[] = $row1["avg1"];
  }
  // Chart model imported from https://canvasjs.com/php-charts/bar-chart/ readapted to fit my needs
  $dataPoints = array(
    array("y" => $items[0], "label" => "Question 1"),
    array("y" => $items[1], "label" => "Question 2"),
    array("y" => $items[2], "label" => "Question 3"),
    array("y" => $items[3], "label" => "Question 4"),
  );
  ?>
    <div class="container">
    <script>
      window.onload = function() {
        //defining chart props
        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          title: {
            text: "Analytics on Unit Survey based on qualitative questions "
          },
          axisY: {
            title: "Average result",
            includeZero: true,
          },
          data: [{
            type: "bar",
            yValueFormatString: "#,##.##",
            indexLabel: "{y}",
            indexLabelPlacement: "inside",
            indexLabelFontWeight: "bolder",
            indexLabelFontColor: "white",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
          }]
        });
        chart.render();

      }
    </script>
    </head>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <div>
      <?php
      $questions = " <ul><li> I can see how this unit contributes to my overall programme of study.</li>
      <li>The teaching was effective in helping me learn.</li>
      <li>I found the online resources (e.g. those available by Moodle, lecture notes etc.) supported my learning.</li>
      <li>Overall, I am satisfied with the quality of the unit.</li>
      </ul>";

      $pop = new Popup("Don't remember the questions? <br/> Click Me!", $questions);
      $pop->build();
      ?>
    </div>
      <h3><center>Direct Feedback Questions</center> </h3>
    <div id="accordion">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Question 5: What aspects of the in-person and online teaching worked well on this unit?
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <ul>
            <?php 
             for ($x = 1; $x <= $total; $x++) {
                $sql = "SELECT quest5 FROM `survey` WHERE id=".$x;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
                
                echo "<li>" . (implode($row)) . "</li>";
             }
            ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Question 6: What aspects of the in-person and online teaching could be improved?
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body">
          <ul>
            <?php 
             for ($x = 1; $x <= $total; $x++) {
                $sql = "SELECT quest6 FROM `survey` WHERE id=".$x;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
                
                echo "<li>" . (implode($row)) . "</li>";
             }
            ?>
            </ul>          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Question 7: Any other comments?
            </button>
          </h5>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body">
          <ul>
            <?php 
             for ($x = 1; $x <= $total; $x++) {
                $sql = "SELECT quest7 FROM `survey` WHERE id=".$x;
                $result = $db->query($sql);
                $row = $result->fetch_assoc();
                
                echo "<li>" . (implode($row)) . "</li>";
             }
            ?>
            </ul>          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>
