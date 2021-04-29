window.addEventListener('DOMContentLoaded', load);

function load () {
    const depositBtn = document.querySelector('#deposit-btn');
    const depositCloseBtn = document.querySelector('#deposit-close-modal');
    depositBtn.addEventListener('click', toggleDepositModal);
    depositCloseBtn.addEventListener('click', toggleDepositModal);

    const withdrawBtn = document.querySelector('#withdraw-btn');
    const withdrawCloseBtn = document.querySelector('#withdraw-close-modal');
    withdrawCloseBtn.addEventListener('click', toggleWithdrawModal);
    withdrawBtn.addEventListener('click', toggleWithdrawModal);

}

function toggleDepositModal () {
    const depositOverlay = document.querySelector('#deposit-overlay');
    depositOverlay.classList.toggle('hidden');
    depositOverlay.classList.toggle('flex');
}

function toggleWithdrawModal () {
    const withdrawOverlay = document.querySelector('#withdraw-overlay');
    withdrawOverlay.classList.toggle('hidden');
    withdrawOverlay.classList.toggle('flex');
}