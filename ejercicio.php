<?php
// Conectar a la base de datos utilizando MySQLi
$mysqli = new mysqli('localhost', 'root', 'root', 'moviesite');

if ($mysqli->connect_error) {
    die('Unable to connect. Check your connection parameters: ' . $mysqli->connect_error);
}

$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment, review_rating)
VALUES 
    (4, "2023-05-18", "Raul", "Me gusta mucho la película", 5),
    (5, "2021-11-08", "Tomás", "Muy joven para mi.", 4),
    (6, "2022-02-23", "Nayade", "No es mi favorita.", 3)
ENDSQL;

if ($mysqli->query($query) === false) {
    die('Error inserting data: ' . $mysqli->error);
}

echo 'Three new reviews added successfully!';
?>