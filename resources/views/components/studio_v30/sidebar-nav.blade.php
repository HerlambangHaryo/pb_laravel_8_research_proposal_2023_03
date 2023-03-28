<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-header">Nav</div>
            
            <div class="menu-item @if($title == 'Dashboard') active @endif">
                <a href="{{ route('Dashboard.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </span>
                    <span class="menu-text">
                        Dashboard 
                    </span>
                </a>
            </div>   

            <div class="menu-item @if($title == 'Peneliti') active @endif">
                <a href="{{ route('Peneliti.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-user-graduate"></i>
                    </span>
                    <span class="menu-text">
                        Peneliti 
                    </span>
                </a>
            </div>   

            <div class="menu-item @if($title == 'Perguruan_tinggi') active @endif">
                <a href="{{ route('Perguruan_tinggi.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-school"></i>
                    </span>
                    <span class="menu-text">
                        Perguruan Tinggi 
                    </span>
                </a>
            </div>   

            <div class="menu-item @if($title == 'Penelitian') active @endif">
                <a href="{{ route('Penelitian.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-book"></i>
                    </span>
                    <span class="menu-text">
                        Penelitian 
                    </span>
                </a>
            </div>  

            

        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
    
    <!-- BEGIN mobile-sidebar-backdrop -->
    <button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
    <!-- END mobile-sidebar-backdrop -->
</div>
<!-- END #sidebar -->