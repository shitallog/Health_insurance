 <!-- sidebar menu area start -->
 @php
     $usr = Auth::guard('admin')->user();
 @endphp
 <div class="sidebar-menu">
    <div class="sidebar-header">
        <div class="logo">
            <a href="{{ route('admin.dashboard') }}">
                <h2 class="text-white">Admin</h2> 
            </a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">

                    @if ($usr->can('dashboard.view'))
                    <li class="active">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                        <ul class="collapse">
                            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        </ul>
                    </li>
                    @endif

                    @if ($usr->can('role.create') || $usr->can('role.view') ||  $usr->can('role.edit') ||  $usr->can('role.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-tasks"></i><span>
                            Roles & Permissions
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.roles.create') || Route::is('admin.roles.index') || Route::is('admin.roles.edit') || Route::is('admin.roles.show') ? 'in' : '' }}">
                            @if ($usr->can('role.view'))
                                <li class="{{ Route::is('admin.roles.index')  || Route::is('admin.roles.edit') ? 'active' : '' }}"><a href="{{ route('admin.roles.index') }}">All Roles</a></li>
                            @endif
                            @if ($usr->can('role.create'))
                                <li class="{{ Route::is('admin.roles.create')  ? 'active' : '' }}"><a href="{{ route('admin.roles.create') }}">Create Role</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    
                    @if ($usr->can('admin.create') || $usr->can('admin.view') ||  $usr->can('admin.edit') ||  $usr->can('admin.delete'))
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-user"></i><span>
                            Admins
                        </span></a>
                        <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('admin.admins.index') || Route::is('admin.admins.edit') || Route::is('admin.admins.show') ? 'in' : '' }}">
                            
                            @if ($usr->can('admin.view'))
                                <li class="{{ Route::is('admin.admins.index')  || Route::is('admin.admins.edit') ? 'active' : '' }}"><a href="{{ route('admin.admins.index') }}">All Admins</a></li>
                            @endif

                            @if ($usr->can('admin.create'))
                                <li class="{{ Route::is('admin.admins.create')  ? 'active' : '' }}"><a href="{{ route('admin.admins.create') }}">Create Admin</a></li>
                            @endif
                        </ul>
                    </li>
                    @endif

                    <li>
         <a href="javascript:void(0)" aria-expanded="true">
                            <i class="fa fa-star" aria-hidden="true"></i>
        <span>Insurer  Categories </span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_subcategory.index') || Route::is('health.insurance_subcategory.edit') || Route::is('health.insurance_subcategory.show') ? 'in' : '' }}">
    <li class="{{ Route::is('health.insurance_subcategory.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_subcategory.index') }}">SubCategories</a>
    </li>
    
    <li class="{{ Route::is('health.insurance_subcategory.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_subcategory.create') }}">Add SubCategories</a>
    </li>
    <li class="{{ Route::is('health.insurance_categories.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_categories.index') }}">Add Categories</a>
        </li>


        <li class="{{ Route::is('health.insurance_categories.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_categories.create') }}">Categories</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">Product</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add Product</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>Insurers Table</span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All Insurer Management</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add Insurer Management</a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>Plan features</span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All Plan features</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add Plan features</a>
        </li>
    </ul>
</li>



<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>Insurance Policy Management</span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All policies</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add policies</a>
        </li>
    </ul>
</li>


<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span> Quotes</span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All quotes</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add quotes</a>
        </li>
    </ul>
</li>



<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>Claims Management</span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All claims</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add claims</a>
        </li>
    </ul>
</li>


<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>Payments</span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All payments</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add payments</a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>Articles</span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All Articles</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add Aticles</a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>Feedback</span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All Feedback</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add Feedback</a>
        </li>
    </ul>
</li>

<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span> Reports Table </span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All Feedback</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add Feedback</a>
        </li>
    </ul>
</li>

<li>


    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>Notifications and Alerts</span>
    </a>

    
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All notifications</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add notifications</a>
        </li>
    </ul>
</li>
<li>
    <a href="javascript:void(0)" aria-expanded="true">
        <i class="fa fa-star" aria-hidden="true"></i>
        <span>Customer Support Management</span>
    </a>
    <ul class="collapse {{ Route::is('admin.admins.create') || Route::is('health.insurance_products.index') || Route::is('health.insurance_products.edit') || Route::is('health.insurance_products.show') ? 'in' : '' }}">
        <li class="{{ Route::is('health.insurance_products.index') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.index') }}">All Support_tickets</a>
        </li>
        <li class="{{ Route::is('health.insurance_products.create') ? 'active' : '' }}">
            <a href="{{ route('health.insurance_products.create') }}">Add Support_tickets</a>
        </li>
    </ul>
</li>

                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- sidebar menu area end -->



