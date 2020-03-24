<?php 
    $color = NULL;
    if (!empty($_COOKIE['backgroundColor'])) {
        $color = $_COOKIE['backgroundColor'];
    }
    if (!empty($_POST['color'])) {
        setcookie( 'backgroundColor', $_POST['color'], time()+60*60 );
    }
?>
    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        #content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .bg {
            display: flex;
        }
        form {
            height: 40vh;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
}
        }
        input {
            /* opacity: 0; */
            
        }
        label {
            display: block;
            width: 100px;
            height: 100px;
            cursor: pointer;
            border: 2px solid black;
            border-radius: 4px;
            margin: 10px;
        }
        .bleu {
            background-color: blue;
        }
        .red {
            background-color: red;
        }

    </style>
</head>
<body>

    

    <div id="content">

        <h3>Choisissez un background :</h3>

        <form action="" method="post">
            <div class="bg">
                <input type="radio" name="color" id="bleu" value="bleu">
                <label for="bleu" class="bleu">Scales</label>
    
                <input type="radio" name="color" id="red" value="red">
                <label for="red" class="red">Scales</label>
            </div>

            <input type="submit" value="Enregister">

        </form>
    </div>
</body>
</html>