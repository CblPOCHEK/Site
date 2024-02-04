<?php
// Подключение к базе данных (замените данными вашей БД)
$servername = "ваш_хост";
$username = "ваше_имя_пользователя";
$password = "ваш_пароль";
$dbname = "ваша_база_данных";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Запрос к базе данных (замените на свой запрос)
$sql = "SELECT * FROM wines";
$result = $conn->query($sql);

// Отображение данных
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="wine-card" onclick="window.location.href=\'wine_page.php?id=' . $row["id"] . '\'">';
        echo '<img class="wine-img" src="' . $row["image_path"] . '" alt="' . $row["name"] . '">';
        echo '<p>' . $row["name"] . '</p>';
        echo '<p>' . $row["price"] . '</p>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>


<a href="another_page.html" style="display: block; margin-top: 50px;">
        <img src="1.png" alt="Another Image" style="width: 100%; border-radius: 20px;">
</a>