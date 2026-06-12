function adicionarCarrinho(produto) {
    console.log("Adicionar Produtos")
    let carrinho =
        JSON.parse(localStorage.getItem("carrinho"))
        || [];

    carrinho.push(produto);

    localStorage.setItem(
        "carrinho",
        JSON.stringify(carrinho)
    );

    atualizarContador();
}