<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li @if((Request::is('home'))OR(Request::is('home/*'))) class="active" @endif>
                    <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fa fa-video-camera camera" aria-hidden="true"></i> <span> Access Control</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled" style="display: none;">
                        <li>
                            <a href="{{ route('user.index') }}">User Lists</a>
                        </li>

                        <li>
                            <a href="{{ route('role.index') }}">Roles</a>
                        </li>

                        <li>
                            <a href="{{ route('permission.index') }}">Permissions</a>
                        </li>

                        <li>
                            <a href="">Role Permission Matrix</a>
                        </li>

                        <li>
                            <a href="">Role User Matrix</a>
                        </li>

                        <li>
                            <a href="">User Direct Permissions</a>
                        </li>

                        <li>
                            <a href="">Route Permits</a>
                        </li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</div>
