<?php
$age=17;
$genre='femme';
if ($age<18 && $genre == 'homme') {
  echo 'Vous êtes un homme et vous êtes mineur';
}elseif ($age<18 && $genre == 'femme') {
  echo 'Vous êtes une femme et vous êtes mineur';
}elseif ($age>=18 && $genre == 'femme') {
  echo 'Vous êtes une femme et vous êtes majeur';
}else {
  echo 'Vous êtes un homme et vous êtes majeur';
}
 ?>
