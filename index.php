<?php
function data_filter($data) {
  $result = trim($data);
  $result = stripslashes($data);
  $result = htmlspecialchars($data);
  return $result;
}


if (isset($_POST["demo"]) && $_POST["demo"] !== "") {
  $pattern = "/(<.*>.*<\s*\/.*>)|(&#?.*;)/i";
  $valid = preg_match_all($pattern, $_POST["demo"]);
  if ($valid == 0) {
    $clean_data = data_filter($_POST["demo"]);
    ?><script>alert("Your data stashed successfuly!")</script><?php
  } else {
    ?><script>alert("Your data is Invalid. try again.")</script><?php
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>regEx for prevent some xss</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color: #dbeeff;
      color: #111;
    }

    input {
      font-size: 16px;
    }

    input[type='text'] {
      width: 300px;
      padding: 12px;
    }

    button {
      width: 75px;
      padding: 12px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <form action="index.php" method="post">
    <input name="demo" type="text" placeholder="try regEx">
    <button type="submit">Submit</button>
  </form>
</body>
</html>