const openCartBtn = document.getElementById('open-cart-btn');
const closeBtn = document.getElementById('close-btn');
const modal = document.querySelector('.modal-container');
const overlay = document.querySelector('.overlay');

// Modal window
const openModal = function (e) {
  e.preventDefault();
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
};

const closeModal = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");
};

openCartBtn.addEventListener("click",openModal);
closeBtn.addEventListener("click",closeModal);

//card

if (document.readyState == "loading") {
document. addEventListener("DOMContentLoaded", ready);
} else {
ready ();
}

//si on veut supprimer tickets + augmenter total
function ready () {
var reomveCartButtons = document. getElementsByClassName ("cart-remove");
console. log (reomveCartButtons);
for (var i = 0; i < reomveCartButtons.length; i++) {
var button = reomveCartButtons [i];
button.addEventListener ("click", removeCartItem);
}
var quantityInputs = document.getElementsByClassName('cart-quantity')
for (var i = 0; i < quantityInputs.length; i++){
  var input = quantityInputs[i]
  input.addEventListener('change',quantityChanged); 
}
/*
var addCart = document. getElementsByClassName ("add-cart");
for (var i = 0; i < addCart.length; i++) {
var button = addCart [i];
button.addEventListener("click", addCartClicked);
}
*/
}

function quantityChanged (event) {
var input = event.target;
if (isNaN(input.value) || input.value <= 0) {
input.value = 1;
}
updatetotal ();
}

function removeCartItem (event) {
var buttonClicked = event.target;
buttonClicked.parentElement.remove ();
updatetotal();
}


/*
function updatetotal (){
var cartContent = document.getElementsByClassName ("cart-content")[0];
var cartBoxes = cartContent.getElementsByClassName ("cart-box");
var total = 0;
for (var i = 0; 1 < cartBoxes.length; i++) {
  var cartBox = cartBoxes[i];
  var priceElement = cartBox.getElementsByClassName ("cart-price")[0];
  var quantityElement = cartBox.getElementsByClassName ("cart-quantity")[0];
  var price = parseFloat(priceElement.innerText.replace("$",""));
  var quantity = quantityElement.value;
  total = total + price * quantity;
  //si nb avec virgulexs
  total= Math.round(total*100) / 100 ;
document.getElementsByClassName("total-price")[0]. innerText = "$" + total;
}
}
*/

