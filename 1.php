<?php
  $maths = 60;
  $chemistry = 70;
  $physics = 80;
  $social = 90;
  $english = 95;

  $total = $maths + $chemistry + $physics + $social + $english;

  $percentage = ($total / 500) * 100;

  echo("Total Marks = ".$total."<br>");
  echo("Total Percentage = ".$percentage."<br>");

  if ($percentage >= 80) {
    echo("Result = Grade A");
  }
  elseif ($percentage < 80 && $percentage >= 60) {
    echo("Result = Grade B");
  }
  elseif ($percentage < 60 && $percentage >= 45) {
    echo("result = Grade C");
  }
  else {
    echo("fail");
  }
?>