<ul class="nav nav-pills nav-stacked">
    <li class="{{ set_link_active('users.home') }}">
        <a href="/myYSC/"><i class="fa fa-home"></i> Home</a>
    </li>
    <li class="{{ set_link_active('users.profile') }}">
        <a href="/myYSC/profile"><i class="fa fa-user"></i> Profile</a>
    </li>
    <li class="{{ set_link_active('users.billing') }}">
        <a href="/myYSC/billing"><i class="fa fa-dollar"></i> Billing</a>
    </li>
    @if(Auth::user()->hasRole('owner'))
        <li class="divider"></li>
        <li>
            <a href="/myYSC/manage"><i class="fa fa-gears"></i> Manage</a>
        </li>
    @endif
    <li class="divider"></li>
    <li>
        <a href="/myYSC/logout"><i class="fa fa-sign-out"></i> Logout</a>
    </li>
</ul>