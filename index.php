<?php
    require_once("controller/creader.php");
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include ("html/css.html"); ?>
    </head>
    <body>
        <?php include ("html/menu.html"); ?>
        <div id="wrap">
            
            <div class="container"> <!-- Container -->
                <div class="col-md-offset-2 col-lg-6"> <!-- Div -->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!-- Carrusel -->
                        <ol class="carousel-indicators"> <!-- Indicators -->
                            <li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
                            <li class=""       data-slide-to="1" data-target="#carousel-example-generic"></li>
                            <li class=""       data-slide-to="2" data-target="#carousel-example-generic"></li>
                            <li class=""       data-slide-to="3" data-target="#carousel-example-generic"></li>
                        </ol>
                        <div class="carousel-inner"> <!-- Wrapper for slides -->
                            <div class="item active" align="center">
                                <img alt="Primera" data-src="images/slide1.jpg" width="600px" height="200px" src="images/slide1.jpg"  >
                                <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                                </div>
                                <h3>Desarrollo de Proyectos</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu</p>
                            </div>
                            <div class="item" align="center">
                                <img alt="Segunda" data-src="" width="600px" height="200px" src="images/slide2.jpg"  >
                                <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                                </div>
                                <h3>Seguridad Digital</h3>
                                <p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                            </div>
                            <div class="item" align="center" >
                                <img alt="Tercera" data-src="" width="600px" height="200px" src="images/slide3.jpg">
                                <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                                </div>
                                <h3>Metodos Criptograficos</h3>
                                <p>abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ !"§ $%& /() =?* '<> #|; ²³~ @`´ ©«» ¤¼× {} abc def ghi jkl mno pqrs tuv wxyz ABC DEF GHI JKL MNO PQRS TUV WXYZ !"§ $%& /() =?* '<> #</p>
                                
                            </div>
                            <div class="item" align="center">
                                <img alt="Cuarta" data-src="" width="600px" height="200px" src="images/slide2.jpg" >
                                <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                                </div>
                                <h3>Vulnerabilidades</h3>
                                <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. </p>
                            </div>
                        </div>
                        <a class="left carousel-control" data-slide="prev" href="#carousel-example-generic">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" data-slide="next" href="#carousel-example-generic">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div> <!-- Carrusel -->

                    <br>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. </p>

                    <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>

                    <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, </p>
                </div> <!-- Div -->
            </div> <!-- Container -->

        </div>
        <?php include ("html/footer.html"); ?>
    </body>
</html>
