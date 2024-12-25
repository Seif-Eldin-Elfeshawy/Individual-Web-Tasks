const fruitsList = ['Apples', 'Banana'];
const fruitsListElement = document.querySelector('ul');
fruitsList.forEach((fruit) => {
    const listItemElement = document.createElement('li');
    listItemElement.textContent = fruit;
    fruitsListElement.appendChild(listItemElement);
});

const fruitInputElement = document.querySelector('input');
const addFruitButtonElement = document.querySelector('button');
addFruitButtonElement.addEventListener('click', function () {
    const listItemElement = document.createElement('li');
    listItemElement.innerText = fruitInputElement.value;
    fruitsListElement.appendChild(listItemElement);
    fruitInputElement.value = '';
});