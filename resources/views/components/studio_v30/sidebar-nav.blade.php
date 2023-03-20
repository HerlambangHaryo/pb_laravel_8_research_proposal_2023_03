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
            <div class="menu-item @if($title == 'Rapidapi') active @endif">
                <a href="{{ route('Rapidapi.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fa-solid fa-fire"></i>
                    </span>
                    <span class="menu-text">
                        Rapid Api 
                    </span>
                </a>
            </div> 
            <div class="menu-item @if($title == 'Countries') active @endif">
                <a href="{{ route('Countries.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-globe"></i>
                    </span>
                    <span class="menu-text">
                        Country 
                    </span>
                </a>
            </div> 
            <div class="menu-item @if($title == 'Leagues') active @endif">
                <a href="{{ route('Leagues.index') }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-trophy"></i>
                    </span>
                    <span class="menu-text">
                        League 
                    </span>
                </a>
            </div>  
            <div class="menu-item @if($title == 'Notstarted') active @endif">
                <a href="{{ route('Notstarted.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-play-circle"></i>
                    </span>
                    <span class="menu-text">
                        Not Started 
                    </span>
                </a>
            </div> 
            <div class="menu-item @if($title == 'Starring') active @endif">
                <a href="{{ route('Starring.index'  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-star "></i>
                    </span>
                    <span class="menu-text">
                        Starring
                    </span>
                </a>
            </div> 
            <div class="menu-item @if($title == 'Datedone') active @endif">
                <a href="{{ route('Datedone.day', 2  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-play-circle"></i>
                    </span>
                    <span class="menu-text">
                        Date Done
                    </span>
                </a>
            </div> 
            <div class="menu-item @if($title == 'Matchfinished') active @endif">
                <a href="{{ route('Matchfinished.day', 7  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-hourglass-end"></i>
                    </span>
                    <span class="menu-text">
                        Match Finished
                    </span>
                </a>
            </div> 
            <div class="menu-item @if($title == 'Matchfinished') active @endif">
                <a href="{{ route('Matchfinished.day', 7  ) }}" class="menu-link">
                    <span class="menu-icon">
                        <i class="fas fa-hourglass-end"></i>
                    </span>
                    <span class="menu-text">
                        Match Finished
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