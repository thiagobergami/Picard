@extends('layouts.app')

@section('title', 'Index')

@section('sidebar')

@parent

@endsection

@section('content')
<div class="row">
    <div class="col-12 col-md-12 mt-5">
        <p class="paragrafo text-justificado text-texto-principal-2">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Nulla rhoncus mauris commodo efficitur facilisis. Sed ut diam purus. Mauris neque eros,
            sodales a placerat in, rutrum sed nulla. lorem, auctor non lectus nec, fermentum laoreet eros. Lorem
            ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus mauris commodo efficitur facilisis. Sed
            ut diam purus. Mauris neque eros, sodales a placerat in, rutrum sed nulla. lorem, auctor non lectus nec,
            fermentum laoreet eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla rhoncus mauris
            commodo efficitur facilisis. Sed ut diam purus. Mauris neque eros, sodales a placerat in, rutrum sed
            nulla. lorem, auctor non lectus nec, fermentum laoreet eros. </p>
    </div>
    <!-- accordion com icone -->
    
   
    <div class="col-lg-4 col-md-6">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
          </div>
    </div>
</div>
@endsection
