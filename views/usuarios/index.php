<div class="row justify-content-center p-3">
    <div class="col-lg-10">
        <div class="card custom-card shadow-lg" style="border-radius: 10px; border: 1px solid;">
            <div class="card-body">
                <div class="row mb-3">
                    <h4 class="text-center mb-2 text-primary">MANIPULACION DE USUARIOS</h4>
                    <h5 class="text-center mb-2">¡Bienvenido a la Aplicacion para el registro, modificacion y eliminación de usuarios!</h5>
                </div>

                <div class="row justify-content-center">

                    <form id="FormUsuarios">
                        <input type="hidden" id="usuario_id" name="usuario_id">

                        <div class="row mb-3 justify-content-center">
                            <div class="col-lg-6">
                                <label for="usuario_nombre" class="form-label">INGRESE SUS NOMBRES</label>
                                <input type="text" class="form-control" id="usuario_nombre" name="usuario_nombre" placeholder="Ingrese aca sus nombres">
                            </div>
                            <div class="col-lg-6">
                                <label for="usuario_apellido" class="form-label">INGRESE SUS APELLIDOS</label>
                                <input type="text" class="form-control" id="usuario_apellido" name="usuario_apellido" placeholder="Ingrese aca sus apellidos">
                            </div>
                            <div class="col-lg-6">
                                <label for="usuario_nit" class="form-label">INGRESE SU NIT</label>
                                <input type="number" class="form-control" id="usuario_nit" name="usuario_nit" placeholder="Ingrese aca su nit">
                            </div>
                            <div class="col-lg-6">
                                <label for="usuario_telefono" class="form-label">INGRESE SU TELEFONO</label>
                                <input type="number" class="form-control" id="usuario_telefono" name="usuario_telefono" placeholder="Ingrese aca su telefono sin el +502">
                            </div>
                            <div class="col-lg-6">
                                <label for="usuario_correo" class="form-label">INGRESE SU CORREO</label>
                                <input type="email" class="form-control" id="usuario_correo" name="usuario_correo" placeholder="Ingrese su correo Eje. amd.pgd@gmail.com">
                            </div>
                            <div class="col-lg-6">
                                <label for="usuario_estado" class="form-label">ESCOJA EL ESTADO DEL USUARIO</label>
                                <select name="usuario_estado" id="usuario_estado" class="form-select">
                                    <option value="">-- SELECCIONE EL ESTADO --</option>
                                    <option value="P">PRESENTE</option>
                                    <option value="F">FALTANDO</option>
                                    <option value="C">COMISION</option>
                                </select>
                            </div>
                        </div>

                        <div class="row justify-content-center mt-5">
                            <div class="col-auto">
                                <button class="btn btn-success" type="submit" id="BtnGuardar">GUARDAR</button>
                            </div>

                             <div class="col-auto d-none">
                                <button class="btn btn-warning" type="button" id="BtnModificar">MODIFICAR</button>
                            </div>
                            
                             <div class="col-auto">
                                <button class="btn btn-secondary" type="button" id="BtnEliminar">ELIMINAR</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= asset('build/js/usuarios/index.js') ?>"></script>