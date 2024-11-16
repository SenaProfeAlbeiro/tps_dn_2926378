              <h1>Consultar Roles</h1>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Rol</th>
                    <th scope="col text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($roles as $rol) : ?>
                    <tr>
                      <th scope="row"><?php echo $rol->getRolCode(); ?></th>
                      <td><?php echo $rol->getRolName(); ?></td>
                      <td class="">
                        <a href="user_update.html" class="editar">
                          <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="#" class="eliminar">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>