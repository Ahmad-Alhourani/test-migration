<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                {{ __('menus.backend.sidebar.general') }}
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/dashboard')) }}" href="{{ route('admin.dashboard') }}"><i class="icon-speedometer"></i> {{ __('menus.backend.sidebar.dashboard') }}</a>
            </li>


        

        

        {{--start_Test_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/tests')) }}" href=" {{ route('admin.test.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.tests') }}</a>
            </li>
            {{--end_Test_end--}}

        

        {{--start_Ahmad_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/ahmads')) }}" href=" {{ route('admin.ahmad.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.ahmads') }}</a>
            </li>
            {{--end_Ahmad_end--}}

        {{--start_School_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/schools')) }}" href=" {{ route('admin.school.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.schools') }}</a>
            </li>
            {{--end_School_end--}}

        {{--start_Student_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/students')) }}" href=" {{ route('admin.student.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.students') }}</a>
            </li>
            {{--end_Student_end--}}

        {{--start_Company_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/companies')) }}" href=" {{ route('admin.company.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.companies') }}</a>
            </li>
            {{--end_Company_end--}}

        

        

        

        

        

        {{--start_Branch_start--}}
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/branches')) }}" href=" {{ route('admin.branch.index') }}"><i class="icon-list"></i> {{ __('menus.backend.sidebar.branches') }}</a>
            </li>
            {{--end_Branch_end--}}

{{--Do not delete me :) I'm used for auto-generation--}}

            <li class="nav-title">
                {{ __('menus.backend.sidebar.system') }}
            </li>

            @if ($logged_in_user->isAdmin())
                <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/auth*'), 'open') }}">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="icon-user"></i> {{ __('menus.backend.access.title') }}

                        @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                        @endif
                    </a>

                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/user*')) }}" href="{{ route('admin.auth.user.index') }}">
                                {{ __('labels.backend.access.users.management') }}

                                @if ($pending_approval > 0)
                                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/role*')) }}" href="{{ route('admin.auth.role.index') }}">
                                {{ __('labels.backend.access.roles.management') }}
                            </a>
                        </li>
                    </ul>
                </li>
            @endif

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-list"></i> {{ __('menus.backend.log-viewer.main') }}
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer')) }}" href="{{ route('log-viewer::dashboard') }}">
                            {{ __('menus.backend.log-viewer.dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}" href="{{ route('log-viewer::logs.list') }}">
                            {{ __('menus.backend.log-viewer.logs') }}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div><!--sidebar-->