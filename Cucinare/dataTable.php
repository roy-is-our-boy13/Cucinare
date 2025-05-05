<?php

    if(isset($_POST['search']))
    {
        $SearchRecipe = $_POST['RecipeToSearch'];

        $query = "SELECT * FROM `users` WHERE CONCAT(`username`, `email`) LIKE '%".$SearchRecipe."%'";
        $search_result = filterTable($query);

    }
    else 
    {
        $query = "SELECT * FROM `users`";
        $search_result = filterTable($query);
    }

    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "cucinare");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
?>

