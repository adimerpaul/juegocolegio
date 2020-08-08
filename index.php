<?php include('header.php')?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop01.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Aprendiendo<br>con samy</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
			<div class="col-md-8 col-xs-6 order-details">
						<div class="section-title text-center">
							<h3 class="title">¿Qué es la ortografía?</h3>
						</div>
						<div class="order-summary">
							<div class="order-products">
								<div class="order-col">
								La Ortografia es el conjunto de normas que regulan la escritura, es una parte muy importante del lenguaje ya que establece las reglas para el uso correcto de las letras y los signos de puntuación, las cuales nos permiten hablar, expresarnos y escribir de una manera correcta. Lo mas importante de esto es que mediante el lenguaje que es la base de todo en la vida del ser humano, se pueden realizar grandiosas acciones en cualquier area de conocimiento en el mundo. 
 
								</div>
							</div>
						</div>
					</div>
			<!-- shop -->
			<!-- /shop -->
		</div>
		<div class="row">
			<div class="col-sm-6">
			<?php
			if(isset($_SESSION['email'])){
				echo $_SESSION['email'];
			}else{
				echo '
				<button class="add-to-cart-btn" data-toggle="modal" data-target="#myModal"><i class="fa fa-id-card-o" aria-hidden="true"></i> Registrarse</button>
				<button class="add-to-cart-btn" data-toggle="modal" data-target="#ingresar"><i class="fa fa-shopping-cart"></i> Ingresar</button>
				';
			}
			?>
			
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Registrarse</h4>
					</div>
					<div class="modal-body">
					<form action="registrar.php" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i>Close</button>
							<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save changes</button>
						</div>
						</form>
					</div>
					
					</div>
				</div>
			</div>

			<div class="modal fade" id="ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Ingresar</h4>
					</div>
					<div class="modal-body">
					<form action="ingresar.php" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-trash"></i>Close</button>
							<button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save changes</button>
						</div>
						</form>
					</div>
					
					</div>
				</div>
			</div>

			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<?php include('footer.php')?>



		