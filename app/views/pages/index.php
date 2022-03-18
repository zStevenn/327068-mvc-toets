<?php
// echo $data['name'];
// echo URLROOT;
var_dump($data);

foreach ($data['users'] as $user) {
  echo "Information: " . $user->user_name . $user->user_email;
  echo "<br>";
}
