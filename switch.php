<?php

// Get the selected color from the form
$color = $_POST['color'];

// Use a switch statement to output different messages based on the selected color
switch ($color) {
  case 'red':
    echo 'You have chosen red.';
    break;
  case 'green':
    echo 'You have chosen green.';
    break;
  case 'blue':
    echo 'You have chosen blue.';
    break;
  default:
    echo 'Please choose a color.';
}
?>

<html>
<form action="" method="post">
  <label for="color">Choose a color:</label>
  <select id="color" name="color">
    <option value="red">Red</option>
    <option value="green">Green</option>
    <option value="blue">Blue</option>
  </select>
  <button type="submit">Go</button>
</form>

</html>