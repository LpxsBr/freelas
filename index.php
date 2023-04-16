<span style="display: none;"><?php 

require "./command/index.php";

use Command\ShapeHandler;

$command = new ShapeHandler;
?>

</span> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Shapes</title>
</head>
<body>
    <header>
        <h1>Freelas PHP</h1>
    </header>
    <main>
        <div class="container">
            <div class="text" id="text">
                <h1>O que você deseja ver?</h1>
                <div class="bar" id="bar">
                    <div class="charge" id="charge"></div>
                </div>
            </div>
            <div class="controll" id="controll">
                <button onClick="showXHandler()">
                    X
                </button>
                <button onClick="showCrossHandler()">
                    Cruz
                </button>
            </div>
            <div class="shapes" id="shapes">
                <div class="x" id="x">
                    <h1>
                        <?= $command->makeX("<br>") ?>
                    </h1>
                </div>
                <div class="cross" id="cross">
                    <h1>
                        <?= $command->makeCross("<br>") ?>
                    </h1>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <h1>Freelas PHP</h1>
        </div>
        <div class="links">
            <ul>
                <a href="http://github.com/LpxsBr">Github</a>
                <a href="http://linkedin.com/in/anselmolopess">LinkedIn</a>
                <a href="mailto:anselmolopes.an@gmail.com">Contato</a>
            </ul>
        </div>
        
    </footer>
</body>
<script src="./script.js"></script>
</html>