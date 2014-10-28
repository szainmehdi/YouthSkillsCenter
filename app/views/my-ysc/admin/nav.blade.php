<ul class="nav nav-pills nav-stacked">
    <li class="{{ set_link_active('users.home') }}">
        <a href="{{ URL::route('users.home') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </li>
    <li class="divider"></li>
    <li class="{{ set_link_active(['manage.families', 'manage.families.create']) }}">
        <a href="{{ URL::route('manage.families') }}"><i class="fa fa-group"></i> Families</a>
    </li>
    <li>
        <a href="/myYSC/logout"><i class="fa fa-sign-out"></i> Logout</a>
    </li>
</ul>