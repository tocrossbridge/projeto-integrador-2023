<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Integrador - 2023</title>
    </head>

    <body>
        <?php
            include '../app/models/Shark.php';
        ?>
        <style>
            <?php include 'main.css'; ?>
        </style>
        
            <!-- TODO: frontend stuff -->
            <!-- TODO: tamagotchi life cicle -->
            <div class="tamagotchi__box">
                <div class="tamagotchi__top-box">
                    <button class="tamagotchi__button">Health</button>
                    <button class="tamagotchi__button">Food</button>
                    <button class="tamagotchi__button">Toilet</button>
                </div>

                <div class="tamagotchi__screen">
                    <div class="tamagotchi__pet"></div>

                    <!-- TODO: implement games logic -->
                    <div class="tamagotchi__game-options">
                        <ul>
                            <li onclick="selectGame(1)">tic toc toe</li>
                            <li onclick="selectGame(2)">xadrez de 2 peças</li>
                            <li onclick="selectGame(3)">cobrinha</li>
                            <li onclick="selectGame(4)">atire no pato</li>
                            <li onclick="selectGame(5)">encontre o pato</li>
                        </ul>
                    </div>

                    <div class="tamagotchi__game-options__game">
                        <h2 class="tamagotchi__game-options__game__title"></h2>
                    </div>
                </div>

                <div class="tamagotchi__bottom-box">
                    <button class="tamagotchi__button" onclick="openGameOptions()">Games</button>
                    <button class="tamagotchi__button">Medicine</button>
                    <button class="tamagotchi__button">Sleep</button>
                </div>
            </div>
       
            <script>
                const tamagotchiPet = document.getElementsByClassName('tamagotchi__pet')[0]
                
                // Games:
                const gameOptionsBox = document.getElementsByClassName('tamagotchi__game-options')[0]
                const gameScreen = document.getElementsByClassName('tamagotchi__game-options__game')[0]
                const gameTitle = document.getElementsByClassName('tamagotchi__game-options__game__title')[0]

                function openGameOptions(){
                    tamagotchiPet.style.display = 'none'
                    gameOptionsBox.style.display = 'block'
                }
                
                function selectGame(option){
                    // Hide game options:
                    gameOptionsBox.style.display = 'none'

                    // Show
                    gameScreen.style.display = 'block'

                    // Display game depending on option:
                    switch (option) {
                        case 1:
                            gameTitle.innerHTML = 'Tic toc toe'
                            break;
                    
                        default:
                            break;
                    }
                }
            </script>

    </body>

</html>