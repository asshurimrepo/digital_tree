<?php global $main_nav; ?>

<nav class="navbar navbar-default  main-navbar" role="navigation">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> <img src="<?=asset('assets/img/logo.svg')?>" class="img-responsive" alt="Alfareeda Logo"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav onepager navbar-right">

                <?php foreach($main_nav as $nav): ?>
                    <li class="<?=is_active($nav->object_id)?>">
                        <a href="<?=$nav->url?>"><?=$nav->title?></a>
                    </li>
                <?php endforeach; ?>

            </ul>


        </div><!-- /.navbar-collapse -->
    </div>
</nav>