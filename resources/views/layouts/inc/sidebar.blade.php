<div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item {{Request::is('dashboard')?'active':'';}}">
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('categories')?'active':'';}}">
                        <a class="nav-link" href="{{url('categories')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Categories</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('add-category')?'active':'';}}">
                        <a class="nav-link" href="{{url('add-category')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Add Category</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('products')?'active':'';}}">
                        <a class="nav-link" href="{{url('products')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Products</p>
                        </a>
                    </li>
                    <li class="nav-item {{Request::is('add-products')?'active':'';}}">
                        <a class="nav-link" href="{{url('add-products')}}">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Add Products</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./table.html">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table List</p>
                        </a>
                    </li>
             
                </ul>
            </div>
        </div>