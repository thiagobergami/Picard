@extends('layouts.app')

@section('title', 'Index')

@section('sidebar')

@parent

@endsection

@section('content')
<div class="doc-content col-md-9 col-12 order-1">
    <div class="content-inner">
        <section id="intro">
            <h2 class="titulo-doc-h2 " style="margin-top: 5px;">Picard</h2>
            <hr>
            <p class="pg">Picard (Plataforma de interação, consulta e acesso à rede de Dados) é um sistema Taesa Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit delectus, animi aliquid eius quia ratione laborum magni corrupti veniam unde explicabo quo incidunt deserunt sapiente ipsa aperiam nisi deleniti adipisci!</p>

        </section>
        <br>
        <section id="como-utilizar">
            <h2 class="titulo-doc-h2 " style="margin-top: 5px;">Como Utilizar?</h2>
            <hr>
            <p class="pg">A Plataforma oferece acesso à base de dados voltadas para análise Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit delectus, animi aliquid eius quia ratione laborum magni corrupti veniam unde explicabo quo incidunt deserunt sapiente ipsa aperiam nisi deleniti adipisci!</p>
        </section>
        <!-- Foreach para gerar essa section -->
        <section id="gestao-ativo">
            <h3 class="titulo-doc" id="gestao-ativo">Gestão de Ativos</h3>
            <div class="mt-3 mb-5">
                <div class="accordion accordion-taesa text-texto-principal-2" id="accordionExample">
                    <div class="card">
                        <div class="card-header p-0" id="vida">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-left c1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="letter">Vida útil dos Ativos.</span>
                                </button>
                            </h5>
                        </div>
                        <!-- Esses elementos devem ser carregados quando forem chamados -->
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="parcela">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c2" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <span class="letter">Parcela Variável.</span>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="capex-dto">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c3" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span class="letter">Capex - DTO</span>
                                </button>
                            </h5>
                        </div>


                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="demandas-plr">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c4" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span class="letter">Demandas - PLR</span>
                                </button>
                            </h5>
                        </div>


                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="contratos">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c1" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span class="letter">Análise de Contratos</span>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="engenharia">
            <h3 class="titulo-doc" id="gestao-ativo">Engenharia de O&M</h3>
            <div class="mt-3 mb-5">
                <div class="accordion accordion-taesa text-texto-principal-2" id="accordionExample">
                    <div class="card">
                        <div class="card-header p-0" id="telecom">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-left c1" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="letter">Canais de Telecom.</span>
                                </button>
                            </h5>
                        </div>
                        <!-- Esses elementos devem ser carregados quando forem chamados -->
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="projetos">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c2" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <span class="letter">Horas em projetos - GOM.</span>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="opex">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c3" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span class="letter">Realização de OPEX</span>
                                </button>
                            </h5>
                        </div>


                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="capex-gom">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c4" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span class="letter">CAPEX - GOM</span>
                                </button>
                            </h5>
                        </div>


                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="linha">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c1" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span class="letter">Relatório de Manutenção - Linha</span>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="oleo">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c2" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span class="letter">Análise de Óleo</span>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header p-0" id="oleo-reator">
                            <h5 class="mb-0">
                                <button class="btn btn-block collapsed btn-link fs-16 py-3 text-decoration-none text-left c3" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <span class="letter">Análise de Óleo - Reatores</span>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <p class="fs-16">Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
    <div id="doc-nav" class="doc-nav">
        <!--Criar aqui um foreach para expor as áreas de interesse e suas análises -->
        <nav id="doc-menu" class="nav doc-menu flex-column sticky head">
            <a href="#" class="nav-link active text-left text-menu">Menu</a>
            <a href="#intro" class="nav-link scrollto text-left text-menu">Picard</a>
            <a href="#como-utilizar" class="nav-link scrollto text-left text-menu">Como Utilizar?</a>
            <a href="#gestao-ativo" class="nav-link scrollto text-left text-menu">Gestão de Ativos</a>
            <nav class="doc-sub-menu nav flex-column">
                <a href="#vida" class="nav-link scrollto ml-5 text-menu">Vida últil dos Ativos</a>
                <a href="#parcela" class="nav-link scrollto ml-5 text-menu">Parcela Variável</a>
                <a href="#capex-dto" class="nav-link scrollto ml-5 text-menu">Capex - DTO</a>
                <a href="#demandas-plr" class="nav-link scrollto ml-5 text-menu">Demandas - PLR</a>
                <a href="#contrato" class="nav-link scrollto ml-5 text-menu">Análise de Contratos</a>
            </nav>
            <a href="#engenharia" class="nav-link scrollto text-left text-menu">Engenharia de O&M</a>
            <nav class="doc-sub-menu nav flex-column">
                <a href="#telecom" class="nav-link scrollto ml-5 text-menu">Canais de Telecom</a>
                <a href="#projetos" class="nav-link scrollto ml-5 text-menu">Horas em projetos - GOM</a>
                <a href="#opex" class="nav-link scrollto ml-5 text-menu">Realização de OPEX</a>
                <a href="#capex-gom" class="nav-link scrollto ml-5 text-menu">Capex - GOM</a>
                <a href="#linha" class="nav-link scrollto ml-5 text-menu">Relatório de Manutenção - Linha</a>
                <a href="#oleo" class="nav-link scrollto ml-5 text-menu">Análise de Óleo</a>
                <a href="#oleo-reator" class="nav-link scrollto ml-5 text-menu">Análise de Óleo - Reatores</a>
            </nav>
            <a href="#" class="nav-link scrollto text-left text-menu">Reforços e Melhorias</a>
            <nav class="doc-sub-menu nav flex-column">
                <a href="#" class="nav-link scrollto ml-5 text-menu">Execução Financeira - Projetos</a>
                <a href="#" class="nav-link scrollto ml-5 text-menu">Execução Física - Projetos</a>
            </nav>
        </nav>
    </div>
</div>
@endsection
