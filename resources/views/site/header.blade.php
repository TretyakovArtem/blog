<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><h5>PATHFINDER</h5></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('posts') }}">Home</a></li>
                <li><a href="{{ route('contacts') }}">Контакты</a></li>
                <li><a href="https://github.com/TretyakovArtem">GitHub</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </ul>
        </div>
    </div>
</nav>
