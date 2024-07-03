<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет банка</title>
    
        <style> 
        body { 
            font-family: Arial, sans-serif; 
            background-color: #3D3D3D; 
            margin: 0; 
            padding: 0; 
            color: #ffffff;
        } 
        .container { 
            width: 80%; 
            margin: auto; 
            overflow: hidden; 
        } 


        .container_wrap {
            width: 80%; 
            margin: auto; 
            overflow: hidden;
            margin-top: 150px;
            margin-bottom: 120px;
            font-size: 21px;
        }


        span {
            background-color:#FC850E; 
            margin-left:10px; 
            border-radius:4px; 
            padding:5px; 
            color: #000; 
            font-size:32px;
            cursor:pointer;
        }

        span:hover {
            background-color: #fff;
            color: #FC850E;
            transition: 0.5s;
        }


        header { 
            background: #000000; 
            color: white; 
            padding-top: 30px; 
            min-height: 70px; 
            border-bottom: #FC850E 7px solid;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 100%; 

        } 
        header a { 
            color: #ffffff; 
            text-decoration: none; 
            text-transform: uppercase; 
            font-size: 23px; 
            transition: 0.5s;
        } 
        header ul { 
            padding: 0; 
            list-style: none; 
        } 
        header ul li { 
            float: left; 
            display: inline; 
            padding: 0 20px 0 20px; 
        } 
        header #branding { 
            float: left; 
        } 
        header #branding h1 { 
            margin: 0; 
        } 
        header nav { 
            float: right; 
            margin-top: 0px; 
        } 
        header .highlight, header .current a { 
            color: #FC850E; 
            font-weight: bold;
            transition: 0.5s; 
            
        } 

        header .highlight, header .current a:hover { 
            color: #ffffff; 
            font-weight: bold; 
            transition: 0.5s;
            
        } 

        
        header a:hover { 
            color: #FC850E; 
            transition: 0.5s;
             
        } 

        footer {
        background-color: #000000; 
        color: #ffffff; /* темно-серый текст */
        padding: 40px 0; /* вертикальный отступ */
        text-align: center; /* выравнивание текста по центру */
        font-size: 18px; /* увеличенный размер шрифта */
        }

        footer {
        border-top: #FC850E 7px solid;
        font-size: 22px; /* уменьшенный размер шрифта */
        position: relative;
        bottom: 0; /* Прижимает футер к нижней части страницы */
        left: 0; /* Прижимает футер к левому краю страницы */
        width: 100%; /* Футер растягивается на всю ширину страницы */
        z-index: 1000; /* Устанавливает футер поверх других элементов */
        }
 
        button { 
            background-color: #000; 
            border-bottom: #FC850E 5px solid; 
            border-left: none; 
            border-right: none;
            border-top: none;
            color: white; 
            padding: 10px 25px; 
            text-align: center; 
            text-decoration: none; 
            display: inline-block; 
            font-size: 23px; 
            margin: 20px 2px; 
            cursor: pointer; 
            border-radius: 4px; 
            transition: 0.5s; 
            filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.3));
        } 
 
         
        button:hover { 
            background-color: #1F1F1F;
            transition: 0.5s; 
        } 

        #branding {
            font-size: 18px;
            padding-top: 5px;
            color: #fff;
        }

        .editing p {
            margin-top: 5px;
        }

        .editing input {
            width: 230px;
            height: 25px;
            border: #FC850E 1px solid;
            border-radius: 4px;
            filter: drop-shadow(2px 2px 2px rgba(0,0,0,0.3));
            margin-left: 5px;
        }

        .special_card {
            height: auto;
            width: 60%;
            background-color: #ffffff;
            border: #004d1a 1px solid;
            border-radius: 4px;
            margin-top: 20px;
            padding: 10px 30px;
            color: #000000;
            filter: drop-shadow(5px 5px 5px rgba(0,0,0,0.3));
        }

        .basket-card {
            height: auto;
            width: auto;
            background-color: #ffffff;
            border: #004d1a 1px solid;
            border-radius: 4px;
            margin-top: 20px;
            padding: 10px 20px;
        }

        .basket-container {
            width: 60%;
            height: auto;
            background-color: #00802b;
            border: #004d1a 1px solid;
            border-radius: 4px;
            padding: 20px 20px 30px 20px;
            margin-bottom: 60px;

        }


        .basket-content {
            display: flex;
            justify-content: space-between;
        }

        .basket-card-item1 {
            width: 40%;
            margin-left: 20px;
        }

        .basket-card-item2 {
            width: 80%;
            margin-top: 20px;
            margin-left: 20px;
        }

        .basket-card-item3 {
            width: 60%;
            margin-left: 20px;
            margin-top: 45px;
            text-align: center;
            align-items: center;
            font-size: 20px;
        }

        #sell {
            background-color: #00cc44;
            font-weight: 600;
        }

        #sell:hover{
            background-color: #006622;
            font-weight: 600;
        }
    
    </style>
