function navegationAjax(url, seletor) {
    if (!url || !seletor) return
    const elemento = document.querySelector(seletor)
    fetch(url)
        .then(resp => resp.text())
        .then(html => {
            elemento.innerHTML = html
        })
}

document.querySelectorAll('[alp-link]').forEach(link => {
    const url = link.attributes['alp-link'].value
    const seletorDestino = link.attributes['alp-destino'].value

    link.onclick = e => {
        e.preventDefault()
        navegationAjax(url, seletorDestino)
    }
})