let filas = document.getElementsByClassName('row');
for (let i = 0; i < filas.length; i++) {
    if (i % 2 != 0) {
        filas[i].style = 'background: gray';
    }
}