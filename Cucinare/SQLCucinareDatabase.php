<?php

    $theUserCredentials = "CREATE TABEL 'account' 
                            (
                                'id' int(10) unsigned NOT NULL QUDO_INCREMENT,
                                'username' varchar(25) NOT NULL,
                                'password' varchar(255) NOT NULL,
                                'email' varchar(100) NOT NULL,
                                PRIMARY KEY ('id'),
                                UNIQUE KET 'username' ('username')
                            )
                            ;";

    $usersInformationInputContent = "CREATE TABEL 'account'
                                    (
                                        'id' int(10) NOT NULL,
                                        'recipeDocname' varchar(200) NOT NULL,
                                        'username' varchar(200) NOT NULL,
                                    )
                                    ;";
?>