<html lang="en">

<head>
    <style>
    #sidebar {
        /* position: fixed; */
        width: 100%;
        height: 100px;
        background: #37474F;

    }

    #sidebar header {
        background-color: #263238;
        font-size: 20px;
        line-height: 52px;
        text-align: center;
        color: #fff;
        padding: 10px 0px;
    }

    #sidebar .sidebar-nav {
        display: flex;

    }

    #sidebar .sidebar-nav .nav-route-list {
        text-decoration: none;
        display: inline-block;
        width: 50%;
        height: 40px;
        text-align: center;
    }

    #sidebar .sidebar-nav .nav-list {
        color: #fff;
    }

    #sidebar .sidebar-nav .nav-route-list:hover {
        background: gray;
    }
    </style>
</head>

<body>
    <div id="sidebar">
        <header>
            <?php echo "<h4>Hello, {$_SESSION['username']}!</h4>"; ?>
        </header>
        <div class="sidebar-nav">
            <a href="index.php?page=landingPageSlider" class="nav-route-list border-end" >
                <div class="nav-list">
                    LandingPage Slider
                </div>
            </a>
            <a href="index.php?page=teamMemberAdmin" class="nav-route-list">
                <div class="nav-list">
                    Team Member
                </div>
            </a>
        </div>
    </div>
</body>

</html>