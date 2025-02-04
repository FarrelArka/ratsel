<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link rel="icon" type="image/x-icon" href="img/Ratsel.png" />
    <link rel="stylesheet" href="level5baru.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div id="game" class="justify-center flex-column">
            <div id="hud">
                <div id="hud-item">
                    <a href="#modal-container" id="x"><i data-feather="x"></i></a>
                    <p id="progressText" class="hud-prefix"></p>
                    <div id="progressBar">
                        <div id="progressBarFull"></div>
                    </div>
                </div>
            </div>
            <h2 id="question">Apa</h2>
            <div class="choice-container">
            <button class="choice-prefix">B</button>
                <button class="choice-text" data-number="1"></button>
            </div>
            <div class="choice-container">
                <button class="choice-prefix">B</button>
                <button class="choice-text" data-number="2"></button>
            </div>
            <div class="choice-container">
            <button class="choice-prefix">B</button>
                <button class="choice-text" data-number="3"></button>
            </div>
            <div class="choice-container">
            <button class="choice-prefix">B</button>
                <button class="choice-text" data-number="4"></button>
            </div>
        </div>
    </div>

    <div class="modal__container" id="modal-container">
        <div class="modal__content">
            <div class="modal__close close-modal" title="Close">
                <!-- Feather icon for close -->
                <i data-feather="x"></i>
            </div>
            <img src="gmbr.png" alt="" class="modal__img">
            <h1 class="modal__title">Semoga bisa main bareng lagi segera! Jaga diri dan sampai ketemu!</h1>

            <a href="user.php"><button class="modal__button-link">Keluar</button></a>
            <a href="game_5.php"><button class="modal__button-link close-modal">Ulangi</button></a>
        </div>
    </div>

    <form id="answerForm" method="POST" action="level5.php" style="display: none;">
        <input type="hidden" name="answer" id="answerInput">
        <input type="hidden" name="question_id" id="questionIdInput">
        <input type="hidden" name="start_time" id="startTimeInput" value="<?php echo time(); ?>">
        <input type="hidden" name="total_score" id="totalScoreInput">
    </form>

    <script src="level5.js"></script>
    <script src="main.js"></script>
</body>
</html>
