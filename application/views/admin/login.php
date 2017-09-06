<div class="container-fluid login">

<div class="row  ">
	<div class= "col-md-4 col-md-offset-4 login">
	<div class = 'center-row panel-sg'>
		<p class = 'align-center txt-white'> Por favor ingrese su usuario y contraseña:</p>
		<br>
		<?php echo form_open('admin/authenticate' , array('id' => 'frm-login')); ?>  
		<fieldset>
			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<?php echo form_input(array(
					'name' => 'ra_username',
					'value' => '',
					'required' => 'required',
					'placeholder' => 'Usuario',
					'class' => 'form-control input-sgl',
					));?>
				</div>
				<div class="clearfix"></div><br>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<?php echo form_password(array(
						'name' => 'ra_password',
						'value' => '',
						'required' => 'required',
						'placeholder' => 'Contraseña',
						'class' => 'form-control input-sgl',
						));?>
					</div>
					<div class="clearfix"></div><br>
					<!--
					<div class="input-group">
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Recuerdame" id="remember"> Recuérdame
							</label>
						</div>
					</div>
					-->
					<div class="clearfix"></div><br>
					<div class="input-group align-center">
						<button type="submit" class="btn login-btn ">Iniciar sesión</button>
					</div>
				</fieldset>
				<?php echo form_close(); ?>
				</div>
			</div>
		</div>

</div>