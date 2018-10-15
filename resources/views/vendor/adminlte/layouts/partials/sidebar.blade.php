<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Control</li>
            <!-- Optionally, you can add icons to the links -->
            @if (Auth::user()->type=="admin")

            
            <li class="active"><a href=""><i class='fa fa-link'></i> <span>Inicio</span></a></li>
            
        
            <li><a href="/user/vista"><i class='fa fa-link'></i> <span>Usuarios</span></a></li>
            <li><a href="/item/vista"><i class='fa fa-database'></i> <span>Item</span></a></li>
             
            <li><a href="/stock/vista"><i class='fa fa-link'></i> <span>Stock</span></a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-database"></i> <span>REPORTES</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="pdf/listado_reportes" onclick="cargarlistado(3,1);" ><i class="fa fa-circle-o"></i> Reportes </a></li>
                
              </ul>
            </li>  

            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Inventario</a></li>
                    <li><a href="#">Ventas</a></li>
                    @endif
                     <li class="active"><a href=""><i class='fa fa-link'></i> <span>Basico</span></a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
