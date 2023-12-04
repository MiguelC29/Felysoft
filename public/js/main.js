let table = new DataTable('#TablesFelysoft', {
    //Para cambiar el lenguaje a español
    "language": {
        "processing": "Procesando...",
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "No se encontraron resultados",
        "emptyTable": "Ningún dato disponible en esta tabla",
        "infoEmpty": "Mostrando del 0 al 0 de 0 registros",
        "infoFiltered": "(de un total de _MAX_ registros)",
        "search": "Buscar:",
        "loadingRecords": "Cargando...",
        "paginate": {
            "first": "Primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
        "aria": {
            "sortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sortDescending": ": Activar para ordenar la columna de manera descendente"
        },
        "buttons": {
            "copy": "Copiar",
            "colvis": "Visibilidad",
            "collection": "Colección",
            "colvisRestore": "Restaurar visibilidad",
            "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
            "copySuccess": {
                "1": "Copiada 1 fila al portapapeles",
                "_": "Copiadas %ds fila al portapapeles"
            },
            "copyTitle": "Copiar al portapapeles",
            "csv": "CSV",
            "excel": "Excel",
            "pageLength": {
                "-1": "Mostrar todas las filas",
                "_": "Mostrar %d filas"
            },
            "pdf": "PDF",
            "print": "Imprimir",
            "renameState": "Cambiar nombre",
            "updateState": "Actualizar",
            "createState": "Crear Estado",
            "removeAllStates": "Remover Estados",
            "removeState": "Remover",
            "savedStates": "Estados Guardados",
            "stateRestore": "Estado %d"
        },
        "autoFill": {
            "cancel": "Cancelar",
            "fill": "Rellene todas las celdas con <i>%d<\/i>",
            "fillHorizontal": "Rellenar celdas horizontalmente",
            "fillVertical": "Rellenar celdas verticalmente"
        },
        "decimal": ",",
        "searchBuilder": {
            "add": "+",
            "button": {
                "0": "Búsqueda avanzada",
                "_": "Búsqueda avanzada (%d)"
            },
            // "clearAll": "Borrar todo",
            "clearAll": "Restaurar",
            "condition": "Condición",
            "conditions": {
                "date": {
                    "before": "Antes",
                    "between": "Entre",
                    "empty": "Vacío",
                    "equals": "Igual a",
                    "notBetween": "No entre",
                    "not": "Diferente de",
                    "after": "Después",
                    "notEmpty": "No Vacío"
                },
                "number": {
                    "between": "Entre",
                    "equals": "Igual a",
                    "gt": "Mayor a",
                    "gte": "Mayor o igual a",
                    "lt": "Menor que",
                    "lte": "Menor o igual que",
                    "notBetween": "No entre",
                    "notEmpty": "No vacío",
                    "not": "Diferente de",
                    "empty": "Vacío"
                },
                "string": {
                    "contains": "Contiene",
                    "empty": "Vacío",
                    "endsWith": "Termina en",
                    "equals": "Igual a",
                    "startsWith": "Empieza con",
                    "not": "Diferente de",
                    "notContains": "No Contiene",
                    "notStartsWith": "No empieza con",
                    "notEndsWith": "No termina con",
                    "notEmpty": "No Vacío"
                },
                "array": {
                    "not": "Diferente de",
                    "equals": "Igual",
                    "empty": "Vacío",
                    "contains": "Contiene",
                    "notEmpty": "No Vacío",
                    "without": "Sin"
                }
            },
            "data": "Campo",
            "deleteTitle": "Eliminar regla",
            "leftTitle": "Criterios de exclusión",
            "logicAnd": "Y",
            "logicOr": "O",
            "rightTitle": "Criterios de sangría",
            "title": {
                "0": "Búsquedas personalizadas",
                "_": "Búsquedas personalizadas (%d)"
            },
            "value": "Valor"
        },
        "searchPanes": {
            "clearMessage": "Borrar todo",
            "collapse": {
                "0": "Paneles de búsqueda",
                "_": "Paneles de búsqueda (%d)"
            },
            "count": "{total}",
            "countFiltered": "{shown} ({total})",
            "emptyPanes": "Sin paneles de búsqueda",
            "loadMessage": "Cargando paneles de búsqueda",
            "title": "Filtros Activos - %d",
            "showMessage": "Mostrar Todo",
            "collapseMessage": "Colapsar Todo"
        },
        "select": {
            "rows": {
                "1": "1 fila seleccionada",
            }
        },
        "thousands": ".",
        "datetime": {
            "previous": "Anterior",
            "hours": "Horas",
            "minutes": "Minutos",
            "seconds": "Segundos",
            "unknown": "-",
            "amPm": [
                "AM",
                "PM"
            ],
            "months": {
                "0": "Enero",
                "1": "Febrero",
                "10": "Noviembre",
                "11": "Diciembre",
                "2": "Marzo",
                "3": "Abril",
                "4": "Mayo",
                "5": "Junio",
                "6": "Julio",
                "7": "Agosto",
                "8": "Septiembre",
                "9": "Octubre"
            },
            "weekdays": {
                "0": "Dom",
                "1": "Lun",
                "2": "Mar",
                "4": "Jue",
                "5": "Vie",
                "3": "Mié",
                "6": "Sáb"
            },
            "next": "Próximo"
        },
        "editor": {
            "close": "Cerrar",
            "create": {
                "button": "Nuevo",
                "title": "Crear Nuevo Registro",
                "submit": "Crear"
            },
            "edit": {
                "button": "Editar",
                "title": "Editar Registro",
                "submit": "Actualizar"
            },
            "remove": {
                "button": "Eliminar",
                "title": "Eliminar Registro",
                "submit": "Eliminar",
                "confirm": {
                    "_": "¿Está seguro de que desea eliminar %d filas?",
                    "1": "¿Está seguro de que desea eliminar 1 fila?"
                }
            },
            "error": {
                "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
            },
            "multi": {
                "title": "Múltiples Valores",
                "restore": "Deshacer Cambios",
                "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo.",
                "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, haga clic o pulse aquí, de lo contrario conservarán sus valores individuales."
            }
        },
        "info": "Mostrando del _START_ al _END_ de _TOTAL_ registros",
        "stateRestore": {
            "creationModal": {
                "button": "Crear",
                "name": "Nombre:",
                "order": "Clasificación",
                "paging": "Paginación",
                "select": "Seleccionar",
                "columns": {
                    "search": "Búsqueda de Columna",
                    "visible": "Visibilidad de Columna"
                },
                "title": "Crear Nuevo Estado",
                "toggleLabel": "Incluir:",
                "scroller": "Posición de desplazamiento",
                "search": "Búsqueda",
                "searchBuilder": "Búsqueda avanzada"
            },
            "removeJoiner": "y",
            "removeSubmit": "Eliminar",
            "renameButton": "Cambiar Nombre",
            "duplicateError": "Ya existe un Estado con este nombre.",
            "emptyStates": "No hay Estados guardados",
            "removeTitle": "Remover Estado",
            "renameTitle": "Cambiar Nombre Estado",
            "emptyError": "El nombre no puede estar vacío.",
            "removeConfirm": "¿Seguro que quiere eliminar %s?",
            "removeError": "Error al eliminar el Estado",
            "renameLabel": "Nuevo nombre para %s:"
        },
        "infoThousands": "."
    },
    // https://datatables.net/extensions/buttons/examples/
    // https://postimg.cc/files
    dom: 'Bfrtip',
    lengthMenu: [
        [ 10, 25, 50, 100, -1 ],
        [ '10', '25', '50', '100', 'Mostrar todos' ]
    ],
    buttons: [
        'searchBuilder', 'pageLength', 
        {
            extend: 'collection',
            text: 'Más opciones',
            className: 'custom-html-collection',
            buttons: [
                
                '<h3 class="text-center fw-bold">Exportar</h3>',
                {
                    extend: 'print',
                    text: '<i class="bi bi-printer-fill"></i> Imprimir',
                    titleAttr: 'Imprimir',
                    title: '',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend:    'excelHtml5',
                    text:      '<i class="bi bi-file-earmark-excel-fill"></i> EXCEL',
                    titleAttr: 'Excel',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="bi bi-file-earmark-pdf-fill"></i> PDF',
                    titleAttr: 'PDF',
                    title: 'Reportes Felysoft',
                    exportOptions: {
                        columns: ':visible'
                    },
                    customize: function ( doc ) {
                        doc.content.splice( 1, 0, {
                            margin: [ 0, 0, 0, 12 ],
                            alignment: 'center',
                            image: 'data:image/png;base64,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'
                        } );
                    }
                },
                '<h3 class="text-center fw-bold">Visibilidad</h3>',
                {
                    popoverTitle: '<h2 class="text-center fw-bold">Control visibilidad</h2>',
                    extend: 'colvis',
                    collectionLayout: 'fixed columns',
                    collectionTitle: 'Column visibility control',
                    text: '<i class="bi bi-eye-slash-fill"></i> Visibilidad Columnas',
                    titleAttr: 'Visibilidad',
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
    scrollY: 370,
    select: true
});