$(function(){
	// $('span[name=assunto]').css('cursor','pointer');
	$('#detalhe')
		.css('cursor','pointer')
		.css('color','#f96332');


	$('button[name=excluir]').click(function(){
		var opcao = confirm('Tem certeza de deseja remover este item?');
		var iditem = $(this).val();
	
		if(opcao == true){
			// alert('Executar procedimento de exclusão do item '+$(this).val()+'.');
			$.ajax({
				method: 'get',
				url: 'delete-topico/'+iditem,
				// data: {id: iditem}
			}).done(function(data){
				alert(data);
			});
			location.reload();
		}

	});

	$('button[name=editar]').click(function(){
		var iditem = $(this).val();
			$.ajax({
				method: 'get',
				url: 'editar-topico/'+iditem,

			}).done(function(data){
				$('#ed'+iditem).html(data);
			});

	});

	$('#detalhe').click(function(){
		window.history.go(-1);
	});

	$('.ciclo')
			.css({	'transform':'rotate(-90deg)',
					'text-align': 'center',
					'width':'2px',
					'vertical-align': 'middle'
				});
	$('span').css('padding','2px');

// script HORAS DE ESTUDO
	// $('table[name=metas]').hide();
	$('#mostrar').click(function(){
		$('#esconder').show();
		$('#div_forms').show('normal');
		$(this).hide();
	});
	$('#esconder').click(function(){
		$('#mostrar').show();
		$('#div_forms').hide('normal');
		$(this).hide();
	});

	$('.tabs-1').click(function(){
		$(this).addClass('active');
		$('.tabs-2').removeClass('active');
		$('.tabs-3').removeClass('active');

		$('table[name=metas]').hide();
		$('table[name=total]').hide();
		$('table[name=disp').show();

		$('#formcadmeta').hide();
		$('#formcadhor').show('normal');
	});
	$('.tabs-2').click(function(){
		$(this).addClass('active');
		$('.tabs-1').removeClass('active');
		$('.tabs-3').removeClass('active');
		$('#formcadmeta').show('normal');
		$('#formcadhor').hide();

		$('table[name=disp]').hide();
		$('table[name=total]').hide();
		$('table[name=metas]').show();
	});
	$('.tabs-3').click(function(){
		$(this).addClass('active');
		$('.tabs-1').removeClass('active');
		$('.tabs-2').removeClass('active');

		$('table[name=disp]').hide();
		$('table[name=metas]').hide();
		$('table[name=total]').show('normal');
	});
	
});