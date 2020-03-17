@extends('layouts.app')

@section('title', 'Index')

@section('sidebar')

@parent

@endsection

@section('content')
<div class="doc-content col-md-9 col-12 order-1">
  <div class="content-inner">
    
  </div>
</div>    
<div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
  <div id="doc-nav" class="doc-nav">
    <!--Criar aqui um foreach para expor as áreas de interesse e suas análises -->
      <nav id="doc-menu" class="nav doc-menu flex-column sticky head">
        <a href="#" class="nav-link scrollto text-left text-menu">Gestão de Ativos</a>
          <nav class="doc-sub-menu nav flex-column">
            <a href="#" class="nav-link scrollto ml-5 text-menu">Vida últil dos Ativos</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Parcela Variável</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Capex - DTO</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Demandas - PLR</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Análise de Contratos</a>
          </nav>
          <a href="#" class="nav-link scrollto text-left text-menu">Engenharia de O&M</a>
          <nav class="doc-sub-menu nav flex-column">
            <a href="#" class="nav-link scrollto ml-5 text-menu">Canais de Telecom</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Horas em projetos - GOM</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Realização de OPEX</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Capex - GOM</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Relatório de Manutenção - Linha</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Análise de Óleo</a>
            <a href="#" class="nav-link scrollto ml-5 text-menu">Análise de Óleo - Reatores</a>
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
