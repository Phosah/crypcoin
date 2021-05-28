// window.addEventListener('DOMContentLoaded', load);

// function load () {

//     const withdrawBtn = document.querySelector('#withdraw-btn');
//     const withdrawBtn2 = document.querySelector('#withdraw-btn-2');
//     const withdrawCloseBtn = document.querySelector('#withdraw-close-modal');
//     withdrawCloseBtn.addEventListener('click', toggleWithdrawModal);
//     withdrawBtn.addEventListener('click', toggleWithdrawModal);
//     withdrawBtn2.addEventListener('click', toggleWithdrawModal2);
// }

// function toggleWithdrawModal () {
//     const withdrawOverlay = document.querySelector('#withdraw-overlay');
//     withdrawOverlay.classList.toggle('hidden');
//     withdrawOverlay.classList.toggle('flex');
// }

// function toggleWithdrawModal2 () {
//     const withdrawOverlay = document.querySelector('#withdraw-overlay');
//     withdrawOverlay.classList.toggle('hidden');
//     withdrawOverlay.classList.toggle('flex');
// }

window.addEventListener('DOMContentLoaded', load);

function load () {
    const withdrawBtns = document.getElementsByClassName('withdraw-btn');
    console.log(withdrawBtns);
    for (let withdrawElementIndex = 0; withdrawElementIndex < withdrawBtns.length; withdrawElementIndex++) {
        withdrawBtns[withdrawElementIndex].addEventListener('click', toggleWithdrawModal);
    }

    const withdrawCloseBtn = document.querySelector('#withdraw-close-modal');
    withdrawCloseBtn.addEventListener('click', toggleWithdrawModal);
}

function toggleWithdrawModal () {
    const withdrawOverlay = document.querySelector('#withdraw-overlay');
    withdrawOverlay.classList.toggle('hidden');
    withdrawOverlay.classList.toggle('flex');
}