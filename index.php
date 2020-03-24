<?php 
    $color = NULL;
    if (!empty($_COOKIE['backgroundColor'])) {
        $color = $_COOKIE['backgroundColor'];
    }
    if (!empty($_POST['color'])) {
        setcookie( 'backgroundColor', $_POST['color'], time()+60*60 );
        $color = $_POST['color'];
    }
    if (empty($color)) {
        $color ='c0';
    }
?>
    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        body {
            font-family: sans-serif;
        }
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
        input[type="radio"] {
            display: none;
        }
        label {
            display: block;
            width: 100px;
            height: 100px;
            cursor: pointer;
            border: 2px solid black;
            border-radius: 4px;
            margin: 10px;
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0);
            transition: box-shadow 0.8s, transform 0.3s;
        }
        label:hover {
            transform: scale(1.02);
        }
        input[type="radio"]:checked + label {
            box-shadow: 0 0 5px 4px rgba(0, 0, 0, 0.25);
        }
        button {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 16px;
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5), inset 0 0 8px rgba(0, 0, 0, 0);
            transition: box-shadow 0.3s;
        }
        button:hover {
            cursor: pointer;
            box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.5), inset 0 0 8px rgba(0, 0, 0, 0.4);
        }
        .c0{
            background-color: #4d526a;
        }
        .c1 {
            background:linear-gradient(45deg, rgba(22, 31, 43, 0.5) 0%, rgba(22, 31, 43, 0.5) 12.5%,rgba(53, 28, 54, 0.5) 12.5%, rgba(53, 28, 54, 0.5) 25%,rgba(83, 25, 65, 0.5) 25%, rgba(83, 25, 65, 0.5) 37.5%,rgba(114, 22, 76, 0.5) 37.5%, rgba(114, 22, 76, 0.5) 50%,rgba(144, 20, 86, 0.5) 50%, rgba(144, 20, 86, 0.5) 62.5%,rgba(175, 17, 97, 0.5) 62.5%, rgba(175, 17, 97, 0.5) 75%,rgba(205, 14, 108, 0.5) 75%, rgba(205, 14, 108, 0.5) 87.5%,rgba(236, 11, 119, 0.5) 87.5%, rgba(236, 11, 119, 0.5) 100%),linear-gradient(135deg, rgb(188, 0, 159) 0%, rgb(188, 0, 159) 12.5%,rgb(173, 4, 150) 12.5%, rgb(173, 4, 150) 25%,rgb(158, 7, 141) 25%, rgb(158, 7, 141) 37.5%,rgb(143, 11, 132) 37.5%, rgb(143, 11, 132) 50%,rgb(129, 15, 124) 50%, rgb(129, 15, 124) 62.5%,rgb(114, 19, 115) 62.5%, rgb(114, 19, 115) 75%,rgb(99, 22, 106) 75%, rgb(99, 22, 106) 87.5%,rgb(84, 26, 97) 87.5%, rgb(84, 26, 97) 100%);
        }
        .c2 {
            background:linear-gradient(45deg, rgba(99, 165, 225, 0.5) 0%, rgba(99, 165, 225, 0.5) 14.286%,rgba(93, 143, 222, 0.5) 14.286%, rgba(93, 143, 222, 0.5) 28.572%,rgba(87, 120, 218, 0.5) 28.572%, rgba(87, 120, 218, 0.5) 42.858%,rgba(81, 98, 215, 0.5) 42.858%, rgba(81, 98, 215, 0.5) 57.144%,rgba(74, 75, 211, 0.5) 57.144%, rgba(74, 75, 211, 0.5) 71.43%,rgba(68, 53, 208, 0.5) 71.43%, rgba(68, 53, 208, 0.5) 85.716%,rgba(62, 30, 204, 0.5) 85.716%, rgba(62, 30, 204, 0.5) 100.002%),linear-gradient(135deg, rgb(128, 8, 46) 0%, rgb(128, 8, 46) 14.286%,rgb(134, 43, 72) 14.286%, rgb(134, 43, 72) 28.572%,rgb(140, 77, 97) 28.572%, rgb(140, 77, 97) 42.858%,rgb(147, 112, 123) 42.858%, rgb(147, 112, 123) 57.144%,rgb(153, 146, 149) 57.144%, rgb(153, 146, 149) 71.43%,rgb(159, 181, 174) 71.43%, rgb(159, 181, 174) 85.716%,rgb(165, 215, 200) 85.716%, rgb(165, 215, 200) 100.002%);
        }
        .c3 {
            background:linear-gradient(45deg, rgb(86, 95, 151) 0%, rgb(86, 95, 151) 63%,rgb(105, 118, 165) 63%, rgb(105, 118, 165) 75%,rgb(125, 141, 179) 75%, rgb(125, 141, 179) 81%,rgb(144, 165, 193) 81%, rgb(144, 165, 193) 85%,rgb(164, 188, 207) 85%, rgb(164, 188, 207) 90%,rgb(183, 211, 221) 90%, rgb(183, 211, 221) 100%);
        }
        .c4 {
            background: linear-gradient(44deg, rgba(243, 243, 243, 0.05) 0%, rgba(243, 243, 243, 0.05) 33.333%,rgba(79, 79, 79, 0.05) 33.333%, rgba(79, 79, 79, 0.05) 66.666%,rgba(9, 9, 9, 0.05) 66.666%, rgba(9, 9, 9, 0.05) 99.999%),linear-gradient(97deg, rgba(150, 150, 150, 0.05) 0%, rgba(150, 150, 150, 0.05) 33.333%,rgba(34, 34, 34, 0.05) 33.333%, rgba(34, 34, 34, 0.05) 66.666%,rgba(40, 40, 40, 0.05) 66.666%, rgba(40, 40, 40, 0.05) 99.999%),linear-gradient(29deg, rgba(56, 56, 56, 0.05) 0%, rgba(56, 56, 56, 0.05) 33.333%,rgba(226, 226, 226, 0.05) 33.333%, rgba(226, 226, 226, 0.05) 66.666%,rgba(221, 221, 221, 0.05) 66.666%, rgba(221, 221, 221, 0.05) 99.999%),linear-gradient(90deg, rgb(163, 238, 211),rgb(149, 75, 252));
        }
        h2 {
            font-weight: 100;
        }
    </style>
</head>
<body class="<?php echo $color ?>">

    <div id="content">

        <h2>Choisissez un background :</h2>

        <form action="" method="post">

            <div class="bg">

                <input type="radio" name="color" id="c1" value="c1">
                <label for="c1" class="c1"></label>

                <input type="radio" name="color" id="c2" value="c2">
                <label for="c2" class="c2"></label>

                <input type="radio" name="color" id="c3" value="c3">
                <label for="c3" class="c3"></label>

                <input type="radio" name="color" id="c4" value="c4">
                <label for="c4" class="c4"></label>

            </div>

            <button>Enregister</button>

        </form>
    </div>
</body>
</html>