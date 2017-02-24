<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">


            <p class="centered"><a href="profile.html"><img src="$Themedir/img/ui-danro.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Der Testdude</h5>

            <li class="mt">
                <a href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>$Title</span>
                </a>
            </li>

            <% loop $Menu(1) %>
                <li class = "sub-menu">

                    <a class="$LinkngMode" href="$Link">
                        <i class="fa fa-desktop"></i>
                        <span>$MenuTitle</span>
                    </a>
                </li>
            <% end_loop %>



        </ul>
    </div>
</aside>