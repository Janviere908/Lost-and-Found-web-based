<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
            <img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
            


                <li>
                    <a href="{{route('home')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                    </a>
                </li>

                
                <li>
                    <a href="{{route('lost-documents.index')}}" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-right-arrow1"></span><span class="mtext">Lost documents</span>
                    </a>
                </li>
              <!--  <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-right-arrow1"></span><span class="mtext">Lost Documents</span>
                 
                      
                    </a>
                    <ul class="submenu">
                    <li><a href="{{route('lost_documents.index')}}">All Lost document</a></li>
                        <li><a href="{{route('lost_documents.create')}}">New Lost document </a></li>
                    
                    </ul>
                </li>
            -->

               
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-right-arrow1"></span><span class="mtext">Found Documents</span>
                 
                      
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('found-documents.index')}}">All found document</a></li>
                            <li><a href="{{route('found-documents.create')}}">New found document </a></li>
                        
                        </ul>
                    
                </li>





            
              
                
            
        
                
            
                
        
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>