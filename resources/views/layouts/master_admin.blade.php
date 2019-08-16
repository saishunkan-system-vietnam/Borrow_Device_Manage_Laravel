@extends('layouts.master_base')

@section('content')
<div class="page-wrapper">
    <!-- HEADER MOBILE-->   
    @include('layouts.header_mobile')
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    @include('layouts.menu_left')
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->  
        @include('layouts.header_desktop')
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->    
            @yield('main_content')
        <!-- END MAIN CONTENT-->
    </div>
        <!-- END PAGE CONTAINER-->
</div>
@stop