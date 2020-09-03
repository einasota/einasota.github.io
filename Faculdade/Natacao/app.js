function idade(){
    const idade = parseInt(document.getElementById('idade').value)

    if(idade === 5||idade === 6||idade === 7){
        document.getElementById('resultado').value = "Infantil A"
    } else if (idade === 8||idade === 9||idade === 10){
        document.getElementById('resultado').value = "Infantil B"
    } else if ( idade === 11||idade === 12||idade === 13){
        document.getElementById('resultado').value = "Juvenil A"
    } else if ( idade === 14||idade === 15||idade === 16||idade === 17){
        document.getElementById('resultado').value = "Juvenil B"
    } else if (idade >= 18) {
        document.getElementById('resultado').value = "Adulto"
    } else {
        document.getElementById('resultado').value = "Fora da idade de classificação"
    }
}   