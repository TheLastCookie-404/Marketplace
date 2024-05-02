let totalPrice = document.getElementById("total");
let defaultTotal = totalPrice.textContent;

function AddValue(counterId, maxCounterVal, priceId) {
	let counter = document.getElementById(counterId);
	let price = document.getElementById(priceId);
	let defaultPrice = price.textContent / counter.getAttribute('value');
	if (counter.getAttribute('value') < parseInt(maxCounterVal)) {
		counter.setAttribute('value', (parseInt(counter.getAttribute('value')) + 1));
		price.textContent = defaultPrice * counter.getAttribute('value');
		totalPrice.textContent = defaultPrice + parseInt(totalPrice.textContent);
	}
}

function SubstarctValue(counterId, minCounterVal, priceId) {
	let counter = document.getElementById(counterId);
	let price = document.getElementById(priceId);
	let defaultPrice = price.textContent / counter.getAttribute('value');
	if (counter.getAttribute('value') > parseInt(minCounterVal)) {
		counter.setAttribute('value', (parseInt(counter.getAttribute('value')) - 1));
		price.textContent -= defaultPrice;
		totalPrice.textContent -= defaultPrice;
	}
}

function ResetValue(counterId, minCounterVal, priceId) {
	let counter = document.getElementById(counterId);
	let price = document.getElementById(priceId);
	price.textContent /= counter.getAttribute('value');
	counter.setAttribute('value', minCounterVal);
}
