function AddValue(counterId, maxCounterVal, priceId){
    let counter = document.getElementById(counterId);
    let price = document.getElementById(priceId);
    let defaultPrice = price.textContent / counter.textContent
    if(counter.textContent < parseInt(maxCounterVal)) {
        counter.textContent++;
        price.textContent = defaultPrice * counter.textContent;
    }
}

function SubstarctValue(counterId, minCounterVal, priceId){
    let counter = document.getElementById(counterId);
    let price = document.getElementById(priceId);
    let defaultPrice = price.textContent / counter.textContent
    if (counter.textContent > parseInt(minCounterVal)) {
        counter.textContent--;
        price.textContent -= defaultPrice;
    }
}

function ResetValue(counterId, minCounterVal, priceId){
    let counter = document.getElementById(counterId);
    let price = document.getElementById(priceId);
    price.textContent /= counter.textContent;
    counter.textContent = minCounterVal;
}

// function AddValue(id, maxVal){
//     var elem = document.getElementById(id);
//     if(elem.textContent < parseInt(maxVal)) elem.textContent++;
// }

// function RemoveValue(id, minVal){
//     var elem = document.getElementById(id);
//     if (elem.textContent > parseInt(minVal)) elem.textContent--;
// }