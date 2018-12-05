<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;">
            	<div class="sidebar-nav slimscrollsidebar" style="overflow: hidden; width: auto; height: 100%;">
                	<div class="sidebar-head">
                    	<h3>
                    		<span class="fa-fw open-close">
                    			<i class="ti-close ti-menu"></i>
                    		</span> 
                    		<span class="hide-menu">Navigation</span>
                    	</h3>
                	</div>
	                <ul class="nav" id="side-menu">
	                    <li class="user-pro">
	                        <a href="#" class="waves-effect">
	                        	<img src="{{ url('imgs/profile-icon.png') }}" alt="user-img" class="img-circle"> 
	                        	<span class="hide-menu"> 
	                        		@if (Auth::user())
	                        			{{ Auth::user()->name }}
	                        		@else
	                        			Not Logged In
	                        		@endif
	                        		<span class="fa arrow"></span>
	                        	</span>
	                        </a>
	                        <ul class="nav nav-second-level collapse">
	                            <li>
	                            	<a href="javascript:void(0)">
	                            		<i class="ti-user"></i> 
	                            		<span class="hide-menu">My Profile</span>
	                            	</a>
	                            </li>
	                            
	                            <li>
	                            	<a href="javascript:void(0)">
	                            		<i class="fa fa-power-off"></i> 
	                            		<span class="hide-menu">Logout</span>
	                            	</a>
	                            </li>
	                        </ul>
	                    </li>
	                    <li class="active"> 
	                    	<a href="{{ route('home') }}" class="waves-effect active">
	                    		<i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> 
	                    		<span class="hide-menu"> News List </span>
	                    	</a>
	                    </li>
	                    <li class="active"> 
	                    	<a href="{{ route('home') }}" class="waves-effect active">
	                    		<i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> 
	                    		<span class="hide-menu"> Archives </span>
	                    	</a>
	                    </li>
	                   	
	                </ul>
            	</div>

	            <div class="slimScrollBar" style="background: rgba(0, 0, 0, 0.5); width: 6px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; left: 1px; height: 317.368px;">
	            	
	            </div>
	            <div class="slimScrollRail" style="width: 6px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; left: 1px;">
	            	
	            </div>
        	</div>
        </div>
        <!-- ============================================================== -->
        