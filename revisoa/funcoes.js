function salariocalc() {
    var salario = document.getElementById('salario').value;
    if(salario<=0){
        document.getElementById('verificar').innerHTML = "Salário Inválido";
    }
}