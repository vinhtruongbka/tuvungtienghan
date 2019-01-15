<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button> 
        <a class="navbar-brand" href="#">Dùng menu ấn 3 vạch trắng</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href='https://tuvungtienghan.com/'>trang chủ</a>
            </li>
            @foreach ($menus as $menu)
            <li>
                <a href='https://tuvungtienghan.com/'>{{$menu->Title}}</a>
            </li>
            @endforeach
        </ul>
    </div><!--/.nav-collapse -->
</div>