</head>
<body>
    <header>
    <div class="container"> 
            <div id="branding"> 
                <h1>Банк<span >Плюс</span></h1> 
            </div> 
            <nav> 
                <ul> 
                    <li><a href="">Главная</a></li> 
                    <li><a href="index.php">Авторизация</a></li> 
                    <li class="current"><a href="index.php">Личный кабинет </a></li> 
                    <li><a href="">О нас</a></li> 
                    <li><a href="">Контакты</a></li> 
                </ul> 
            </nav> 
        </div>
    </header>

    <div class="container_wrap">
        <!-- Содержимое личного кабинета -->
        <h2>Личный кабинет пользователя</h2>
        <!-- Вывод данных пользователя -->
        <?php
            $host = '127.0.0.1';
            $database = 'Bank';
            $user = ' ';
            $password = '12345'; /*У меня в phpMyAdmin стоит пароль, если в шаражне нет пароля вместо '12345' пишите ' ' (оставить пустым короче)*/ 

            $mysqli = new mysqli($host, $user, $password, $database);

            if ($mysqli->connect_error) {
                die("Ошибка подключения: " . $mysqli->connect_error);
            }

            $query = "SET NAMES utf8";
            $mysqli->query($query);

            $query = "SELECT * FROM users";
            $results = $mysqli->query($query);

            if ($results) {
                while ($row = $results->fetch_assoc()) {

                    echo "<p>Id на сайте банка: №" . htmlspecialchars($row["userId"]) . "</p>";
                    echo "<p>Имя: " . htmlspecialchars($row["name"]) . "</p>";
                    echo "<p>Email: " . htmlspecialchars($row["email"]) . "</p>";
                }
            } else {
                echo "Ошибка запроса: " . $mysqli->error;
            }

            $mysqli->close();
        ?>


        <h2>Редактировать информацию:</h2>

    <?php
    // Проверка, была ли отправлена форма
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Подключение к базе данных
        $host = '127.0.0.1';
        $database = 'Bank';
        $user = 'root';
        $password = '12345';
        $mysqli = new mysqli($host, $user, $password, $database);

        // Проверка подключения
        if ($mysqli->connect_error) {
            die("Ошибка подключения: " . $mysqli->connect_error);
        }

        // Получение данных из формы
        $userId = $mysqli->real_escape_string($_POST['id']);
        $userName = $mysqli->real_escape_string($_POST['name']);
        $userEmail = $mysqli->real_escape_string($_POST['email']);

        // Проверка наличия ID пользователя
        if (empty($userId)) {
            echo '<p style="margin-bottom: 20px;">Важно: Для изменения информации обязательно укажите ваш ID на сайте банка</p>';
        } else {
            // Обновление данных в базе
            $query = "UPDATE users SET name = ?, email = ? WHERE userId = ?";
            $stmt = $mysqli->prepare($query);

            // Проверка на ошибки в SQL-запросе
            if ($stmt === false) {
                die("Ошибка при подготовке запроса: " . $mysqli->error);
            }

            $stmt->bind_param("ssi", $userName, $userEmail, $userId);

            if ($stmt->execute()) {
                echo '<p style="margin-bottom: 20px;">Информация обновлена успешно! Перезагрузите страницу!</p>';
            } else {
                echo '<p style="margin-bottom: 20px;">Ошибка при обновлении информации: </p>' . $stmt->error;
            }

            // Закрытие подготовленного запроса
            $stmt->close();
        }

        // Закрытие подключения
        $mysqli->close();
    }
    ?>

        
        <!-- Форма для редактирования данных пользователя -->
        <form class="editing" method="post">        
            <p>Введите ваш ID: <input type="text" name="id" value=""><br></p>
            <p>Изменить Имя: <input type="text" name="name" value="" style="margin-left:17px;"><br></p>
            <p>Изменить Email: <input type="email" name="email" value=""><br></p>
            <button type="submit" value="Сохранить изменения">Сохранить изменения</button>
        </form>
        
    
        

        <h2>Специальные предложения:</h2>
        <?php
            $host = '127.0.0.1';
            $database = 'Bank';
            $user = 'root';
            $password = '12345';

            $mysqli = new mysqli($host, $user, $password, $database);

            if ($mysqli->connect_error) {
                die("Ошибка подключения: " . $mysqli->connect_error);
            }

            $query = "SET NAMES utf8";
            $mysqli->query($query);

            $query = "SELECT * FROM specials";
            $results = $mysqli->query($query);

            if ($results) {
                while ($row = $results->fetch_assoc()) {
                    echo '
                    <div class="special_card">
                        <h3>'.$row["title"].'</h3>
                        <p>'.$row["text"].'</p>
                        <button style="width: 25%; margin-top: 30px;">'.$row["amount"].'</button>
                    </div>
                    ';
                }
            } else {
                echo "Ошибка запроса: " . $mysqli->error;
            }

            $mysqli->close();
        ?>
        

    </div>
    <footer>
    Банк в г.Барнаул <br><p style="margin-top: 10px; margin-bottom:-10px;">тел. +7-913-567-78-89</p> 
    </footer>
</body>
</html>