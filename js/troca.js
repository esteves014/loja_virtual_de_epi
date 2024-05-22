function troca() {

  var btt = document.querySelector("#tipo").value
  var luva = document.querySelector("#luva")
  var capacete = document.querySelector("#capacetes")
  var roupa = document.querySelector("#roupas")
  var calcados = document.querySelector("#Calcados")
  var oculos = document.querySelector("#oculos")
  var altura = document.querySelector("#trabalho_altura")
  var respiracao = document.querySelector("#protecao_resp")
  var auditiva = document.querySelector("#protecao_aud")

  if(btt == 1){

    luva.style.display = "block"
    capacete.style.display = "none"
    roupa.style.display = "none"
    calcados.style.display = "none"
    oculos.style.display = "none"
    altura.style.display = "none"
    respiracao.style.display = "none"
    auditiva.style.display = "none"

  }else if(btt == 2){

    luva.style.display = "none"
    capacete.style.display = "block"
    roupa.style.display = "none"
    calcados.style.display = "none"
    oculos.style.display = "none"
    altura.style.display = "none"
    respiracao.style.display = "none"
    auditiva.style.display = "none"

  }else if(btt == 3){

    luva.style.display = "none"
    capacete.style.display = "none"
    roupa.style.display = "block"
    calcados.style.display = "none"
    oculos.style.display = "none"
    altura.style.display = "none"
    respiracao.style.display = "none"
    auditiva.style.display = "none"

  }else if(btt == 4){

    luva.style.display = "none"
    capacete.style.display = "none"
    roupa.style.display = "none"
    calcados.style.display = "block"
    oculos.style.display = "none"
    altura.style.display = "none"
    respiracao.style.display = "none"
    auditiva.style.display = "none"

  }else if(btt == 5){

    luva.style.display = "none"
    capacete.style.display = "none"
    roupa.style.display = "none"
    calcados.style.display = "none"
    oculos.style.display = "block"
    altura.style.display = "none"
    respiracao.style.display = "none"
    auditiva.style.display = "none"

  }else if(btt == 6){

    luva.style.display = "none"
    capacete.style.display = "none"
    roupa.style.display = "none"
    calcados.style.display = "none"
    oculos.style.display = "none"
    altura.style.display = "block"
    respiracao.style.display = "none"
    auditiva.style.display = "none"

  }else if(btt == 7){
    luva.style.display = "none"
    capacete.style.display = "none"
    roupa.style.display = "none"
    calcados.style.display = "none"
    oculos.style.display = "none"
    altura.style.display = "none"
    respiracao.style.display = "block"
    auditiva.style.display = "none"

  }else if(btt == 8){

    luva.style.display = "none"
    capacete.style.display = "none"
    roupa.style.display = "none"
    calcados.style.display = "none"
    oculos.style.display = "none"
    altura.style.display = "none"
    respiracao.style.display = "none"
    auditiva.style.display = "block"
    
  }
}