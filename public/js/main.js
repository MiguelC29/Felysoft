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
    // buttons:['searchBuilder', 'pageLength', 'copy', 'print', {extend: 'spacer', style: 'bar', text: 'Exportar:'}, 'excel', 'pdf'],
    // buttons: [
    //     'searchBuilder', 'pageLength', 
    //     {
    //         extend: 'collection',
    //         text: 'Más opciones',
    //         className: 'custom-html-collection',
    //         buttons: [
    //             '<h3>Exportar</h3>',
    //             'pdf',
    //             'csv',
    //             'excel',
    //             '<h3 class="not-top-heading">Visibilidad Columnas</h3>',
    //             'columnsToggle'
    //         ]
    //     }
    // ]

    buttons: [
        'searchBuilder', 'pageLength', 
        {
            extend: 'collection',
            text: 'Más opciones',
            className: 'custom-html-collection',
            buttons: [
                '<h3>Exportar</h3>',
                'pdf',
                'csv',
                'excel',
                '<h3>Visibilidad</h3>',
                {
                    popoverTitle: 'Visibility control',
                    extend: 'colvis',
                    text: 'Visibilidad Columnas',
                    collectionLayout: 'two-column'
                }
            ]
        }
    ]
});