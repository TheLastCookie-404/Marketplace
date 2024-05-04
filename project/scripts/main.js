let totalPrice = document.getElementById("total");
let defaultTotal = totalPrice.textContent;

function AddValue(counterId, maxCounterVal, priceId, outPriceClass) {
	let counter = document.getElementById(counterId);
	let price = document.getElementById(priceId);
	let outPrice = document.getElementsByClassName(outPriceClass);
	let defaultPrice = [];
	for(i = 0; i < outPrice.length; i++){
		defaultPrice[i] = outPrice[i].textContent / counter.getAttribute('value');
		console.log(defaultPrice[i]);
	}
	if (counter.getAttribute('value') < parseInt(maxCounterVal)) {
		counter.setAttribute('value', (parseInt(counter.getAttribute('value')) + 1));
		for(i = 0; i < outPrice.length; i++){
			outPrice[i].textContent = defaultPrice[i] * counter.getAttribute('value');
		}
		totalPrice.textContent = defaultPrice[0] + parseInt(totalPrice.textContent);
	}
}

function SubstarctValue(counterId, minCounterVal, priceId, outPriceClass) {
	let counter = document.getElementById(counterId);
	let price = document.getElementById(priceId);
	let outPrice = document.getElementsByClassName(outPriceClass);
	let defaultPrice = [];
	for(i = 0; i < outPrice.length; i++){
		defaultPrice[i] = outPrice[i].textContent / counter.getAttribute('value');
		console.log(defaultPrice[i]);
	}
	if (counter.getAttribute('value') > parseInt(minCounterVal)) {
		counter.setAttribute('value', (parseInt(counter.getAttribute('value')) - 1));
		for(i = 0; i < outPrice.length; i++){
			outPrice[i].textContent -= defaultPrice[i];
		}
		totalPrice.textContent -= defaultPrice[0];
	}
}




// let totalPrice = document.getElementById("total");
// let defaultTotal = totalPrice.textContent;

// function AddValue(counterId, maxCounterVal, priceId) {
// 	let counter = document.getElementById(counterId);
// 	let price = document.getElementById(priceId);
// 	let defaultPrice = price.textContent / counter.getAttribute('value');
// 	if (counter.getAttribute('value') < parseInt(maxCounterVal)) {
// 		counter.setAttribute('value', (parseInt(counter.getAttribute('value')) + 1));
// 		price.textContent = defaultPrice * counter.getAttribute('value');
// 		totalPrice.textContent = defaultPrice + parseInt(totalPrice.textContent);
// 	}
// }

// function SubstarctValue(counterId, minCounterVal, priceId) {
// 	let counter = document.getElementById(counterId);
// 	let price = document.getElementById(priceId);
// 	let defaultPrice = price.textContent / counter.getAttribute('value');
// 	if (counter.getAttribute('value') > parseInt(minCounterVal)) {
// 		counter.setAttribute('value', (parseInt(counter.getAttribute('value')) - 1));
// 		price.textContent -= defaultPrice;
// 		totalPrice.textContent -= defaultPrice;
// 	}
// }

// function ResetValue(counterId, minCounterVal, priceId) {
// 	let counter = document.getElementById(counterId);
// 	let price = document.getElementById(priceId);
// 	price.textContent /= counter.getAttribute('value');
// 	counter.setAttribute('value', minCounterVal);
// }
