<!-- header start -->
<div class="header">
    <div class="pull-left">
        <div class="logo"><a href="index.php"><!-- <img src="assets/images/logo.png" alt="" /> --><span>BBS论坛系统</span></a></div>
        <div class="hamburger sidebar-toggle">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
    <div class="pull-right p-r-15">
        <ul>
            <li class="header-icon dib"><a href="#search"><i class="ti-search"></i></a></li>

            <li class="header-icon dib"><!-- 暂时不要头像<img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> --> <span class="user-avatar"><?php echo $_SESSION['username']; ?>&nbsp;<i class="ti-angle-down f-s-10"></i></span>
                <div class="drop-down dropdown-profile">
                    <div class="dropdown-content-heading">
                            <span class="text-left">你的当前身份：
                                <span class="trial-day">管理员</span>
                           </span>
                    </div>
                    <div class="dropdown-content-body">
                        <ul>
                            <li><a href="profile.php"><i class="ti-user"></i> <span>个人主页</span></a></li>
                            <li><a href="../index.php"><i class="ti-home"></i> <span>返回主页</span></a></li>
                            <li><a href="#"><i class="ti-help-alt"></i> <span>关于我</span></a></li>
                            <li><a href="../logout.php"><i class="ti-power-off"></i> <span>注销</span></a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- header end -->