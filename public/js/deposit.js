// let status = document.getElementById('status');
// let value = status.textContent;
// console.log(value);
// if(value == "success") {
//     status.classList.add('text-green-600');
// } else if (value == "failed") {
//     status.classList.add('text-red-400');
// } else if (value == "pending") {
//     status.classList.add('text-yellow-600');
// }

window.addEventListener('DOMContentLoaded', load);

function load () {
    const depositButtons = document.getElementsByClassName('deposit-btn');
    console.log(depositButtons);
    for (let depositElementIndex = 0; depositElementIndex < depositButtons.length; depositElementIndex++) {
        depositButtons[depositElementIndex].addEventListener('click', toggleDepositModal);
    }

    const depositCloseBtn = document.querySelector('#deposit-close-modal');
    depositCloseBtn.addEventListener('click', toggleDepositModal);
}

function toggleDepositModal () {
    const depositOverlay = document.querySelector('#deposit-overlay');
    depositOverlay.classList.toggle('hidden');
    depositOverlay.classList.toggle('flex');
}

