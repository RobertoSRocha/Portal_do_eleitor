<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
<?php include(HEADER_TEMPLATE); ?>
<div class="container">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="box">
                <div class="box-header with-border text-center">
                    <h2>Perfil do eleitorado nas eleições municipais 
                        das cidades Brasileiras</h2>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body text-center">
            <form method="post" action=add.php>
                <div class="form-group" style="font-size:20px;">
                    <label for="estado">Estado: </label>
                    <select  id="estado" 
                            name="estado" style="width: 400px;">
                        <option value="estado">Rio Grande do Norte</option>
                        <option value="cidade" >...</option>
                    </select>
                    <label for="cidade">Cidade: </label>
                    <select  id="cidade" 
                            name="cidade" style="width: 400px;">
                        <option value="cidade" >Caicó</option>
                        <option value="cidade" >...</option>
                    </select>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search">Pesquisar</i></button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
        <div class="row">
            <div class="box-header with-border text-center">
                <h2>Faixa etária</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border text-center">
                            <h3 class="box-title">Variação da faixa etária dos eleitores e candidatos no passar dos anos</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <strong>Dados das eleições entre: 2000 - 2016</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="areaChart" style="height: 180px;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer no-border">
                            <div class="row">
                                <div class="col-xs-6 text-center">
                                    <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-xs-6 text-center">
                                    <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

            <div class="col-md-6">
                <!-- DONUT CHART -->
                <div class="box box-danger">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Variação da faixa etária dos eleitores e candidatos no passar dos anos</h3>
                    </div>
                    <div class="box-body">
                        <canvas  id="barChart" style="height:250px"></canvas>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="box box-info">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Variação da faixa etária dos eleitores e candidatos no passar dos anos</h3>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas id="lineChart" style="height:250px"></canvas>
                        </div>
                    </div>
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- BAR CHART -->
                <div class="box box-success" style="display: none;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Variação da faixa etária dos eleitores e candidatos no passar dos anos</h3>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas  id="pieChart" style="height:230px"></canvas>
                        </div>
                    </div>
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
        
        <!-- /.box-body -->
        <div class="row">
            <div class="box-header with-border text-center">
                <h2>Grau de escolaridade</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border text-center">
                            <h3 class="box-title">Variação do grau de escolaridade dos eleitores e candidatos no passar dos anos</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <strong>Dados das eleições entre: 2000 - 2016</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="areaChart3" style="height: 180px;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer no-border">
                            <div class="row">
                                <div class="col-xs-6 text-center">
                                    <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-xs-6 text-center">
                                    <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

            <div class="col-md-6">
                <!-- DONUT CHART -->
                <div class="box box-danger">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Variação do grau de escolaridade dos eleitores e candidatos no passar dos anos</h3>
                    </div>
                    <div class="box-body">
                        <canvas  id="barChart3" style="height:250px"></canvas>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="box box-info">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Variação do grau de escolaridade dos eleitores e candidatos no passar dos anos</h3>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas id="lineChart3" style="height:250px"></canvas>
                        </div>
                    </div>
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- BAR CHART -->
                <div class="box box-success" style="display: none;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Variação do grau de escolaridade dos eleitores e candidatos no passar dos anos</h3>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas  id="pieChart3" style="height:230px"></canvas>
                        </div>
                    </div>
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->
        
        <!-- /.box-body -->
        <div class="row">
            <div class="box-header with-border text-center">
                <h2>Gênero</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border text-center">
                            <h3 class="box-title">Variação do gênero dos eleitores e candidatos no passar dos anos</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <strong>Dados das eleições entre: 2000 - 2016</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="areaChart2" style="height: 180px;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer no-border">
                            <div class="row">
                                <div class="col-xs-6 text-center">
                                    <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-xs-6 text-center">
                                    <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

            <div class="col-md-6">
                <!-- DONUT CHART -->
                <div class="box box-danger">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Variação do gênero dos eleitores e candidatos no passar dos anos</h3>
                    </div>
                    <div class="box-body">
                        <canvas  id="barChart2" style="height:250px"></canvas>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (LEFT) -->
            <div class="col-md-6">
                <!-- LINE CHART -->
                <div class="box box-info">
                    <div class="box-header with-border text-center">
                        <h3 class="box-title">Variação do gênero dos eleitores e candidatos no passar dos anos</h3>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas id="lineChart2" style="height:250px"></canvas>
                        </div>
                    </div>
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- BAR CHART -->
                <div class="box box-success" style="display: none;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Variação do gênero dos eleitores e candidatos no passar dos anos</h3>
                    </div>
                    <div class="box-body">
                        <div class="chart">
                            <canvas  id="pieChart2" style="height:230px"></canvas>
                        </div>
                    </div>
                    <div class="box-footer no-border">
                        <div class="row">
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-gray">Cinza = dados dos candidatos</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-xs-6 text-center">
                                <div class="box-title bg-light-blue-gradient">Azul = dados dos eleitores</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
            <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->

    </section>
    <!-- /.content -->
</div>

<?php include(FOOTER_TEMPLATE); ?>