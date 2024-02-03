const words = ['javascript', 'html', 'css', 'developer', 'coding', 'programming'];
        let selectedWord, displayWord, incorrectGuesses, timer;

        function startGame() {
            resetHangman();
            selectedWord = words[Math.floor(Math.random() * words.length)];
            displayWord = Array(selectedWord.length).fill('_');
            incorrectGuesses = 0;
            updateDisplay();
            drawHangman();
            enableButtons();
            document.getElementById('message').textContent = '';
            document.getElementById('startButton').style.display = 'none';
            document.getElementById('restartButton').style.display = 'inline';
            timer = setTimeout(() => {
                endGame(false);
            }, 10000);
        }

        function resetHangman() {
            const parts = ['head', 'body', 'left-arm', 'right-arm', 'left-leg', 'right-leg'];
            for (let part of parts) {
                document.querySelector(`.${part}`).style.backgroundColor = '#3C3C3C';
            }
        }

        function endGame(isWinner) {
            clearTimeout(timer);
            disableButtons();
            if (isWinner) {
                document.getElementById('message').textContent = '¡Correcto! Has adivinado la palabra.';
            } else {
                document.getElementById('message').textContent = `¡Oh no! Has alcanzado el máximo de intentos. La palabra era: ${selectedWord}`;
            }
            document.getElementById('startButton').style.display = 'inline';
            document.getElementById('restartButton').style.display = 'none';
        }

        function restartGame() {
            clearTimeout(timer);
            startGame();
        }

        function updateDisplay() {
            document.getElementById('word-display').textContent = displayWord.join(' ');
        }

        function drawHangman() {
            const parts = ['head', 'body', 'left-arm', 'right-arm', 'left-leg', 'right-leg'];
            for (let i = 0; i < incorrectGuesses; i++) {
                document.querySelector(`.${parts[i]}`).style.backgroundColor = '#e74c3c';
            }
        }

        function checkGuess(letter) {
            let letterFound = false;
            for (let i = 0; i < selectedWord.length; i++) {
                if (selectedWord[i] === letter) {
                    displayWord[i] = letter;
                    letterFound = true;
                }
            }

            if (!letterFound) {
                incorrectGuesses++;
                drawHangman();
            }

            updateDisplay();

            if (displayWord.join('') === selectedWord) {
                endGame(true);
            } else if (incorrectGuesses === 6) {
                endGame(false);
            }
        }

        function disableButtons() {
            const buttons = document.querySelectorAll('.button');
            buttons.forEach(button => button.disabled = true);
        }

        function enableButtons() {
            const buttons = document.querySelectorAll('.button');
            buttons.forEach(button => button.disabled = false);
        }

        function createKeyboard() {
            const keyboard = document.getElementById('keyboard');
            for (let i = 65; i <= 90; i++) {
                const letter = String.fromCharCode(i);
                const button = document.createElement('button');
                button.textContent = letter;
                button.className = 'button';
                button.addEventListener('click', () => checkGuess(letter.toLowerCase()));
                keyboard.appendChild(button);
            }
        }

        document.getElementById('startButton').addEventListener('click', startGame);
        document.getElementById('restartButton').addEventListener('click', restartGame);

        createKeyboard();