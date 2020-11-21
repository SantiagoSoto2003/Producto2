    $(document).ready(function() {
       tablaProductos = $('#example').dataTable( {
			
		

			"language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.21/i18n/Spanish.json"
			},
		});
		
		var fila;

		$("#btnNuevo").click(function ()
		{	
			$("#modalForm").trigger("reset");
			$(".modal-header").css("background","#38d39f");
			$(".modal-header").css("color","white");
			$('.modal-title').text("Nuevo producto.");
			$('.titleModal').text("Registre un nuevo producto.")
			$("#btnGuardar").css("background","#38d39f");
			$("#btnCerrar").css("background","#38d39f");
			$("#modalForm").modal("show");
			idProd = null;
			opcion = 1;
		});		
		
	} );
	
	$(document).on("click", ".btnBorrar", function()
	{
		fila = $(this);
		idProd = parseInt($(this).closest("tr").find('td:eq(0)').text());
		nombreProd = $(this).closest("tr").find('td:eq(1)').text();
		marcaProd = $(this).closest("tr").find('td:eq(2)').text();
		opcion = 3;
		var respuesta = confirm("Estas seguro del eliminar el producto "+idProd+" -"+nombreProd+""+marcaProd);
		
	});


	

	