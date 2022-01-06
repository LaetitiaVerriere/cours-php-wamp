<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Document</title>
</head>
<body>
    <nav class="nav-bar">
        <ul>
            <li><a href=""><div class="list-element">Menu 1</div></a>
            </li>
            <li><a href=""><div class="list-element">Menu 2</div></a>
            </li>
            <li><a href=""><div class="list-element">Menu 3</div></a>
            </li>
        </ul>
    </nav>
    <div class="content-block">
        <nav class="side-menu">
            <ul>
                <li><a href=""><div class="list-element">List 1</div></a>
                </li>
                <li><a href=""><div class="list-element">List 2</div></a>
                </li>
                <li><a href=""><div class="list-element">List 3</div></a>
                </li>
                <li><a href=""><div class="list-element">List 4</div></a>
                </li>
            </ul>
        </nav>
        <div class="content">
            <form id="formulaire" class="form spacer-container">
                <div>
                    <label for="date">Date :</label></br>
                    <input type="date" name="date" id="date" class="form-control"></br>
                    <label for="titre">Titre :</label></br>
                    <input type="text" name="titre" id="titre" class="form-control"></br>
                    <label for="description">Description :</label></br>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
            </form>
        </div>
    </div>

</body>
</html>