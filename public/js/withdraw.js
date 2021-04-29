window.addEventListener('DOMContentLoaded', load);

function load () {

    const withdrawBtn = document.querySelector('#withdraw-btn');
    const withdrawCloseBtn = document.querySelector('#withdraw-close-modal');
    withdrawCloseBtn.addEventListener('click', toggleWithdrawModal);
    withdrawBtn.addEventListener('click', toggleWithdrawModal);

}


function toggleWithdrawModal () {
    const withdrawOverlay = document.querySelector('#withdraw-overlay');
    withdrawOverlay.classList.toggle('hidden');
    withdrawOverlay.classList.toggle('flex');
}
