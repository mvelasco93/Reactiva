<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>


        <ul class="nav navbar-nav navbar-right">
        	<li class = 'session-name'>
        		Hola, <?php echo $this->session->Name; ?>
        	</li>
      	</ul>
    <!-- Top Menu Items -->

    <div class="collapse navbar-collapse navbar-ex1-collapse admin-sidebar">
		<ul class="nav navbar-nav side-nav" id="side-menu">
			<li id="index">
				<a href="<?php echo site_url('web/index'); ?>">REACTIVA</a>
			</li>
			<li>
				<a href="<?php echo site_url('web/pacientes'); ?>" class = "<?php if ($selection == 'patient'){echo 'active';}?>">Pacientes</a>
			</li>
			<li>
				<a href="<?php echo site_url('web/citas'); ?>" class = "<?php if ($selection == 'citas'){echo 'active';}?>">Citas</a>
			</li>
			<li>
				<a href="<?php echo site_url('web/terapias'); ?>" class = "<?php if ($selection == 'terapia'){echo 'active';}?>">Terapias</a>
			</li>
			<li id="logout" class = ''>
				<a href="<?php echo site_url('web/logout'); ?>">CERRAR SESIÓN</a>
			</li>
		</ul>
	</div>
</nav>