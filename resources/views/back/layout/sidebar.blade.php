<div class="navbar-default sidebar" role="navigation">
                                <div class="sidebar-nav navbar-collapse">
                                    <ul class="nav" id="side-menu">

                                        <li>
                                            <a href="{{route('backend')}}"><i class="fa fa-dashboard fa-fw"></i>Home</a>
                                        </li>
                                        @if(\Illuminate\Support\Facades\Auth::user()->role_id =='1' )
                                        <li>
                                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý danh mục<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="{{ route('back.categories.index') }}">Danh sách danh mục</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý sản phẩm<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="{{ route('back.products.index') }}">Danh sách sản phẩm</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-third-level -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý người dùng<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="{{ route('back.users.index') }}">Danh sách người dùng</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-third-level -->
                                        </li>
                                        <li>
                                            <a href="{{ route('back.orders.index') }}">Orders History</a>
                                        </li>
                                        @elseif(\Illuminate\Support\Facades\Auth::user()->role_id =='2')
                                        <li>
                                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý danh mục<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="{{ route('back.categories.index') }}">Danh sách danh mục</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý người dùng<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="{{ route('back.users.index') }}">Danh sách người dùng</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-third-level -->
                                        </li>
                                        <li>
                                            <a href="{{ route('back.orders.index') }}">Orders History</a>
                                        </li>
                                        @elseif(\Illuminate\Support\Facades\Auth::user()->role_id =='3')
                                        <li>
                                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý danh mục<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="{{ route('back.categories.index') }}">Danh sách danh mục</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-second-level -->
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Quản lý sản phẩm<span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                <li>
                                                    <a href="{{ route('back.products.index') }}">Danh sách sản phẩm</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-third-level -->
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- /.sidebar-collapse -->
                            </div>
                            <!-- /.navbar-static-side -->
