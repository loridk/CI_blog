<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CI Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/journal/bootstrap.min.css">

</head>
<body>

<div class="container">

    <div class="row">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a href="/CI_blog" class="navbar-brand">CI Blog</a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse navbar-right" id="navbar-main">

                    <!-- If user -->

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Username <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="download">
                                <li><a href="<?php echo site_url('new_post_form'); ?>">New Post</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo site_url('logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>


                    <!-- Else -->

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">New User <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="download">
                                <li><a href="<?php echo site_url('login'); ?>">Login</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo site_url('register_form'); ?>">Register</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>