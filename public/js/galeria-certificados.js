document.addEventListener("DOMContentLoaded", function () {
    const botoesFiltro = document.querySelectorAll(".filtro-btn");
    const cards = document.querySelectorAll(".cert-card");

    // Ativar o botão "Todos" por padrão se nenhum estiver ativo
    const activeBtn = document.querySelector(".filtro-btn.active");
    if (!activeBtn) {
        const btnTodos = document.querySelector('.filtro-btn[data-filter="todos"]');
        if (btnTodos) btnTodos.classList.add("active");
    }

    botoesFiltro.forEach(btn => {
        btn.addEventListener("click", function () {
            // Remover classe active de todos
            botoesFiltro.forEach(b => b.classList.remove("active"));
            // Adicionar ao clicado
            this.classList.add("active");

            const categoriaSelecionada = this.getAttribute("data-filter");

            cards.forEach(card => {
                const cardCategory = card.getAttribute("data-category");

                if (categoriaSelecionada === "todos" || cardCategory === categoriaSelecionada) {
                    card.classList.remove("hidden");
                    // Pequeno delay para animação de fade se necessário
                    setTimeout(() => {
                        card.style.display = "block";
                        card.style.opacity = "1";
                    }, 10);
                } else {
                    card.style.opacity = "0";
                    setTimeout(() => {
                        card.style.display = "none";
                        card.classList.add("hidden");
                    }, 300); // Tempo da transição CSS
                }
            });
        });
    });
});
