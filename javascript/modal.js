window.onload = () => {
    const modal = document.querySelector('#modal');
    const close_modal = document.querySelector('#close_modal');
    const box_modal = document.querySelector('#box_modal');
    const toogle_modal = document.querySelector('#toogle_modal');



    toogle_modal.onclick = () => {
        modal.style.display = 'flex';
    }
    close_modal.onclick = (e) => {
        modal.style.display = 'none';
    }
    modal.onclick = (e) => {
        modal.style.display = 'none';
    }
    box_modal.onclick = (e) => {
        e.stopPropagation();

    }
}