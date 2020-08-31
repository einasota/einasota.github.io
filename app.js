function converter() {
    const binaryvalue = document.getElementById('b-entry').value
    if (binaryvalue === '') {
        return alert('Por favor insira um numero binário');
    }
    ;
    binaryvalue.split('').map((num => {
        if (num !== '0' && num !== '1') {
            return alert('Por favor insira um numero binário');
        }
    }));
    const decimal = parseInt(binaryvalue, 2);
    document.getElementById('d-entry').value = decimal;
    return true;
}
