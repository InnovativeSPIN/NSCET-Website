function expan_collp() {
    window.location.href = "#top";
    var inner_btn = document.getElementById('icon-text');
    var coll_expan = document.getElementById('head-card');
    if (coll_expan.style.display == 'none') {
        coll_expan.style.display = 'flex';
        inner_btn.innerText = '   Close';
        inner_btn.className = 'fas fa-times';
        inner_btn.style.color = 'red';

    } else {
        coll_expan.style.display = 'none';
        inner_btn.innerText = '   Menu'
        inner_btn.className = 'fas fa-bars';
        inner_btn.style.color = 'black';
    }
}