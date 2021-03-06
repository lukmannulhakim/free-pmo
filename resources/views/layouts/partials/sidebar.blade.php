<nav class="navbar navbar-default hidden-md" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            Menu
        </button>
    </div>
</nav>

<div class="navbar-default sidebar hidden-print" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <a class="navbar-brand text-center" title="Home | {{ Option::get('agency_tagline', 'Laravel app description') }}" href="{{ route('home') }}">
            {{ appLogoImage(['class' => 'sidebar-logo']) }}
            <div class="small" style="margin-top:10px">{{ config('app.name') }}</div>
        </a>
        <ul class="nav" id="side-menu">
            <li>{!! html_link_to_route('home', trans('nav_menu.dashboard'), [], ['icon' => 'dashboard']) !!}</li>
            @can('manage_agency')
            <li>{!! html_link_to_route('jobs.index', trans('job.on_progress').' <span class="badge pull-right">'.AdminDashboard::onProgressJobCount().'</span>', [], ['icon' => 'tasks']) !!}</li>
            <li>
                {!! html_link_to_route('projects.index', trans('project.projects') . ' <span class="fa arrow"></span>', [], ['icon' => 'table']) !!}
                @include('view-components.sidebar-project-list-links')
            </li>
            <li>{!! html_link_to_route('reports.payments.yearly', 'Penghasilan', [], ['icon' => 'line-chart']) !!}</li>
            <li>{!! html_link_to_route('reports.current-credits', 'Piutang', [], ['icon' => 'money']) !!}</li>
            <li>{!! html_link_to_route('users.calendar', 'Calendar', [], ['icon' => 'calendar']) !!}</li>
            <li>{!! html_link_to_route('subscriptions.index', trans('subscription.subscription'), [], ['icon' => 'retweet']) !!}</li>
            <li>{!! html_link_to_route('payments.index', trans('payment.payments'), [], ['icon' => 'money']) !!}</li>
            <li>{!! html_link_to_route('customers.index', trans('customer.list'), [], ['icon' => 'users']) !!}</li>
            <li>{!! html_link_to_route('vendors.index', trans('vendor.list'), [], ['icon' => 'users']) !!}</li>
            @endcan
            @can('manage_backups')
            <li><a href="{{ route('backups.index') }}"><i class="fa fa-refresh fa-fw"></i> Backup/Restore DB</a></li>
            @endcan
            <li>{!! html_link_to_route('auth.change-password', trans('auth.change_password'), [], ['icon' => 'lock']) !!}</li>
            <li>{!! html_link_to_route('auth.logout', trans('auth.logout'), [], ['icon' => 'sign-out']) !!}</li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
