const words = ['javascript', 'html', 'css', 'developer', 'coding', 'programming'];
let selectedWord = words[Math.floor(Math.random() * words.length)];
let displayWord = [];
let incorrectGuesses = 0;

// Inicializar la palabra oculta con guiones bajos
for (let i = 0; i < selectedWord.length; i++) {
  displayWord.push('_');
}

// Actualizar la pantalla con la palabra oculta
function updateDisplay() {
  document.getElementById('word-display').textContent = displayWord.join(' ');
}

// Dibujar el muñeco del ahorcado
function drawHangman() {
  const parts = ['head', 'body', 'left-arm', 'right-arm', 'left-leg', 'right-leg'];
  for (let i = 0; i < incorrectGuesses; i++) {
    document.querySelector(`.${parts[i]}`).style.backgroundColor = '#e74c3c'; // rojo
  }
}

// Verificar si la letra está en la palabra y actualizar la pantalla
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
    document.getElementById('message').textContent = '¡Correcto! Has adivinado la palabra.';
    disableButtons();
  } else if (incorrectGuesses === 6) {
    document.getElementById('message').textContent = `¡Oh no! Has alcanzado el máximo de intentos. La palabra era: ${selectedWord}`;
    disableButtons();
  }
}

// Deshabilitar los botones después de que se gana o se pierde
function disableButtons() {
  const buttons = document.querySelectorAll('.button');
  buttons.forEach(button => button.disabled = true);
}

// Crear botones para cada letra del teclado
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

// Inicializar el juego
function initializeGame() {
  updateDisplay();
  createKeyboard();
}

initializeGame();
