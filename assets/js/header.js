function atualizarContador() {

    let carrinho =
        JSON.parse(localStorage.getItem("carrinho"))
        || [];

    document.getElementById(
        "contadorCarrinho"
    ).textContent = carrinho.length;
}

atualizarContador();