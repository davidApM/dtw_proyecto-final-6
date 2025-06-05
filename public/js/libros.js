function crearLibro(libro) {
  let libros = JSON.parse(localStorage.getItem('libros')) || [];
  libros.push(libro);
  localStorage.setItem('libros', JSON.stringify(libros));
}

function mostrarLibros() {
  const lista = document.getElementById('lista-libros');
  let libros = JSON.parse(localStorage.getItem('libros')) || [];
  lista.innerHTML = '';
  libros.forEach(libro => {
    let item = document.createElement('li');
    item.textContent = `${libro.titulo} - ${libro.autor}`;
    lista.appendChild(item);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  mostrarLibros();

  const form = document.getElementById('formCrearLibro');
  if (form) {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const nuevoLibro = {
        id: Date.now(),
        titulo: form.titulo.value,
        autor: form.autor.value,
      };
      crearLibro(nuevoLibro);
      mostrarLibros();
      form.reset();
    });
  }
});
