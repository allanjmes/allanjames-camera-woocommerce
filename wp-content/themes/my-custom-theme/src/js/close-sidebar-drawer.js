const drawerBtnOpen = document.getElementById('my-drawer');
const drawerBtnClose = document.getElementById('close-my-drawer');

if (drawerBtnClose) {
    drawerBtnClose.addEventListener('click', () => {
        drawerBtnOpen.checked = false;
    })
}