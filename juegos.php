<?php include('header.php')?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row" style="background: #2B2D42;height:3em;color: white;font-size: 1em; display: flex;
  justify-content: center;
  align-items: center;">
			<!-- shop -->
			<div class="col-xs-4"  style="text-align: left">
                <i class="fa fa-check-circle-o"></i> <small id="puntos">00</small>/ <small>05</small>
            </div>
            <div class="col-xs-4"  style="text-align: center">
                Haz click solo sobre la respuesta correcta.
            </div>
            <div class="col-xs-4" style="text-align: right">
                <i class="fa fa-heart-o"></i>
                <div class="timer">
                    1:00
                </div>
            </div>
		</div>
        <div class="row"
             style=" display: flex;
              justify-content: center;
              align-items: center;
height: 10em"
        >
            <div id="botones">
                <button class="btn btn-success" id="jugar">Jugar</button>
                <button class="btn btn-success" id="parar">Parar</button>
            </div>
            <div id="mostrarpuntaje">
                <h1 id="mensaje"></h1>
                <a href="juegos.php">Otra vez</a>
            </div>
            <div id="juegos">
                <div id="pregunta1">
                    <p >No quiero que ________ esa caja</p>
                    <row>
                        <div class="col-xs-6" onclick="nota(2,0)">Bacies</div>
                        <div class="col-xs-6" onclick="nota(2,1)">Vacíes</div>
                    </row>
                </div>
                <div id="pregunta2">
                    <p >Es que eres muy...</p>
                    <row>
                        <div class="col-xs-6" onclick="nota(3,1)">Vanidoso</div>
                        <div class="col-xs-6" onclick="nota(3,0)">Banidoso</div>
                    </row>
                </div>
                <div id="pregunta3">
                    <p >Ya no seguiré con esta...</p>
                    <row>
                        <div class="col-xs-6" onclick="nota(4,1)">Conversación</div>
                        <div class="col-xs-6" onclick="nota(4,0)">Conbersación</div>
                    </row>
                </div>
                <div id="pregunta4">
                    <p >Ya vi que ______ tu casa, está muy _____</p>
                    <row>
                        <div class="col-xs-6" onclick="nota(5,1)">Renovaste / Bonita</div>
                        <div class="col-xs-6" onclick="nota(5,0)">Renobaste / Bonita</div>
                    </row>
                </div>
                <div id="pregunta5">
                    <p >Deja _______ el caldo</p>
                    <row>
                        <div class="col-xs-6" onclick="nota(6,1)">Hervir</div>
                        <div class="col-xs-6" onclick="nota(6,0)">Herbir</div>
                    </row>
                </div>
            </div>
        </div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<?php include('footer.php')?>
<script>
    $('#juegos').hide();
    $('#pregunta1').hide();
    $('#pregunta2').hide();
    $('#pregunta3').hide();
    $('#pregunta4').hide();
    $('#mostrarpuntaje').hide();
    $('#pregunta5').hide();
    var referenciaTimer;
    var tiempo=10;
    var mipuntaje=0;
    $('#jugar').click(function (){
        $('#botones').hide();
        $('#juegos').show();
        $('#pregunta1').show();
        referenciaTimer =setInterval(function() {
            if (tiempo==0){
                clearInterval(referenciaTimer)
                tiempo=60;
                // $('#botones').show();
                // $('#juegos').hide();
                $('#mostrarpuntaje').show();
                $('#mensaje').html('Tu puntaje es '+mipuntaje);
                mipuntaje=0;
            }else{
                $('.timer').text(tiempo);
            }
            tiempo--;
        }, 1000);
    });
    $('#parar').click(function (){
        clearInterval(referenciaTimer);
    });
    function nota(pre,nota){
        mipuntaje=mipuntaje+nota;
        if (pre==6){
            // $('#botones').show();
            // $('#juegos').hide();
            $('#mostrarpuntaje').show();
            $('#mensaje').html('Tu puntaje es '+mipuntaje);

            $.ajax({
                url:'nota.php',
                type:'post',
                data:'punjate='+mipuntaje,
                success:function (res){
                    console.log(res);
                }
            })

            mipuntaje=0;
            clearInterval(referenciaTimer);
            tiempo=60;
        }
        $('#pregunta1').hide();
        $('#pregunta2').hide();
        $('#pregunta3').hide();
        $('#pregunta4').hide();
        $('#pregunta5').hide();
        $('#pregunta'+pre).show();
        $('#puntos').html(mipuntaje);
    }
</script>
