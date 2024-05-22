const txt = document.getElementsByClassName("nome_p")
const limit = 26

const txt_desc = document.getElementsByClassName("desc_p")
const limit_desc = 72

for (let p of txt) {
    const verifica_limit = p.innerText.length > limit
    const ponto = verifica_limit ? '...' : ''
    p.innerText = p.innerText.substring(0, limit) + ponto
}

for (let d of txt_desc) {
  const verifica_limit_desc = d.innerText.length > limit_desc
  const ptn = verifica_limit_desc ? '...' : ''
  d.innerText = d.innerText.substring(0, limit_desc) + ptn
}