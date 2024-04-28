let counter = document.getElementById('itemQuantity');
console.log(counter.getAttribute('value'));

function AddValue(counterId, maxCounterVal, priceId){
    let counter = document.getElementById(counterId);
    let price = document.getElementById(priceId);
    let defaultPrice = price.textContent / counter.getAttribute('value');
    if(counter.getAttribute('value') < parseInt(maxCounterVal)){
        counter.setAttribute('value', (parseInt(counter.getAttribute('value')) + 1));
        price.textContent = defaultPrice * counter.getAttribute('value');
    }
}

function SubstarctValue(counterId, minCounterVal, priceId){
    let counter = document.getElementById(counterId);
    let price = document.getElementById(priceId);
    let defaultPrice = price.textContent / counter.getAttribute('value');
    if (counter.getAttribute('value') > parseInt(minCounterVal)) {
        counter.setAttribute('value', (parseInt(counter.getAttribute('value')) - 1));
        price.textContent -= defaultPrice;
    }
}

function ResetValue(counterId, minCounterVal, priceId){
    let counter = document.getElementById(counterId);
    let price = document.getElementById(priceId);
    price.textContent /= counter.getAttribute('value');
    counter.setAttribute('value', minCounterVal);
}


// function AddValue(counterId, maxCounterVal, priceId){
//     let counter = document.getElementById(counterId);
//     let price = document.getElementById(priceId);
//     let defaultPrice = price.textContent / counter.textContent
//     if(counter.textContent < parseInt(maxCounterVal)) {
//         counter.textContent++;
//         price.textContent = defaultPrice * counter.textContent;
//     }
// }

// function SubstarctValue(counterId, minCounterVal, priceId){
//     let counter = document.getElementById(counterId);
//     let price = document.getElementById(priceId);
//     let defaultPrice = price.textContent / counter.textContent
//     if (counter.textContent > parseInt(minCounterVal)) {
//         counter.textContent--;
//         price.textContent -= defaultPrice;
//     }
// }

// function ResetValue(counterId, minCounterVal, priceId){
//     let counter = document.getElementById(counterId);
//     let price = document.getElementById(priceId);
//     price.textContent /= counter.textContent;
//     counter.textContent = minCounterVal;
// }

{/* <div class="w-full flex xs:justify-end justify-center items-center ">
    <div class="w-5 h-5 min-h-5 btn btn-circle btn-outline group"
        onclick="SubstarctValue('itemQuantity', 1, 'price')">
        <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="group-hover:invert stroke-base-content" d="M0 1H7.5" />
        </svg>
    </div>
    <div id="itemQuantity">1</div>
    <div class="w-5 h-5 min-h-5 btn btn-circle btn-outline group"
        onclick="AddValue('itemQuantity', 15, 'price')">
        <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="group-hover:invert stroke-base-content" d="M0 4H8" />
        <path class="group-hover:invert stroke-base-content" d="M4 0V8" />
        </svg>
    </div>
</div> */}