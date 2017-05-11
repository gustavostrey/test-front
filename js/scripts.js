    screenTwo();
    function screenTwo(){
        $(".desbloquear").click(function(){
            $(".screen-two").toggleClass("screen-two-show");
        }); 
        $("#voltar").click(function(){
            $(".screen-two").removeClass("screen-two-show");
        }); 
    }

    screenThree();
    function screenThree(){
        $(".home").click(function(){
            $(".screen-three").toggleClass("screen-three-show");
        }); 
        $("#cancelar").click(function(){
            $(".screen-three").removeClass("screen-three-show");
            $(".screen-two").removeClass("screen-two-show");
        });  
    }

    /*** PEGA DADOS DO GITHUB ***/
    $(function(){
        $.get('https://api.github.com/users/gustavostrey', function(response){
            $('#avatar').attr('src', response.avatar_url);
            $('#name').text(response.name);
            $('#email').text(response.blog);
        });
    });

    /*** HORAS **/
    function Tempo(){
        horario = new Date()
        hora = horario.getHours()
        minuto = horario.getMinutes()
        if (hora < 10) {
            hora = "0" + hora
        }
        if (minuto < 10) {
            minuto = "0" + minuto
        }
        document.getElementById("hour").innerHTML = hora + ":" + minuto + " AM";
        document.getElementById("hour-big").innerHTML = hora + ":" + minuto;
    }
    window.setInterval("Tempo()")

    /*** DATA ***/
    data();
    function data(){
        dayName = new Array ("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado")
        monName = new Array ("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Agosto", "Outubro", "Novembro", "Dezembro")
        now = new Date
        document.getElementById("date").innerHTML = dayName[now.getDay() ] + "," + now.getDate () + " de " + monName [now.getMonth() ];
    }
