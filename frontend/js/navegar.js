function navegar(ruta) {
    document.getElementById(ruta).scrollIntoView({
        behavior: "smooth",
        block: "end",
    });
}
