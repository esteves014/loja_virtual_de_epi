function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]/g, ''); // Remove caracteres não numéricos

    if (cpf.length !== 11 || !/^\d{11}$/.test(cpf)) {
        return false;
    }

    let soma = 0;
    for (let i = 0; i < 9; i++) {
        soma += parseInt(cpf.charAt(i)) * (10 - i);
    }

    const digitoVerificador1 = (soma % 11 < 2) ? 0 : 11 - (soma % 11);

    if (parseInt(cpf.charAt(9)) !== digitoVerificador1) {
        return false;
    }

    soma = 0;
    for (let i = 0; i < 10; i++) {
        soma += parseInt(cpf.charAt(i)) * (11 - i);
    }

    const digitoVerificador2 = (soma % 11 < 2) ? 0 : 11 - (soma % 11);

    return parseInt(cpf.charAt(10)) === digitoVerificador2;
}

function validarCNPJ(cnpj) {
    cnpj = cnpj.replace(/[^\d]/g, ''); // Remove caracteres não numéricos

    if (cnpj.length !== 14 || !/^\d{14}$/.test(cnpj)) {
        return false;
    }

    let soma = 0;
    const pesos = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

    for (let i = 0; i < 12; i++) {
        soma += parseInt(cnpj.charAt(i)) * pesos[i];
    }

    const digitoVerificador1 = (soma % 11 < 2) ? 0 : 11 - (soma % 11);

    if (parseInt(cnpj.charAt(12)) !== digitoVerificador1) {
        return false;
    }

    soma = 0;
    pesos.unshift(6);

    for (let i = 0; i < 13; i++) {
        soma += parseInt(cnpj.charAt(i)) * pesos[i];
    }

    const digitoVerificador2 = (soma % 11 < 2) ? 0 : 11 - (soma % 11);

    return parseInt(cnpj.charAt(13)) === digitoVerificador2;
}

// Exemplos de uso
const cpfValido = "123.456.789-09";
const cnpjValido = "12.345.678/0001-99";

const cpfInvalido = "123.456.789-00";
const cnpjInvalido = "12.345.678/0001-90";

console.log(validarCPF(cpfValido)); // true
console.log(validarCPF(cpfInvalido)); // false

console.log(validarCNPJ(cnpjValido)); // true
console.log(validarCNPJ(cnpjInvalido)); // false
