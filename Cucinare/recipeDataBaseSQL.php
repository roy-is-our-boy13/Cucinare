<?php

    $recipeData = "CREATE TABLE `RecipeColums` 
                    (
                        'recipe' varchar(255) NOT NULL,
                        `ten` varchar(255) NOT NULL,
                        `evleven` varchar(255) NOT NULL,
                        `twelve` varchar(255) NOT NULL,
                        `thrirteen` varchar(255) NOT NULL,
                        `fourteen` varchar(255) NOT NULL,
                        `fifthteen` varchar(255) NOT NULL,
                        `sixteen` varchar(255) NOT NULL,
                        `seventeen` varchar(255) NOT NULL,
                        `eighteen` varchar(255) NOT NULL,
                        `nineteen` varchar(255) NOT NULL,
                        `twenty` varchar(255) NOT NULL,
                        `twentyone` varchar(255) NOT NULL,
                        `twentytwo` varchar(255) NOT NULL,
                        `twentythree` varchar(255) NOT NULL,
                        `twentyfour` varchar(255) NOT NULL,
                        `twentyfive` varchar(255) NOT NULL,
                        `twentysix` varchar(255) NOT NULL,
                        `twentyseven` varchar(255) NOT NULL,
                        `twentyeight` varchar(255) NOT NULL,
                        `twentyine` varchar(255) NOT NULL,
                        `thirty` varchar(255) NOT NULL,
                    ) 
                    ENGINE=InnoDB DEFAULT CHARSET=latin1;";

    $theRevipe = "ALTER TABLE 'Recipe'
                    ADD PRIMARY KEY ('save')";
?>
