<?php


function get_guestbook_data($link) {

    $sql = "SELECT * FROM `guestbook`";

    $result = mysqli_query($link, $sql);

    $guestbook_list = mysqli_fetch_all($result, 1);

    return $guestbook_list ;
}

function get_posts() {

  global $connetection;

  $sql = "SELECT * FROM `guestbook`";

  $result = mysql_query($connection, $sql);

  $posts = mysqli_fetch_all($result, 1);

  return $posts;

}

?>
