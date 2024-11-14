<?php

    function getUser($link, $id){

        $sql = "SELECT * FROM users WHERE id=$id";
        $result = mysqli_query($link, $sql);

        while($user = mysqli_fetch_array($result)){
            extract($user);
        }

        return;
    }