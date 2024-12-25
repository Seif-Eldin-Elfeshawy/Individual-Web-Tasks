// Grab the display element
const display = document.querySelector('.display');

// Initialize an empty string to store the current input
let currentInput = '0';

// Function to update the display
function updateDisplay() {
    display.textContent = currentInput;
}

// Handle button clicks
document.querySelectorAll('.grid-item').forEach(button => {
    button.addEventListener('click', () => {
        const buttonText = button.textContent;

        if (button.classList.contains('operator') || button.classList.contains('tri') || button.classList.contains('log') || button.classList.contains('power') || button.classList.contains('c')) {
            // Handle operator and function button clicks
            if (buttonText === 'c') {
                currentInput = '0'; // Clear the display on 'C' button press
            } else if (buttonText === '=') {
                try {
                    currentInput = eval(currentInput).toString(); // Evaluate the expression
                } catch (e) {
                    currentInput = 'Error'; // Handle errors in evaluation
                }
            } else if (buttonText === 'sin' || buttonText === 'cos' || buttonText === 'tan') {
                // Trigonometric functions (in degrees, converted to radians)
                const result = Math[buttonText](parseFloat(currentInput) * Math.PI / 180);
                currentInput = result.toString();
            } else if (buttonText === 'log') {
                // Logarithm (base 10)
                const result = Math.log10(parseFloat(currentInput));
                currentInput = result.toString();
            } else if (buttonText === 'exp') {
                // Exponential function (e^x)
                const result = Math.exp(parseFloat(currentInput));
                currentInput = result.toString();
            } else {
                // Handle operators like +, -, *, /
                currentInput += buttonText;
            }
        } else if (button.classList.contains('equal')) {
            // Handle equal button click
            try {
                currentInput = eval(currentInput).toString();
            } catch (e) {
                currentInput = 'Error'; // If an error occurs, show "Error"
            }
        } else {
            // Handle number button clicks
            if (currentInput === '0') {
                currentInput = buttonText; // If the input is 0, replace it with the number clicked
            } else {
                currentInput += buttonText; // Append the number clicked
            }
        }

        updateDisplay(); // Update the display after each button press
    });
});

// Initialize display
updateDisplay();
