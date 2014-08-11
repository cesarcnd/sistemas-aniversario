<script>
	$(function(){
	    $('#direct_access').collapsible('accordion-open');
	    $('#direct_access .link_conferencias').click(function(){
	    	$('#direct_access > div').removeClass('active');
	    	$(this).addClass('active');
	    	$('#direct_access .collapsible  [class$="_triangle"]').addClass('display-none');
	    	$('.conferencias_triangle',this).removeClass('display-none');
	    });
	    $('#direct_access .link_talleres').click(function(){
	    	$('#direct_access > div').removeClass('active');
	    	$(this).addClass('active');
	    	$('#direct_access .collapsible [class$="_triangle"]').addClass('display-none');
	    	$('.talleres_triangle',this).removeClass('display-none');
	    });
	    $('#direct_access .link_concursos').click(function(){
	    	$('#direct_access > div').removeClass('active');
	    	$(this).addClass('active');
	    	$('#direct_access .collapsible [class$="_triangle"]').addClass('display-none');
	    	$('.concursos_triangle',this).removeClass('display-none');
	    });
	    $('#direct_access .link_proyectos').click(function(){
	    	$('#direct_access > div').removeClass('active');
	    	$(this).addClass('active');
	    	$('#direct_access .collapsible [class$="_triangle"]').addClass('display-none');
	    	$('.proyectos_triangle',this).removeClass('display-none');
	    });
	});
</script>
	<div id="direct_access" >
			<div class="link_conferencias collapsible active" id="content_conferencias">
				<div class="sombra_conferencias" >
					<h2>CONFERENCIAS</h2>
					<div class="sprite ico_conferencias display-inline"></div>
					<div class="conferencias_triangle"></div>
				</div>
			</div>
			<div class="content_conferencias display-none" >
				<div class="first_block">
					<div class="display-inline social_plugin">
						<?php 
						$this->data['url_social'] = base_url().'conferencia/aniversario/todos';
						$this->load->view('prev/base/v_social_network_access_direct',$this->data); ?>
					</div>
					<div class="img_conferencias display-inline"></div>
				</div>
				<a href="<?php echo base_url()?>programacion/aniversario/todos" target="_self">
				<div class="btns_more ver_conferencias">
					<p>Conozca las conferencias</p>
					<div class="img_triangle"></div>
				</div>
				</a>
			</div>
		
		
			<div class="link_talleres collapsible">
				<div class="sombra_talleres" >
					<h2>TALLERES</h2>
					<div class="sprite ico_talleres display-inline"></div>
					<div class="talleres_triangle display-none"></div>
				</div>
			</div>
			<div class="content_talleres  display-none">
				<div class="first_block">
					<div class="display-inline social_plugin">
						<?php 
						$this->data['url_social'] = base_url().'talleres/aniversario/todos';
						$this->load->view('prev/base/v_social_network_access_direct',$this->data); ?>
					</div>
					<div class="img_talleres display-inline"></div>
				</div>
				<a href="<?php echo base_url()?>programacion/aniversario/todos" target="_self">
				<div class="btns_more ver_talleres">
					<p>Conozca los talleres</p>
					<div class="img_triangle"></div>
				</div>
				</a>
			</div>
		
		
			<div class="link_concursos collapsible">
				<div class="sombra_concursos" >
					<h2>CONCURSOS</h2>
					<div class="sprite ico_concursos display-inline"></div>
					<div class="concursos_triangle display-none"></div>
				</div>
			</div>
			<div class="content_concursos display-none">
				<div class="first_block">
					<div class="display-inline social_plugin">
						<?php 
						$this->data['url_social'] = base_url().'concursos/aniversario/todos';
						$this->load->view('prev/base/v_social_network_access_direct',$this->data); ?>
					</div>
					<div class="img_concursos display-inline"></div>
				</div>
				<a href="<?php echo base_url()?>programacion/aniversario/todos" target="_self">
				<div class="btns_more ver_concursos">
					<p>Conozca los Concursos</p>
					<div class="img_triangle"></div>
				</div>
				</a>
			</div>
		
			<div class="link_proyectos collapsible">
				<div class="sombra_proyectos" >
					<h2>PROYECTOS</h2>
					<div class="sprite ico_proyectos display-inline"></div>
					<div class="proyectos_triangle display-none"></div>
				</div>
			</div>
			<div class="content_proyectos display-none">
				<div class="first_block">
					<div class="display-inline social_plugin">
						<?php 
						$this->data['url_social'] = base_url().'proyectos/aniversario/todos';
						$this->load->view('prev/base/v_social_network_access_direct',$this->data); ?>
					</div>
					<div class="img_proyectos display-inline"></div>
				</div>
				<a href="<?php echo base_url()?>programacion/aniversario/todos" target="_self">
				<div class="btns_more ver_proyectos">
					<p>Conozca los Proyectos</p>
					<div class="img_triangle"></div>
				</div>
				</a>
			</div>
		
	</div>