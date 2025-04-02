<?php
error_reporting(E_ALL);      // Reportar todos los errores
ini_set('display_errors', 1); // Mostrar errores en pantalla
ini_set('display_startup_errors', 1); // Mostrar errores que ocurren al iniciar PHP

include_once 'Templates/header.php';
require("../vendor/autoload.php");

use App\Controllers\Functions;

$funciones = new Functions();

?>

<div class="container mt-5 mb-5">
  <!-- Tabs for navigation -->
  <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="libros-tab" data-bs-toggle="tab" data-bs-target="#libros" type="button" role="tab" aria-controls="libros" aria-selected="true">Libros</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="autores-tab" data-bs-toggle="tab" data-bs-target="#autores" type="button" role="tab" aria-controls="autores" aria-selected="false">Autores</button>
    </li>
  </ul>

  <!-- Tab content -->
  <div class="tab-content" id="myTabContent">
    <!-- Libros Tab -->
    <div class="tab-pane fade show active" id="libros" role="tabpanel" aria-labelledby="libros-tab">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Lista de Libros</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addLibroModal">
          <i class="bi bi-plus-circle"></i> Añadir Libro
        </button>
      </div>

      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped mb-0">
            <thead class="table-dark">
              <tr>
                <th>TÍTULO</th>
                <th>ISBN</th>
                <th>AUTOR</th>
                <th>EDITORIAL</th>
                <th class="text-center">OPERACIONES</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($funciones->libro() as $key => $value) { ?>
                <tr>
                  <td><?= $value['titulo'] ?></td>
                  <td><?= $value['isbn'] ?></td>
                  <td><?= $value['apePaterno'] . " " . $value['apeMaterno'] ?></td>
                  <td><?= $value['editorial'] ?></td>
                  <td class="text-center">
                    <button type="button" class="btn btn-outline-success btn-sm"
                      data-bs-toggle="modal"
                      data-bs-target="#editLibroModal"
                      data-id="<?= $value['idLibro'] ?>"
                      data-titulo="<?= $value['titulo'] ?>"
                      data-isbn="<?= $value['isbn'] ?>"
                      data-editorial="<?= $value['editorial'] ?>"
                      data-paginas="<?= $value['paginas'] ?? '' ?>">
                      <i class="bi bi-pencil"></i> Editar
                    </button>
                    <a href="process.php?del=delete&idLibro=<?= $value['idLibro'] ?>" class="btn btn-outline-danger btn-sm">
                      <i class="bi bi-trash"></i> Eliminar
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Autores Tab -->
    <div class="tab-pane fade" id="autores" role="tabpanel" aria-labelledby="autores-tab">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Lista de Autores</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addAutorModal">
          <i class="bi bi-plus-circle"></i> Añadir Autor
        </button>
      </div>

      <div class="card">
        <div class="card-body p-0">
          <table class="table table-striped mb-0">
            <thead class="table-dark">
              <tr>
                <th>NOMBRE</th>
                <th>APELLIDO PATERNO</th>
                <th>APELLIDO MATERNO</th>
                <th class="text-center">OPERACIONES</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($funciones->autor() as $key => $value) { ?>
                <tr>
                  <td><?= $value['nombre'] ?></td>
                  <td><?= $value['apePaterno'] ?></td>
                  <td><?= $value['apeMaterno'] ?></td>
                  <td class="text-center">
                    <button type="button" class="btn btn-outline-success btn-sm"
                      data-bs-toggle="modal"
                      data-bs-target="#editAutorModal"
                      data-id="<?= $value['idAutor'] ?>"
                      data-nombre="<?= $value['nombre'] ?>"
                      data-apepaterno="<?= $value['apePaterno'] ?>"
                      data-apematerno="<?= $value['apeMaterno'] ?>">
                      <i class="bi bi-pencil"></i> Editar
                    </button>
                    <a href="process.php?delAutor=delete&idAutor=<?= $value['idAutor'] ?>" class="btn btn-outline-danger btn-sm">
                      <i class="bi bi-trash"></i> Eliminar
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Añadir Libro -->
<div class="modal fade" id="addLibroModal" tabindex="-1" aria-labelledby="addLibroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="addLibroModalLabel">Añadir Nuevo Libro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="process.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="titulo" class="form-label">TÍTULO</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
          </div>
          <div class="mb-3">
            <label for="isbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="isbn" name="isbn" required>
          </div>
          <div class="mb-3">
            <label for="editorial" class="form-label">EDITORIAL</label>
            <input type="text" class="form-control" id="editorial" name="editorial" required>
          </div>
          <div class="mb-3">
            <label for="paginas" class="form-label">NÚMERO DE PÁGINAS</label>
            <input type="number" class="form-control" id="paginas" name="paginas" required>
          </div>
          <div class="mb-3">
            <label for="Autor" class="form-label">AUTOR</label>
            <select class="form-select" name="Autor" id="Autor" required>
              <?php foreach ($funciones->autor() as $key => $value) { ?>
                <option value=<?= $value['idAutor'] ?>><?= $value['apePaterno'] . " " . $value['apeMaterno'] . " " . $value['nombre'] ?></option>
              <?php } ?>
            </select>
          </div>
          <input type="hidden" name="action" value="addLibro">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar Libro</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Editar Libro -->
<div class="modal fade" id="editLibroModal" tabindex="-1" aria-labelledby="editLibroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="editLibroModalLabel">Editar Libro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="process.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="editTitulo" class="form-label">TÍTULO</label>
            <input type="text" class="form-control" id="editTitulo" name="titulo" required>
          </div>
          <div class="mb-3">
            <label for="editIsbn" class="form-label">ISBN</label>
            <input type="text" class="form-control" id="editIsbn" name="isbn" required>
          </div>
          <div class="mb-3">
            <label for="editEditorial" class="form-label">EDITORIAL</label>
            <input type="text" class="form-control" id="editEditorial" name="editorial" required>
          </div>
          <div class="mb-3">
            <label for="editPaginas" class="form-label">NÚMERO DE PÁGINAS</label>
            <input type="number" class="form-control" id="editPaginas" name="paginas" required>
          </div>
          <div class="mb-3">
            <label for="editAutor" class="form-label">AUTOR</label>
            <select class="form-select" name="Autor" id="editAutor" required>
              <?php foreach ($funciones->autor() as $key => $value) { ?>
                <option value=<?= $value['idAutor'] ?>><?= $value['apePaterno'] . " " . $value['apeMaterno'] . " " . $value['nombre'] ?></option>
              <?php } ?>
            </select>
          </div>
          <input type="hidden" name="action" value="editLibro">
          <input type="hidden" id="editIdLibro" name="idLibro">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Actualizar Libro</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Añadir Autor -->
<div class="modal fade" id="addAutorModal" tabindex="-1" aria-labelledby="addAutorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="addAutorModalLabel">Añadir Nuevo Autor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="process.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="nombre" class="form-label">NOMBRE</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="apePaterno" class="form-label">APELLIDO PATERNO</label>
            <input type="text" class="form-control" id="apePaterno" name="apePaterno" required>
          </div>
          <div class="mb-3">
            <label for="apeMaterno" class="form-label">APELLIDO MATERNO</label>
            <input type="text" class="form-control" id="apeMaterno" name="apeMaterno" required>
          </div>
          <input type="hidden" name="action" value="addAutor">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar Autor</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Editar Autor -->
<div class="modal fade" id="editAutorModal" tabindex="-1" aria-labelledby="editAutorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="editAutorModalLabel">Editar Autor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="process.php" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="editNombre" class="form-label">NOMBRE</label>
            <input type="text" class="form-control" id="editNombre" name="nombre" required>
          </div>
          <div class="mb-3">
            <label for="editApePaterno" class="form-label">APELLIDO PATERNO</label>
            <input type="text" class="form-control" id="editApePaterno" name="apePaterno" required>
          </div>
          <div class="mb-3">
            <label for="editApeMaterno" class="form-label">APELLIDO MATERNO</label>
            <input type="text" class="form-control" id="editApeMaterno" name="apeMaterno" required>
          </div>
          <input type="hidden" name="action" value="editAutor">
          <input type="hidden" id="editIdAutor" name="idAutor">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Actualizar Autor</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- JavaScript para manejo de modales -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Código para el modal de editar libro
    const editLibroModal = document.getElementById('editLibroModal');
    if (editLibroModal) {
      editLibroModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const id = button.getAttribute('data-id');
        const titulo = button.getAttribute('data-titulo');
        const isbn = button.getAttribute('data-isbn');
        const editorial = button.getAttribute('data-editorial');
        const paginas = button.getAttribute('data-paginas');

        const modalIdInput = editLibroModal.querySelector('#editIdLibro');
        const modalTituloInput = editLibroModal.querySelector('#editTitulo');
        const modalIsbnInput = editLibroModal.querySelector('#editIsbn');
        const modalEditorialInput = editLibroModal.querySelector('#editEditorial');
        const modalPaginasInput = editLibroModal.querySelector('#editPaginas');

        modalIdInput.value = id;
        modalTituloInput.value = titulo;
        modalIsbnInput.value = isbn;
        modalEditorialInput.value = editorial;
        modalPaginasInput.value = paginas;
      });
    }

    // Código para el modal de editar autor
    const editAutorModal = document.getElementById('editAutorModal');
    if (editAutorModal) {
      editAutorModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const id = button.getAttribute('data-id');
        const nombre = button.getAttribute('data-nombre');
        const apePaterno = button.getAttribute('data-apepaterno');
        const apeMaterno = button.getAttribute('data-apematerno');

        const modalIdInput = editAutorModal.querySelector('#editIdAutor');
        const modalNombreInput = editAutorModal.querySelector('#editNombre');
        const modalApePaternoInput = editAutorModal.querySelector('#editApePaterno');
        const modalApeMaternoInput = editAutorModal.querySelector('#editApeMaterno');

        modalIdInput.value = id;
        modalNombreInput.value = nombre;
        modalApePaternoInput.value = apePaterno;
        modalApeMaternoInput.value = apeMaterno;
      });
    }
  });
</script>

<?php include_once 'Templates/footer.php'; ?>
