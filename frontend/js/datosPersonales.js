const $nombre = document.getElementById("nombre");
const $especialidad = document.getElementById("especialidad");
const $imagen = document.getElementById("imagen");
const $avatar = document.getElementById("avatar");

$.ajax({
    url: "https://api.cornagopablo.com/",
    method: "GET",
    success: function (respuesta) {
        respuesta = JSON.parse(respuesta);
        const usuario = respuesta.usuario;

        $nombre.textContent = usuario.nombre + " " + usuario.apellido;
        $especialidad.textContent = usuario.especialidad;
        $imagen.setAttribute("src", usuario.foto);
        $avatar.setAttribute("src", usuario.avatar);
    },
});
