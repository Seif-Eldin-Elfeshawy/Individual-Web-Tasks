const temperatureInputElement = document.querySelector('input');

const celsiusToFahrenheitButtonElement = document.getElementById('celsiusToFahrenheitButton');

celsiusToFahrenheitButtonElement.addEventListener('click', function () {
    const resultElement = document.querySelector('p');
    const celsius = temperatureInputElement.value;
    const fahrenheit = (9 / 5) * celsius + 32;
    const isResultNaN = isNaN(fahrenheit);
    if (isResultNaN || celsius === '') {
        resultElement.style.color = 'red';
        resultElement.innerText = 'Please enter a number!';
    } else {
        resultElement.style.color = 'unset';
        resultElement.innerText = `${celsius} Celsius is equivalent to ${fahrenheit.toFixed(
            1
        )} Fahrenheit.`;
    }
});

const fahrenheitToCelsiusButtonElement = document.getElementById('fahrenheitToCelsiusButton');

fahrenheitToCelsiusButtonElement.addEventListener('click', function () {
    const resultElement = document.querySelector('p');
    const fahrenheit = temperatureInputElement.value;
    const celsius = (5 / 9) * (fahrenheit - 32);
    const isResultNaN = isNaN(fahrenheit);
    if (isResultNaN || fahrenheit === '') {
        resultElement.style.color = 'red';
        resultElement.innerText = 'Please enter a number!';
    } else {
        resultElement.style.color = 'unset';
        resultElement.innerText = `${fahrenheit} Fahrenheit is equivalent to ${celsius.toFixed(
            1
        )} Celsius.`;
    }
});