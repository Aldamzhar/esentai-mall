<div class="side-menu sidebar-inverse">
    <nav class="navbar navbar-default" role="navigation">
        <div class="side-menu-container">
            <div class="navbar-header" style="background-color: #B0828D;">

                <a class="navbar-brand" href="{{ route('voyager.dashboard') }}">
                    <div class="logo-icon-container">
                        <img src="/voyager-assets/images/esentai.jpg" alt="Logo Icon">
                    </div>
                    <div class="title" style="font-size: 16px;  text-align: left; margin-left: 0px; color: #F7F7F7; font-weight: bold;">{{Voyager::setting('admin.title', 'Esentai Mall')}}</div>
                </a>
            </div>
        </div>
        <div id="adminmenu">
            <admin-menu :items="{{ menu('admin', '_json') }}"></admin-menu>
        </div>
    </nav>
</div>
