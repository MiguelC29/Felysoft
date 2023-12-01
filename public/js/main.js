let table = new DataTable('#TablesFelysoft', {
    //Para cambiar el lenguaje a español
    "language": {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
        "infoEmpty": "Mostrando del 0 al 0 de 0 registros",
        "infoFiltered": "(de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "sProcessing": "Procesando..."
    },
    // https://datatables.net/extensions/buttons/examples/
    dom: 'Bfrtip',
    buttons: [
        'searchBuilder', 'pageLength', 
        {
            extend: 'collection',
            text: 'Más opciones',
            className: 'custom-html-collection',
            buttons: [
                
                '<h3 class="text-center text-black fw-bold">Exportar</h3>',
                {
                    extend: 'print',
                    text: '<i class="bi bi-printer-fill"></i> Imprimir',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="bi bi-file-earmark-excel-fill"></i> EXCEL',
                    titleAttr: 'Excel'
                },
                {
                    extend:    'pdfHtml5',
                    text:      '<i class="bi bi-file-earmark-pdf-fill"></i> PDF',
                    titleAttr: 'PDF'
                },
                '<h3 class="text-center text-black fw-bold">Visibilidad</h3>',
                {
                    popoverTitle: '<h2 class="text-center text-black fw-bold">Control visibilidad</h2>',
                    extend: 'colvis',
                    collectionLayout: 'fixed columns',
                    collectionTitle: 'Column visibility control',
                    text: '<i class="bi bi-eye-slash-fill"></i> Visibilidad Columnas',
                    postfixButtons: [ 'colvisRestore' ]
                }
            ]
        }
    ],
    responsive: {
        details: {
            display: DataTable.Responsive.display.modal({
                header: function () {
                    return 'Detalles del producto';
                }
            }),
            renderer: DataTable.Responsive.renderer.tableAll({
                tableClass: 'table'
            })
        }
    },
    // paging: false,
    scrollY: 380,
    select: true
});