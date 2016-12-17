
    <footer>
        <div class="container-fluid">
            <div class="navbar-footer">
      <?=htmlspecialchars(" (c)<?phpDevs>")?>
            </div>
        </div>
    </footer>

<!--    <h2>Why are we so cool?</h2>-->
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
<!--        <ol class="carousel-indicators">-->
<!--            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--            <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--            <li data-target="#myCarousel" data-slide-to="2"></li>-->
<!--        </ol>-->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>"They drink a lot of beer"<br><span style="font-style:normal;">Vankata, bartender at bar Friday</span></h4>
            </div>
            <div class="item">
                <h4>"Feeders at LoL"<br><span style="font-style:normal;">Kalibrata, last season Challenger EUW</span></h4>
            </div>
            <div class="item">
                <h4>"We like it izi pizi style"<br><span style="font-style:normal;">The phpDevs Team... trololo</span></h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <?php require_once('fill-posted-fields.php'); ?>

    <?php require_once('show-validation-errors.php'); ?>

</body>

</html>
