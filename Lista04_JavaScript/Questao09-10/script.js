const textInsert = document.getElementById("textInsert");
const btnAdd = document.getElementById("btnAdd");
const listItem = document.getElementById("listItem");

btnAdd.addEventListener("click", function () {
    const textoItem = textInsert.value.trim();

    if (textoItem !== "") {
        const novoItem = document.createElement("li");
        novoItem.innerText = textoItem;

        // Cria botão de remover em seu "li" especifico 
        const bt_remove = document.createElement("button");
        bt_remove.innerText = "Remover";
        bt_remove.classList.add("btn-remover");

        // Adiciona o evento de exclusão para o evento criado anteriormente
        bt_remove.addEventListener("click", function () {
            listItem.removeChild(novoItem);
        });

        novoItem.appendChild(bt_remove);
        listItem.appendChild(novoItem);

        textInsert.value = "";
    }
});