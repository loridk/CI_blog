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
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo site_url('page/new_post'); ?>">New Post</a>
                        </li>
                    </ul>

                    <!--<ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Log in <span class="caret"></span></a>
                            <ul class="dropdown-menu" aria-labelledby="download">
                                <li><a href="#">New Post</a></li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>-->

                </div>
            </div>
        </div>
    </div>