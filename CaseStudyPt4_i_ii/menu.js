const price = document.querySelectorAll('.price');
const form = document.querySelectorAll('.form');
const checkBox = document.querySelectorAll('.checkbox');
const quantityBox = document.querySelectorAll('.quantity');
const subtotalBox = document.querySelectorAll('.subtotal');
const tableBox = document.querySelector('.table');
const total = document.querySelector('.total');
const clearButton = document.querySelector('.clearButton');

let priceTag;
let quantity;
let subtotal;
let sum;

for (let i = 0; i < form.length; i++) {
  form[i].addEventListener('change', (e) => {
      if (checkBox[i].checked) {
        quantity = parseFloat(quantityBox[i].value);
        priceTag = parseFloat(price[i].value);
      } else {
        quantity = 0;
      }
      subtotal = priceTag * quantity;
      subtotalBox[i].value = subtotal;
  });
}

tableBox.addEventListener('change', (e) => {
  sum = 0;
  for (let i = 0; i < subtotalBox.length; i++) {
    if(parseFloat(subtotalBox[i].value)){
      sum += parseFloat(subtotalBox[i].value);
    }
  }
  total.value = sum;
});

clearButton.addEventListener('click', (e) => {
  e.preventDefault();
  for (let i = 0; i < form.length; i++) {
    quantityBox[i].value = '';
    subtotalBox[i].value = '';
    checkBox[i].checked = false;
    total.value = '';
  }
});
