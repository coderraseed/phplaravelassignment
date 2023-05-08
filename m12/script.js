
let calculateBtn = document.getElementById('calculateBtn');
let clearBtn = document.getElementById('clearBtn');
let weightInput = document.getElementById('weightInput');
let heightInput = document.getElementById('heightInput');
let result = document.getElementById('result');

calculateBtn.addEventListener('click', function () {
    let weight = weightInput.value;
    let height = heightInput.value;

    if (weight && height) {
        let bmi = weight / (height * height);
        result.innerText = `Your BMI is ${bmi.toFixed(2)}`;
    } else {
        result.innerText = 'Please enter both weight and height';
    }
});

clearBtn.addEventListener('click', function () {
    weightInput.value = '';
    heightInput.value = '';
    result.innerText = '';
});
