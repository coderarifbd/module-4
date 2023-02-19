<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Project</title>
</head>
<body>
    <h1>Search student Name</h1>
    <form action="index.php" method="get">
        <label for="student">Search by title:</label>
        <input type="text" id="student" name="student">
        <button type="submit">Search</button>
    </form>
    <br>
    <?php
    $query = isset($_GET['student']) ? $_GET['student'] : '';
    echo "User is searched for ".$query."<br/></br>";

    $results = Search_student( $query );

    function Search_student( $query ){
        $db = array("Faisal", "Talha", "Afnan", "Ariful");
        $searchResult = array_search( $query, $db);
        if($searchResult !== false){
            printf("The searched student %s is at index %s", $query, $searchResult);
        }else{
            printf("The searched student %s is not found in our database", $query);
        }
    }
    ?>
</body>
</html>