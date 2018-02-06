
<?php require 'database/connection.php' ?>
<?php require 'database/takefromsql.php' ?>

<!Doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/superhero/bootstrap.min.css"/>
    <title>Visitbookms-idi.eu</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="URL: https://www.google.com/recaptcha/api/siteverify">
</head>
<body>
<div class="container">
      <?php $guestbook_list = get_guestbook_data($connection); ?>
      <?php foreach ($guestbook_list as $list): ?>
        <table class="table table-hover">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Website</th>
                    <th scope="col">Text</th>
                    <th scope="col">IP</th>
                    <th scope="col">Browser</th>
                    <th scope="col">Date</th>
                </tr>
                <tr class="table-active">
                    <td><?=$list['id']?></td>
                    <td><?=$list['name']?></td>
                    <td><?=$list["email"]?></td>
                    <td><?=$list["website"]?></td>
                    <td><?=$list["text"]?></td>
                    <td><?=$list["ip-suer"]?></td>
                    <td><?=$list["browserInfo"]?></td>
                    <td><?=$list["date"]?></td>
                </tr>
        </table>

      <?php endforeach; ?>


</div>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
