const updateContentButtonElement = document.getElementById('updateContentButton');

updateContentButtonElement.addEventListener('click', function () {
    const element = document.getElementById('contentToBeUpdated');

    element.innerHTML = 'New Text Content';
});

const updateStylesButtonElement = document.getElementById('updateStylesButton');

updateStylesButtonElement.addEventListener('click', function () {
    const element = document.getElementById('stylesToBeUpdated');

    element.style.color = 'red';
    element.style.backgroundColor = 'yellow';
    element.style.border = '2px solid red';
    element.style.padding = '5px';
    element.innerHTML = 'New Styles Added!';
});

const removeElementButtonElement = document.getElementById('removeElementButton');

removeElementButtonElement.addEventListener('click', function () {
    const element = document.getElementById('elementToBeRemoved');
    element.remove();
});