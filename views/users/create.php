<?php include '../../layouts/header.php' ?>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 class="m-0">Usuarios</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6"></div><!-- /.col -->
                </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">
                                    <i class="fas fa-user-plus mr-1"></i>
                                    Crear
                                  </h3>
                                </div><!-- /.card-header -->

                                <form action="#" method="get">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-5">
                                                <label for="name">Nombre</label>
                                                <input type="text" id="name" name="name" class="form-control">
                                            </div>
                                            <div class="col-5">
                                                <label for="email">E-mail</label>
                                                <input type="text" id="email" name="email" class="form-control">
                                            </div>
                                            <div class="col-2">
                                                <label for="username">Username</label>
                                                <input type="text" id="username" name="username" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="password">Contraseña</label>
                                                <input type="password" id="password" name="password" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label for="confirm">Confirmar contraseña</label>
                                                <input type="password" id="confirm" name="confirm" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <label for="adress">Domicilio</label>
                                                <input type="text" id="adress" name="adress" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <label for="city">Ciudad</label>
                                                <input type="text" id="city" name="city" class="form-control">
                                            </div>
                                            <div class="col-3">
                                                <label for="state">Estado</label>
                                                <select name="state" id="state" class="form-control">
                                                    <option value="">Seleccione un estado</option>
                                                    <option value="jalisco">Jalisco</option>
                                                    <option value="sinaloa">Sinaloa</option>
                                                    <option value="nayarit">Nayarit</option>
                                                    <option value="colima">Colima</option>
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <label for="zip">CP</label>
                                                <input type="number" id="zip" name="zip" class="form-control">
                                            </div>
                                        </div>
                                        
                                    </div><!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                        <button type="reset" class="btn btn-default">Deshacer</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

<?php include '../../layouts/footer.php' ?>