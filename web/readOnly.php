<?php
require "dbConnect.php";

$db = get_db();

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Blog</title>
    </head>

    <body>
        <div>
            <h1>Blog Search</h1>
<?php
    $statement = $db->prepare("SELECT date, postName, author, genre FROM posts");
    $statement->execute();

    while($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $date = $row['date'];
        $postName = $row['postName'];
        $author = $row['author'];
        $genre = $row['genre'];
    }
?>

        </div>
    </body>
</html>