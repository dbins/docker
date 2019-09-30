<?php

$dbuser = $_ENV['MYSQL_USER'];
$dbpass = $_ENV['MYSQL_PASS'];

echo ($dbuser);
echo ('<HR>');
echo ($dbpass);
echo ('<HR>');

try {
    $pdo = new PDO("mysql:host=mysql_nginx;dbname=blog", $dbuser, $dbpass);
    $statement = $pdo->prepare("SELECT * FROM posts");
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_OBJ);
    
    echo "<h2>Posts</h2>";
    echo "<ul>";
    foreach ($posts as $post ) {
        echo "<li>".$post->title."</li>";
    }
    echo "</ul>";

} catch(PDOException $e) {
	echo ('erro!');
    echo $e->getMessage();
}
echo ('fim index!');
?>