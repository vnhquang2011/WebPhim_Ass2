<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.html">Admin Panel</a>
	</div>
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul id="active" class="nav navbar-nav side-nav">
			<li>
				<a href="index.php">
					<i class="fa fa-bullseye"></i> Dashboard</a>
			</li>
			<li>
				<a href="post.php">
					<i class="fa fa-tasks"></i> Post film</a>
			</li>
			<li>
				<a href="addUser.php">
					<i class="fa fa-user-plus"></i> Add user</a>
			</li>
			<li>
				<a href="edit_delete.php">
					<i class="fa fa-edit"></i> Delete and Edit User</a>
			</li>
		</ul>
		<ul class="nav navbar-nav navbar-right navbar-user">
			<!-- <li class="dropdown messages-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li class="dropdown-header">2 New Messages</li>
                <li class="message-preview">
                    <a href="#">
                        <span class="avatar"><i class="fa fa-bell"></i></span>
                        <span class="message">Security alert</span>
                    </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                    <a href="#">
                        <span class="avatar"><i class="fa fa-bell"></i></span>
                        <span class="message">Security alert</span>
                    </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
            </ul>
        </li> -->
			<li>
				<form class="navbar-search">
					<input type="text" placeholder="Search" class="form-control">
				</form>
			</li>
			<li class="divider-vertical"></li>
			<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<i class="fa fa-user"></i> Steve Miller
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="#">
							<i class="fa fa-user"></i> Profile</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-power-off"></i> Log Out</a>
					</li>

				</ul>
			</li>

		</ul>
	</div>
</nav>