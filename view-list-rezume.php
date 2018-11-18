<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <link href="css/reset.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 
    <script type="text/javascript" src="js/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <title>Просмотреть список резюме</title>
  </head>
  <body>
    <div id="block-content">
      <!--Список резюме-->
      <div id="spisok">Список резюме</div>
        <div id="list-links" >
          <table  cellpadding="6" cellspacing="2" > 
            <?php
              include("db_connect.php");//Подключение к бд
              $result=mysqli_query($link,"SELECT * FROM `rezume`");// запрос на выборку
                echo '<tr align="center" >
                  <th> № </th>
                  <th>Название резюме</th>
                  <th>Фамилия</th>
                  <th>Имя</th>
                  <th>E-mail</th>
                  <th>Телефон</th>
                  <th>Ссылка</th>
                  </tr>
                '; 
                while($row=mysqli_fetch_array($result)) // берем результаты из каждой строки
                { 
                  $mass="<a href=\"/uploads/". $row['file_name'] . "\" download>" . "Скачать</a>";
                  echo '
                    <tr align="left">
                    <td> '.$row['id'].'
                    <td> '.$row['file_name'].'
                    <td> '.$row['surname'].'
                    <td> '.$row['users_name'].'
                    <td> '.$row['email'].'
                    <td> '.$row['phone'].'
                    <td> '.$mass.'
                    </tr>
                  '; 
                }
                echo '</table>';              
            ?>
          </table>                             
      </div>
    </div>
  </body>
</html>
                 