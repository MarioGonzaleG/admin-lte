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
                                    <i class="fas fa-chart-pie mr-1"></i>
                                    Listado
                                  </h3>
                                </div><!-- /.card-header -->
    
                                <div class="card-body">
    
                                    <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Nombre</th>
                                            <th>Progreso</th>
                                            <th style="width: 40px">Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Walter</td>
                                            <td>
                                              <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                              </div>
                                            </td>
                                            <td><span class="badge bg-danger">55%</span></td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Clean database</td>
                                            <td>
                                              <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning" style="width: 70%"></div>
                                              </div>
                                            </td>
                                            <td><span class="badge bg-warning">70%</span></td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Cron job running</td>
                                            <td>
                                              <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-primary" style="width: 30%"></div>
                                              </div>
                                            </td>
                                            <td><span class="badge bg-primary">30%</span></td>
                                          </tr>
                                          <tr>
                                            <td>4</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                              <div class="progress progress-xs progress-striped active">
                                                <div class="progress-bar bg-success" style="width: 90%"></div>
                                              </div>
                                            </td>
                                            <td><span class="badge bg-success">90%</span></td>
                                          </tr>
                                        </tbody>
                                    </table>
                                    
                                </div><!-- /.card-body -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>

<?php include '../../layouts/footer.php' ?>