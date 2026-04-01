document.addEventListener("DOMContentLoaded", () => {

    const botones = document.querySelectorAll(".btn-categoria");
    const productos = document.querySelectorAll(".producto-item");

    const minInput = document.getElementById("precio-min");
    const maxInput = document.getElementById("precio-max");
    const buscarInput = document.getElementById("buscar");

    let categoriaActual = "all";

    botones.forEach(btn => {
        btn.addEventListener("click", () => {
            botones.forEach(b => b.classList.remove("active"));
            btn.classList.add("active");

            categoriaActual = btn.dataset.category;
            filtrar();
        });
    });

    function filtrar() {
        const min = parseFloat(minInput.value) || 0;
        const max = parseFloat(maxInput.value) || Infinity;
        const texto = buscarInput.value.toLowerCase();

        productos.forEach(prod => {
            const cat = prod.dataset.category;
            const precio = parseFloat(prod.dataset.price);
            const nombre = prod.innerText.toLowerCase();

            let mostrar = true;

            if (categoriaActual !== "all" && cat !== categoriaActual)
                mostrar = false;

            if (precio < min || precio > max)
                mostrar = false;

            if (!nombre.includes(texto))
                mostrar = false;

            prod.classList.toggle("hidden", !mostrar);
        });
    }

    minInput.addEventListener("input", filtrar);
    maxInput.addEventListener("input", filtrar);
    buscarInput.addEventListener("input", filtrar);

});