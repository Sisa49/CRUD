<?php
/**
 * Created by PhpStorm.
 * User: sisa-
 * Date: 28.12.2017
 * Time: 18:04
 */
echo <<< END
    <div class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Pharmacy - Simple CRUD</a>
				</div>
				<div class="collapse navbar-collapse" id="mynavbar-content">
					<ul class="nav navbar-nav">
						<li>
							<a href="index.php?action=add">Add</a>
						</li>
						<li>
							<a href="index.php?action=view">View</a>
						</li>
						<li>
							<a href="index.php?action=view">Advanced View</a>
						</li>
					</ul>
				</div>
			</div>
	</div>
END;
