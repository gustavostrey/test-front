<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php @include_once ('extensao/metas.php'); ?>
    </head>
    <body> 
        <div class="smartphone">
            <div class="photo">
                <span></span>
            </div>
            <div class="screen">
                <div class="screen-one">
                    <div class="top">
                        <div class="bullet">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="fa fa-wifi" aria-hidden="true"></i>
                        </div>
                        <div id="hour">
                        </div>
                        <div class="battery">
                            95% <i class="fa fa-battery-three-quarters" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div id="hour-big">
                    </div>
                    <span id="date"></span>
                    <div class="bts">
                        <a class="desbloquear"><span>Clique para desbloquear</span></a>
                        <i class="fa fa-camera" aria-hidden="true"></i>
                        <div class="line">
                            <span class="line-bt"></span>
                            <div class="hover-bts">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                <i class="fa fa-wifi" aria-hidden="true"></i>
                                <i class="fa fa-bluetooth-b" aria-hidden="true"></i>
                                <i class="fa fa-moon-o" aria-hidden="true"></i>
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="screen-two">
                    <span id="voltar"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</span>
                    <img id="avatar">
                    <div class="dados">
                        <h1 id="name"></h1>
                        <h3 id="email"></h3>
                    </div>
                </div>
                <div class="screen-three">
                    <h4>Use o Touch ID ou Digite o Código</h4>
                    <div class="bullet-codigo">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="number-code">
                        <span>
                            1
                        </span>
                        <span>
                            2
                            <small>A B C</small>
                        </span>
                        <span>
                            3
                            <small>D E F</small>
                        </span>
                        <span>
                            4
                            <small>G H I</small>
                        </span>
                        <span>
                            5
                            <small>J K L</small>
                            
                        </span>
                        <span>
                            6
                            <small>M N O</small>
                        </span>
                        <span>
                            7
                            <small>P Q R S</small>
                        </span>
                        <span>
                            8
                            <small>T U V</small>
                        </span>
                        <span>
                            9
                            <small>W X Y Z</small>
                        </span>
                        <span>0</span>
                    </div>
                    <span id="cancelar">Cancelar</span>
                </div>
            </div>
            <span class="home"></span>
        </div>
    </body> 
    <script src="js/jquery.min.js"></script>
    <script src="js/scripts.js?=<?php echo time(); ?>"></script>
</html>