var tableArticulos = {};
var cliNew = false;
var pageJs = {
    continuar: -1,
    facturas: [],
    wizard: {},
    articulos: [],
    unidades: [],
    clientes: [],
    valueInserted: "",
    selectedCliente: null,
    table: {},
    tableArticulos: {},
    tableImp: {},
    currentMonto: 0,
    montoTotalLineas: 0,
    totalMediosPago: 0,
    preferencias: {},
    totalTablaDetalle: 0,
    lastIdDoc: 0,
    select2Product: {},
    cacheLinea: [], // objecto que almacena los datos de la linea cuando se editan.  
    orderArray: {},
    customInfo: {
        otroTexto: [],
        otroContenido: [],
        attachments: []
    },
    numFiles: 0,
    searchArticulo: function (value) {
        var self = this;
        var founded = $.grep(self.articulos, function (row) {
            return row.idArticuloEmp === value;
        })[0];
        return founded;
    },
    initSelectArticulos(){
    },
    sumMediosPago: function () {
        var self = this;
        var totalImp = 0;
        $(".sumMedio").each(function () {

            totalImp += self.removeMask($(this).val());
        });
        return totalImp;

    },
    Init: function () {
        var self = this;
        self.initTable();
        /*** INICIOALIZO LAS MASCARAS DE LOS INPUTS ***/
        $('#porcentaje').mask('000.00000', {reverse: true, watchDataMask: true});
        $('#precio').mask('00,000,000,000.00000', {reverse: true, watchDataMask: true});
        $('#descuento').mask('00,000,000,000.00000', {reverse: true, watchDataMask: true});
        $('#mnTotal').mask('00,000,000,000.00000', {reverse: true, watchDataMask: true});
        $('#cant').mask('00000000000.00000', {reverse: true, watchDataMask: true});
        $('#pTipoCambio').mask('00,000,000,000.00000', {reverse: true, watchDataMask: true});
        self.setMask($("#pTipoCambio"), "1");
        /*** CARGO INFORMACION DE PRERENCIAS Y OTRA INFO ***/
        self.loadInfo();
        self.loadClientes();

            

        /*** CARGO INFORMACION DE PRERENCIAS Y OTRA INFO ***/
        $("#pClaveDIV").hide();
        /*** MANEJO DE WIZARDS ***/
        self.wizard = $("#formWizard").css("display", "block");
        self.wizard.validate({
            ignore: [],
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                pTipoDocumentoEmp: {
                    required: true
                },
                pIdSucursalEmp: {
                    required: true
                },
                pIdMonedaEmp: {
                    required: true
                }

            },
            messages: {
                pTipoDocumentoEmp: "El Tipo Documento es requerido",
                pIdMonedaEmp: "La moneda es requerida"

            }
        });
        self.wizard.steps({
            headerTag: "h6",
            bodyTag: "fieldset",
            transitionEffect: "fade",
            stepsOrientation: "vertical",
            //enableAllSteps: true,
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                current: 'Actual',
                cancel: 'Cancelar',
                finish: 'Enviar',
                pagination: 'Paginación',
                next: 'Siguiente',
                previous: 'Anterior',
                loading: 'Cargando ...'


            },
            onStepChanging: function (event, currentIndex, newIndex) {
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex) {
                    return true;
                }

                //valido el step de Documento
                if (currentIndex === 0) {

                    if ($("#pTipoDocumentoEmp").val() == "-1") {
                        $("#pTipoDocumentoEmp").select2('open');
                        global.myToast(3, "Advertencia", "El tipo de documento es requerido.", 'toast-top-right', 'toast-top-right');
                        return false;
                    }

                    if ($("#pCondicionVentaEmp").val() == "-1") {

                        $("#pCondicionVentaEmp").select2('open');
                        global.myToast(3, "Advertencia", "La condicióo de venta es requerida.", 'toast-top-right', 'toast-top-right');
                        return false;
                    }

                    if ($("#pIdSucursalEmp").val() == "-1") {
                        $("#pIdSucursalEmp").select2('open');
                        global.myToast(3, "Advertencia", "La sucursal es requerida.", 'toast-top-right', 'toast-top-right');
                        return false;
                    }

                    if ($("#pIdPdvEmp").val() == "-1") {
                        $("#pIdPdvEmp").select2('open');
                        global.myToast(3, "Advertencia", "El punto de venta es requerido.", 'toast-top-right', 'toast-top-right');
                        return false;
                    }

                    if ($("#pCondicionVentaEmp option:selected").text() !== "Contado") {
                        if ($("#pPlazoCredito").val() !== "") {
                            if (isNaN($("#pPlazoCredito").val())) {
                                global.myToast(3, "Advertencia", "El plazo a crédito debe ser valor numérico", 'toast-top-right', 'toast-top-right');
                                return false;
                            }
                        } else {
                            global.myToast(3, "Advertencia", "El plazo a crédito es requerido", 'toast-top-right', 'toast-top-right');
                            return false;

                        }
                    }

                    if ($("#pInformacionReferencia").is(":checked")) {
                        $("#pNumero").prop("disabled", false);
                        if ($("#pNumero").val().length !== 0) {
                            if ($("#pFechaEmisionRef").val().length === 0) {
                                global.myToast(3, "Advertencia", "La fecha del documento a referenciar es requerido. .", 'toast-top-right', 'toast-top-right');
                                return false;
                            }
                        } else {
                            global.myToast(3, "Advertencia", "El número de documento a referenciar es requerido.", 'toast-top-right', 'toast-top-right');
                            return false;

                        }
                        if ($("#pRazon").val().length === 0) {
                            global.myToast(3, "Advertencia", "Las observaciones de la referencia son requeridas.", 'toast-top-right', 'toast-top-right');
                            return false;
                        }

                    }


                }

                //VALIDO EL STEP DE CLIENTE
                if (currentIndex === 1) {

                    var emailInvalid = false;
                    $('.emailVal').each(function () {
                        var input = this;
                        if ($(this).val() != "") {
                            if (!self.validateEmail($(input).val())) {
                                emailInvalid = true;
                                return false;
                            }
                        }
                    });
                    if (emailInvalid) {
                        global.myToast(3, "Advertencia", "Uno o varios correos tienen un formato incorrecto.", 'toast-top-right', 'toast-top-right');
                        return false;
                    }

                    if (cliNew == false) {

                        if ($("#pIdReceptorEmp").val() == "-1") {
                            $("#pIdReceptorEmp").select2('open');
                            global.myToast(3, "Advertencia", "El cliente es requerido.", 'toast-top-right', 'toast-top-right');
                            return false;
                        }
                    }
                    var tipIde = $("#pTipoIdenReceptorEmp").val();
                    var pnum = $("#pNumeroIdenReceptor").cleanVal().length;

                    if(tipIde !== "-1" || pnum  !== 0 ){

                       if(tipIde  === "-1" && pnum > 0 ){
                           $("#pTipoIdenReceptorEmp").select2('open');
                           global.myToast(3, "Advertencia", "Debe seleccionar un tipo de identificación", 'toast-top-right', 'toast-top-right');
                           return false;

                       }else if(tipIde   !== "-1" &&  pnum === 0){
                           $(this).focus().select();
                           global.myToast(3, "Advertencia", "El número identificación es requerido.", 'toast-top-right', 'toast-top-right');
                           return false;
                       }


                        var opselcted = $("#pTipoIdenReceptorEmp option:selected");
                        if($(opselcted).val() === "87"){
                            if(parseInt(pnum) > parseInt($(opselcted).data("longitud")) || parseInt($("#pNumeroIdenReceptor").cleanVal().length === 0 )){
                                global.myToast(3, "Advertencia", "El tipo de identificación extranjero debe tener una longitud de "+ $(opselcted).data("longitud") + " dígitos.", 'toast-top-right', 'toast-top-right');
                                return false;
                            }

                        }else{

                            if(parseInt($(opselcted).data("longitud")) !== parseInt($("#pNumeroIdenReceptor").cleanVal().length )){
                                global.myToast(3, "Advertencia", "El tipo de identificación "+ $(opselcted).text() +" debe tener una longitud de "+ $(opselcted).data("longitud") + " dígitos.", 'toast-top-right', 'toast-top-right');
                                return false;
                            }
                        }

                    }


                    if ($("#pNombreReceptor").val() == "") {
                        $(this).focus().select();
                        global.myToast(3, "Advertencia", "El nombre del cliente es requerido.", 'toast-top-right', 'toast-top-right');
                        return false;
                    }
                }

                //DETALLLE
                if (currentIndex === 2) {

                }

                // Needed in some cases if the user went back (clean up)
                if (currentIndex < newIndex) {
                    // To remove error styles
                    self.wizard.find(".body:eq(" + newIndex + ") label.error").remove();
                    self.wizard.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                }


                self.wizard.validate().settings.ignore = ":disabled,:hidden";

                return self.wizard.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex) {

            },
            onFinished: function (event, currentIndex) {
                global.loadingBlock("Procesando Factura, Por Favor Espere ... ");

                var entro = true;

                if ($("#pIdMonedaEmp").val() === "-1") {
                    global.dismissLoadingBlock();

                    $("#pIdMonedaEmp").select2('open');
                    global.myToast(3, "Advertencia", "La moneda es requerida.", 'toast-top-right', 'toast-top-right');
                    return false;
                }
                if (tableArticulos.rows().count() == 0) {
                    global.dismissLoadingBlock();
                    $("#lsArticulos").select2('open');
                    global.myToast(3, "Advertencia", "El documento debe contener como minimo una linea de detalle..", 'toast-top-right', 'toast-top-right');
                    return false;
                }

                if ($("#pTipoCambio").val() == "") {
                    global.dismissLoadingBlock();
                    $(this).focus().select();
                    global.myToast(3, "Advertencia", "El tipo de cambio es requerido.", 'toast-top-right', 'toast-top-right');
                    return false;
                }


                if (self.totalTablaDetalle < self.sumMediosPago()) {
                    global.dismissLoadingBlock();

                    global.myToast(3, "Advertencia", "El monto de medios de pago es mayor al total de articulos del detalle.", 'toast-top-right', 'toast-top-right');
                    entro = false;

                } else if (self.totalTablaDetalle > self.sumMediosPago()) {
                    global.dismissLoadingBlock();

                    global.myToast(3, "Advertencia", "El monto de medios de pago es menor al total de articulos del detalle.", 'toast-top-right', 'toast-top-right');
                    entro = false;
                }

                if (self.totalTablaDetalle === 0) {
                    global.dismissLoadingBlock();

                    global.myToast(3, "Advertencia", "El monto total del detalle no puede ser 0.", 'toast-top-right', 'toast-top-right');
                    return false;
                }

                if (entro) {
                    self.sendFactura();
                }


            }
        });


        $("#lsArticulos").select2({ 
              containerCssClass: 'select-xs',
              dropdownCssClass: "increasedzindexclass", 
              ajax: {
                  type: 'POST', 
                  params: { 
                    contentType: "application/json; charset=utf-8",
                  }, 
                  delay: 250,
                  cache: true,
                  url: function (params) {
                    return 'facturar.php';
                  }, 
                  data: function (params) { 
                  if (self.selectedCliente != null){
                        return {
                              q     : params.term, 
                              action     : 17, 
                              idCliente  : self.selectedCliente.idReceptorEmp, 
                              idArticulo : 0 ,
                              page: params.page
                            } 
                    }else{
                        return {
                              q     : params.term, 
                              action     : 17, 
                              idCliente  : null, 
                              idArticulo : 0 ,
                              page: params.page
                            } 
                    } 
                  }, 
                  processResults: function (api) {

                    var json = JSON.parse(api);
                    //json.data.unshift({ id: -1, text: 'Seleccione un articulo' });
                    json.data.forEach(function(row) {

                        row.id   = row.id || row.idArticuloEmp
                        row.text = row.text || (row.codigo !== null) ?  row.codigoDesc: row.descripcion
                    });
                   
                   /* var filtrados = json.data.filter(function(row){
                         row.id   = row.id || row.idArticuloEmp
                         row.text = row.text || (row.codigo !== null) ?  row.codigoDesc: row.descripcion

                        var regex = '/.*'+params.term+'.' 
                        if (regex.test(row.text)) { 
                            return true;
                        }else{
                            return false;
                        }
                    });*/

                


                    return {
                        results: json.data
                    }; 
                  }, 
                  templateResult: function (dataRow) {
                    if (dataRow.loading) return dataRow.text;
                    return dataRow.text;
                  },
                  templateSelection: function (dataRow) {
                    return dataRow.text;
                  }
        }
        })
            .on("select2:select", function(e){

            var $articulo = e.params.data;
            var totalImpPorc = self.totalImpuestoPorcentaje($articulo.impuestos);
            var montoTotal =   self.montoTotal($articulo.precio, 1); 
            var descuento =    self.descuento(0, montoTotal);
            var subTotal =     self.subTotal(montoTotal, descuento);
            var totalImp =     self.totalImpuestoMonto(subTotal, totalImpPorc, montoTotal);

            var row = {
                    "idArticuloEmp": $articulo.idArticuloEmp,
                    "pDetalle": $articulo.descripcion,
                    "pMercServ": $articulo.tipoArticulo,
                    "pUnidadMedidaEmp": $articulo.idsUnidadMedidaEmp[0],
                    "pCantidad": parseFloat(1),
                    "pPrecioUnitario": parseFloat($articulo.precio),
                    "pMontoTotal": montoTotal,
                    "pImpuesto": $articulo.impuestos,
                    "pMontoDescuento": 0,
                    "pNaturalezaDescuento": "",
                    "pMontoTotalLinea": self.montoTotalLinea(subTotal, totalImp),
                    "pPorcentajeDesc": 0
            };
            tableArticulos.row.add(row).invalidate().draw();
          
            $('#lsArticulos').val("-1").trigger('change.select2');

        });



        $("#searchFac").select2({
            containerCssClass: 'select-xs',
            dropdownCssClass: "increasedzindexclass",
            ajax: {
                type: 'POST',
                params: {
                    contentType: "application/json; charset=utf-8",
                },
                delay: 250,
                cache: true,
                url: function (params) {
                    return 'facturar.php';
                },
                data: function (params) {

                    return {
                        q     : params.term,
                        action     : 18,
                        page: params.page
                    }
                },
                processResults: function (api, params) {
                    var json = JSON.parse(api);
                    params.page = params.page || 1;
                    //console.log(json);
                    json.data.forEach(function(row) {

                        row.id   = row.id || row.pIdDocumentoEmp;
                        row.text = row.text || row.pClave + " " + row.pNombreCliente + " "+ row.pFechaEmision;
                    });
                    //console.log(json);
                    return {
                        results: json.data,
                        pagination: {
                            more: (params.page * 30) < json.data.length
                        }
                    };
                },
                cache: true,
                escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
                templateResult: function(doc) {
                       /* if (doc.loading) {
                            return doc.text;
                        }*/
                        var markup = '<div class="col-lg-4 col-md-12">\n' +
                            '              <div class="card text-center">\n' +
                            '                <div class="card-content">\n' +
                            '                  <div class="card-body">\n' +
                            '                    <h4 class="card-title success">Text Align Center</h4>\n' +
                            '                    <p class="card-text">Gummi bears I love oat cake gingerbread donut cotton candy pie\n' +
                            '                      biscuit tart. Chocolate cake chocolate cake I love marzipan\n' +
                            '                      cookie macaroon. Tart I love I love carrot cake carrot cake\n' +
                            '                      chupa chups caramels. Carrot cake pastry cotton candy.</p>\n' +
                            '                    <p class="card-text">Dessert I love brownie biscuit topping I love chocolate cake\n' +
                            '                      gingerbread jelly beans. Chocolate cake cake cheesecake. Chocolate\n' +
                            '                      cake pastry macaroon.</p>\n' +
                            '                    <a href="#" class="btn btn-outline-success">Go somewhere</a>\n' +
                            '                  </div>\n' +
                            '                </div>\n' +
                            '              </div>\n' +
                            '            </div>';

                        return markup;
                }
            }
        }).on("select2:select", function(e){
            var documento = e.params.data;
            self.setDocumento(documento);
            console.log($documento);

        });
      
        /*** DATE TIME PICKERS ***/
        $('.daterange').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            startDate: moment(),
            // endDate: moment(),
            timePicker: true,
            "timePicker24Hour": true,
            "timePickerSeconds": true,
            locale: {
                "separator": " - ",
                applyLabel: "Aplicar",
                cancelLabel: 'Cancelar',
                startLabel: 'Fecha Inicio',
                endLabel: 'Fecha Final',
                customRangeLabel: 'Seleccione una Fecha',
                daysOfWeek: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                daysOfWeek: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                firstDay: 1,
                format: 'YYYY-MM-DD H:mm:ss'
                //format: 'YYYY/MM/DD h:mm:ss'
            }
        });

        $("#pFechaEmisionRef").daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timePicker: true,
            "timePicker24Hour": true,
            "timePickerSeconds": true,
            locale: {
                "separator": " - ",
                applyLabel: "Aplicar",
                cancelLabel: 'Cancelar',
                startLabel: 'Fecha Inicio',
                endLabel: 'Fecha Final',
                customRangeLabel: 'Seleccione una Fecha',
                daysOfWeek: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                daysOfWeek: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                firstDay: 1,
                format: 'YYYY-MM-DD H:mm:ss'
                //format: 'YYYY/MM/DD h:mm:ss'
            }
        });

        $('#pFechaEmisionRef').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            timePicker: true,
            "timePicker24Hour": true,
            "timePickerSeconds": true,
            locale: {
                "separator": " - ",
                applyLabel: "Aplicar",
                cancelLabel: 'Cancelar',
                startLabel: 'Fecha Inicio',
                endLabel: 'Fecha Final',
                customRangeLabel: 'Seleccione una Fecha',
                daysOfWeek: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                daysOfWeek: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                firstDay: 1,
                format: 'YYYY-MM-DD H:mm:ss'
                //format: 'YYYY/MM/DD h:mm:ss'
            }
        });
        /*** MANEJO DE DATATABLES ***/
        if ($.fn.DataTable.isDataTable('#tblImpuestosARt')) {
            self.tableImp.destroy();
        }
        self.tableImp = $('#tblImpuestosARt').DataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ Impuestos",
                "sZeroRecords": "No se encontraron Impuestos",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando Impuestos del _START_ al _END_ de un total de _TOTAL_ ",
                "sInfoEmpty": "Mostrando Impuestos de 0 al 0 de un total de 0",
                "sInfoFiltered": "(filtrado de un total de _MAX_ Impuestos)",
                "sInfoPostFix": "",
                "sSearch": "Buscar: ",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }

            },
            //"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            //"processing": true,
            "ordering": false,
            "deferRender": true,
            "select": {
                style: 'multi',
                selector: 'td:first-child'
            },
            "responsive": true,
            "scrollX": true,
            "fixedHeader": true,
            "ajax": {
                "url": "facturar.php",
                "type": "POST",
                "data": function (d) {
                    d.action = 13
                },
                "dataSrc": function (json) {
                    return json.data;
                }
            },
            "columns": [
                {
                    orderable: false,
                    data: null,
                    className: 'select-checkbox ',
                    target: 0,
                    "render": function (data, type, row, meta) {
                        return "";
                    }
                },
                {"data": "codigo"},
                {"data": "codigosEmp", "visible": false},
                {"data": "descripcion"},
                {"data": "excepcion", "visible": false},
                {"data": "porcentajeImp", "visible": true}
            ]

        });
        self.tableImp.on('select', function (e, dt, type, indexes) {
            self.impuetosExoneracion();
        }).on('deselect', function (e, dt, type, indexes) {
            self.impuetosExoneracion();

        });
        /*** INICIO LOS SELECT2 ***/
        $("#tipoArticulo, #pCodigo ,#pTipoDocRefEmp, #idUnidadMedidaEmp, #pIdDocumento,#pIdPdvEmp,#pIdSucursalEmp," +
            "#pTipoDocumentoEmp, #pIdReceptorEmp," +
            "#pIdMonedaEmp, #pCondicionVentaEmp" +
            ",#pTipoIdenReceptorEmp, #pIdMonedaEmp").each(function () {
            $(this).select2({
                containerCssClass: 'select-xs'
            });
        });


        /*** INICIO EL SWICH ***/
        $('.switch:checkbox').checkboxpicker();

        var heightRight = $('.nav-right + .tab-content').height();
        $('ul.nav-right').height(heightRight);


    },
    impuetosExoneracion: function () {
        var self = this;
        var optionImpuestos = '<option value="-1">Seleccione un impuesto</option>';
        self.tableImp.rows(".selected").every(function (rowIdx, tableLoop, rowLoop) {
            var d = this.data();
            optionImpuestos += '<option value="' + d.codigo + '">' + d.descripcion + '</option>';

        });

        $("#impuestos option").remove();
        $("#impuestos").append(optionImpuestos);

    },
    initTable: function () {
        var self = this;
        if ($.fn.DataTable.isDataTable('#tblImpuestos')) {
            self.table.destroy();
        }

        self.table = $('#tblImpuestos').DataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ Impuestos",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando Impuestos del _START_ al _END_ de un total de _TOTAL_ ",
                "sInfoEmpty": "Mostrando Impuestos de 0 al 0 de un total de 0",
                "sInfoFiltered": "(filtrado de un total de _MAX_ Impuestos)",
                "sInfoPostFix": "",
                "sSearch": "Buscar: ",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }

            },
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "responsive": true,
            "select": {
                style: 'multi',
                selector: 'td:first-child'
            },
            "ajax": {
                "url": "facturar.php",
                "type": "POST",
                "data": function (d) {
                    d.action = 10
                },
                "dataSrc": function (json) {
                    return json.data;
                }
            },
            "columns": [
                {
                    orderable: false,
                    data: null,
                    className: 'select-checkbox',
                    target: 0,
                    "render": function (data, type, row, meta) {
                        return "";
                    }
                },
                {"data": "codigo", "visible": false},
                {"data": "codigosEmp", "visible": false},
                {"data": "descripcion"},
                {"data": "excepcion", "visible": false},
                {"data": "porcentajeImp", "visible": true}
            ],
            "columnDefs": [
                /* {
                "orderable": false,
                "className": 'select-checkbox',
                "targets": [ 0 ],
                "data": null
                } */
            ]

        });

      self.table.on('select', function (e, dt, type, indexes) {
        if (type === 'row') {
            var imp  = dt.rows( indexes ).data().toArray();

        }

        }).on('deselect', function (e, dt, type, indexes) {
            if (type === 'row') {
                var imp  = dt.rows( indexes ).data().toArray();

            }
        });
    },
    checkRows: function (impuestos) {
        var self = this;
        self.table.rows().deselect();
        self.table.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.data();
            $.each(impuestos, function (index, imp) {
                if (data.codigo == imp.idImpuestoHacienda) {
                    self.table.row(rowIdx).select();
                }
            });
        });
    },
    calMonto: function (cantidad, precio) {
        return cantidad * precio;
    },
    sumImpuestos: function (impuestos) {
        var impuesto = 0;
        $.each(impuestos, function (index, imp) {


            impuesto += parseFloat(
                ("porcentaje" in imp) ? imp.porcentaje :  imp.pTarifa
                );
        });
        return impuesto;
    },
    calSubTotal: function (montoTotal, descuento) {
        return montoTotal - descuento;
    },
    calNmLinea: function (monto, subTotal, impuestos) {
        var impMonto = (impuestos / 100) * monto;
        return subTotal + impMonto;
    },
    loadInfo: function () {
        var self = this;
        var response = global.Ajax("POST", {"action": 9, "idArticulo": 0}, "facturar.php", "json", true);

        response.then(function (data) {
            var data = JSON.parse(data);
            if (data.error) {
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
            } else {

                //self.clientes = data.clientes;
                
                self.preferencias = data.preferencias;
                self.unidades = data.unidades;
                //self.facturas = data.facturas;
                if('copyProforma' in data){
                    global.loadingBlock("Cargando datos de la Proforma, Por Favor Espere ... ");
                    self.loadCopyDoc(data.copyProforma);
                }else{
                    self.setPreferencias();
                }

            }
        }).catch(function (error) {
            console.log(error);
        });
    },
    loadClientes: function () {
        var self = this;
        var response = global.Ajax("POST", {"action": 16}, "facturar.php", "json", true);
        response.then(function (data) {
            var data = JSON.parse(data);
            if (data.error) {
                //global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
            } else {

                self.clientes = data.clientes;   
            }
        }).catch(function (error) {
            console.log(error);
        });
    },loadArticulo: function () {
        var self = this;
        var response = global.Ajax("POST", {"action": 17, "idArticulo": 0, "idCliente": self.selectedCliente.idReceptorEmp}, "facturar.php", "json", true);
        response.then(function (data) {
            var data = JSON.parse(data);
            if (data.error) {
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
            } else { 
                self.articulos = data.articulos;  
            }
        }).catch(function (error) {
            console.log(error);
        });
    },
    setPreferencias: function () {

        var self = this;
        if (self.preferencias.idSucursalEmp !== null) {
            $("#pIdSucursalEmp").val(self.preferencias.idSucursalEmp).trigger("change");

        }
        $("#pCondicionVentaEmp").val(
            self.preferencias.idCondicionVentaEmp === null ? "-1" : self.preferencias.idCondicionVentaEmp
        ).trigger("change");

        //$("#divPlazoCredito").hide();

     /*   $("#pIdReceptorEmp").val(
            self.preferencias.idClienteEmp === null ? "-1" : self.preferencias.idClienteEmp
        ).trigger("change");*/

        $("#pIdMonedaEmp").val(
            self.preferencias.idMonedaEmp === null ? "-1" : self.preferencias.idMonedaEmp
        ).trigger("change");

        $("#idUnidadMedidaEmp").val(
            self.preferencias.idCodigoMedidaEmp === null ? "-1" : self.preferencias.idCodigoMedidaEmp
        ).trigger("change");


    },
    sendFactura: function () {


        global.loadingBlock("Procesando Factura, Por Favor Espere ... ");
        var self = this;

        $(".blockCli").each(function () {
            $(this).prop("disabled", false);
        });

        $("#pFechaEmisionRef, #pTipoDocRefEmp, #pCodigo, #pTipoDocumentoEmp,#pFechaEmision").prop("disabled", false);

        var mediosPago = [];
        var nom = ($("#pIdReceptorEmp").val() == -1) ? $("pNombreReceptor").val() : $("#pIdReceptorEmp option:selected").text();

        $("#tblBody tr").each(function () {
            mediosPago.push({
                "pMedioPagoEmp": $(this).find("td:eq(0) input").attr("id"),
                "pMonto": self.removeMask($(this).find("td:eq(1) input").val()),
                "pComprobante": $(this).find("td:eq(2) input").val()
            });
        });

        var detalle = [];
        tableArticulos.rows().every(function (rowIdx, tableLoop, rowLoop) {
            var data = this.data();
            detalle.push(data);
        });
        var pInfo = 1;
        if ($("#pInformacionReferencia").is(":checked")) {
            pInfo = 2;
        }

        var cuerpo =  {
            "action": 11,
            "form": $('#formWizard').serialize(),
            "pMediosPagoEmp": mediosPago,
            "pInformacionReferencia": pInfo,
            "detalle": detalle
        };

        if(pageJs.selectedCliente != null){
            if(pageJs.selectedCliente.hasOwnProperty('listaPlantillas') 
                && pageJs.selectedCliente.listaPlantillas !== null){
                    var plantilla = {}; 
                    pageJs.selectedCliente.listaPlantillas.forEach(function(plan) {
                          if(plan.codTipoDocEmp === "01"){
                                plantilla = plan;
                          }
                    }); 
                plantilla.orderTags = pageJs.orderArray;
                cuerpo.plantilla = plantilla; 
                    
            }
        }
    
        
      /*  if(pageJs.selectedCliente.hasOwnProperty('plantilla') 
            && pageJs.selectedCliente.plantilla !== null){
            var plantilla           = pageJs.selectedCliente.plantilla;
                plantilla.orderTags = pageJs.orderArray;

            cuerpo.plantilla = plantilla; 
        }*/
        
        var response = global.Ajax("POST", cuerpo, "facturar.php", "json", true);
        response.then(function (data) {
            var data = JSON.parse(data);
            if (data.error) {
                $(".blockCli").each(function () {
                    $(this).prop("disabled", true);
                });
                $("#pFechaEmisionRef, #pTipoDocRefEmp, #pCodigo, #pTipoDocumentoEmp,#pFechaEmision").prop("disabled", true);
                global.dismissLoadingBlock();
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
            } else {
                global.dismissLoadingBlock();
                global.myToast(2, "Acción Completada", data.message, 'toast-top-right', 'toast-top-right');
                if(self.preferencias.mostrarFactura === "1"){
                    self.lastIdDoc = data.pIdDocumento;
                    self.downLoadPDF(data.pIdDocumento);
                }else{
                    global.loadingBlock("Redireccionando, Por Favor Espere ... ");
                    window.location.reload();
                }
 

            }
        }).catch(function (error) {
            global.dismissLoadingBlock();
            $(".blockCli").each(function () {
                $(this).prop("disabled", true);
            });
            $("#pFechaEmisionRef, #pTipoDocRefEmp, #pCodigo, #pTipoDocumentoEmp,#pFechaEmision").prop("disabled", true);

        });

    },
    checkMetodos: function (value, total) {
        var self = this;
        if (value <= total) {
            var TotalPagos = 0;
            $("#tblBody tr td:nth-child(2)").each(function () {
                var val = self.removeMask($(this).find("input").val());
                TotalPagos = TotalPagos + val;
            });

            if (TotalPagos > total) {
                global.myToast(1, "Información", "La suma de los métodos de pago supera el monto a cancelar.", 'toast-top-right', 'toast-top-right');
                return false;
            }

        } else {
            global.myToast(1, "Información", "El monto no puede ser mayor al total .", 'toast-top-right', 'toast-top-right');
            return false;
        }
        return true;
    },
    loadPDVs: function (idSucursal) {
        var self = this;
        var response = global.Ajax("POST", {
            "action": 12,
            "idSucursal": idSucursal
        }, "facturar.php", "json", true);

        response.then(function (data) {
            var data = JSON.parse(data);
            if (data.error) {
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
            } else {
                $("#pIdPdvEmp option").remove();
                $("#pIdPdvEmp").append(data.data);
                if (self.preferencias.idPdvEmp !== null) {
                    $("#pIdPdvEmp").val(self.preferencias.idPdvEmp).trigger("change")
                }


            }
        }).catch(function (error) {
            console.log(error);
        });
    },
    loadDocRef: function (pIdDocumentoEmp) {


        var response = global.Ajax("POST", {
            "action": 14,
            "pIdDocumentoEmp": pIdDocumentoEmp
        }, "facturar.php", "json", true);

        response.then(function (data) {
            var data = JSON.parse(data);
            if (data.error) {
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
            } else {

                if (data.doc !== null) {
                    $("#pClave").val(data.doc.pClave);
                    $("#pFechaEmisionRef").prop("disabled", true);

                    $("#pFechaEmisionRef").data('daterangepicker').setStartDate(data.doc.pFechaEmision);
                } else {
                    $("#pFechaEmisionRef").prop("disabled", false);
                }

            }
        }).catch(function (error) {
            console.log(error);
        });
    },
    intVal: function (i) {
        return typeof i === 'string' ?
            i.replace(/[\$,]/g, '') * 1 :
            typeof i === 'number' ?
                i : 0;
    },
    distribucionMedio: function () {
        var self = this;
        var total = tableArticulos
            .column(12)
            .data()
            .reduce(function (a, b) {
                return self.intVal(a) + self.intVal(b);
            }, 0);

        //  var dif = total - self.sumMediosPago();

        return total;
    },
    validateEmail: function (email) {

        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);

    },
    resetMediosPago: function () {
        $(".sumMedio").each(function () {
            $(this).val(0)
        })
    },
    changeMask: function ($input, option) {
        switch (option) {
            case "01":
                $input.unmask();
                $input.mask('0-0000-0000');
                break;
            case "02":
                $input.unmask();
                $input.mask('0-000-000000');
                break;
            case "03":
                $input.unmask();
                $input.mask('000000000000');
                break;
            case "04":
                $input.unmask();
                $input.mask('0000000000');
                break;
            default:
                $input.unmask();
                $input.mask('Z',{translation:  {'Z': {pattern: /[a-zA-Z0-9]/, recursive: true}}});
                $input.attr('maxlength','20');
            break;
        }
    },
    removeMask: function (value) {
        return parseFloat(value.replace(/\,/g, ''));
    },
    setMask: function ($input, value) {
        $input.unmask();
        $input.val(value);
        $input.mask('00;000,000,000.00000', {reverse: true});
    },
    getDecimals: function (a) {

          if (!isFinite(a)) return 0;
          var e = 1, p = 0;
          while (Math.round(a * e) / e !== a) { e *= 10; p++; }
          return p;

    },
    setDocumento: function (doc) {
        var self = this;
        $("#cliInfoContainer").collapse("show");
        /** DATOS DEL DOCUMENTO**/
        $("#pIdSucursalEmp").val(doc.pIdSucursalEmp).trigger("change");
        $("#pCondicionVentaEmp").val(doc.pCondicionVentaEmp).trigger("change");
        $("#pPlazoCredito").val(
            doc.pPlazoCredito === "0" ? "" : doc.pPlazoCredito
        );
        $("#pOtroTexto").val(doc.pObservaciones);
        $("#pTipoDocRefEmp").val(doc.pTipoDocumentoEmp).trigger("change");
        $("#pFechaEmisionRef").val(doc.pFechaEmision);

        /** DATOS DE CLIENTE **/
        if(doc.pIdClienteEmp !== "" && doc.pIdClienteEmp !== '-1' && doc.pIdClienteEmp !== null  ){
            $("#pIdReceptorEmp").val(doc.pIdClienteEmp).trigger("change");
            if(doc.pTipoIdClienteEmp !== "" && doc.pTipoIdClienteEmp !== '-1' && doc.pTipoIdClienteEmp !== null){
                $("#pTipoIdenReceptorEmp").val(doc.pTipoIdClienteEmp).trigger("change");

            }
            $("#pNumeroIdenReceptor").val(doc.pNumeroIdCliente);
            $("#pNombreReceptor").val(doc.pNombreCliente);
            $("#pEmailReceptor").val(doc.pCorreoCliente);
        }
        /** DATOS DEL DETALLE **/
        $("#pIdMonedaEmp").val(doc.pIdMonedaEmp).trigger("change");
        $("#pTipoCambio").val(parseFloat(doc.pTipoCambio));
        doc.pLineasDetalle.forEach(function(articulo) {
            self.addRowdetalle(articulo);
        });
        doc.pMedioPagoEmp.forEach(function(medio) {
            $("#pMediosPagoEmp").val(medio).trigger("change");
        });
        $("#searchModal").modal("hide");
        global.myToast(1, "Información", 'El documento fue copiado correctamente.', 'toast-top-right', 'toast-top-right');

    },
    addRowdetalle: function (articulo) {
        var row = {
            "idArticuloEmp": articulo.pCodigoArtEmp,
            "pDetalle": articulo.pDetalle,
            "pMercServ": articulo.pMercServ,
            "pUnidadMedidaEmp": articulo.pUnidadMedidaEmp,
            "pCantidad": parseFloat(articulo.pCantidad),
            "pPrecioUnitario": parseFloat(articulo.pPrecioUnitario),
            "pMontoTotal": parseFloat(articulo.pMontoTotal),
            "pImpuesto": articulo.pImpuestos,
            "pMontoDescuento": parseFloat(articulo.pMontoDescuento),
            "pNaturalezaDescuento": articulo.pNaturalezaDescuento,
            "pMontoTotalLinea": articulo.pMontoTotal,
            "pPorcentajeDesc": 0
        };
        tableArticulos.row.add(row).invalidate().draw();
    },
    downLoadPDF : function(pIdDocumento){
        var self = this;
        var url = 'documentos.php';
        var request = new XMLHttpRequest();
        request.open('POST', url, true);
        request.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );
        request.responseType = 'blob';
        request.onload = function() {
            var url = '../resources/ext/pdfjs-dist/web/viewer.html?file=';
            $("#idprevPDFDOC").prop("src", url+window.URL.createObjectURL(request.response));
            $("#pdfModal").modal("show");
        };
        request.send("action=5&"+"pIdDocumento="+ pIdDocumento);

    },
    downLoadPDFRecibo : function (pIdDocumento) {
        var self = this;
        var url = 'documentos.php';
        var request = new XMLHttpRequest();
        request.open('POST', url, true);
        request.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );
        request.responseType = 'blob';
        request.onload = function() {
            var url = '../resources/ext/pdfjs-dist/web/viewer.html?file=';
            $("#idprevPDFDOC").prop("src", url+window.URL.createObjectURL(request.response));
        };
        request.send("action=7&"+"pIdDocumento="+ pIdDocumento);
    },
    checkCaracteres :function(text){
            var format = /[!@#$%^&*()_+\=\[\]{};':"\\|<>\/?]/; 

            return format.test(text);

    },
    ticketCajaHTML: function(pIdDocumento){

        $("idprevPDFDOC").hide();
        $("TicketCajaDiv").show();
        var self = this;
        var response = global.Ajax("POST", {"action" : 9,
            "pIdDocumento" : pIdDocumento
        }, "documentos.php", "json", true);

        response.then(function (data) {
            
            $("#TicketCajaDiv").empty();
            $("#TicketCajaDiv").append(data);

            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

      
            mywindow.document.write(document.getElementById("TicketCajaDiv").innerHTML);
            

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            mywindow.close();
 
        }).catch(function (error) {
            console.log(error);
        });
    },
    searchClient: function(idCliente){
        var self = this;
        return $.grep(self.clientes, function (row) {
            return row.idReceptorEmp == idCliente;
        })[0];
      
    },
    insertTable: function(rowIdx,  data){
        var row = {
                "idArticuloEmp": data.idArticuloEmp,
                "pDetalle": data.pDetalle,
                "pMercServ": data.pMercServ,
                "pUnidadMedidaEmp": data.pUnidadMedidaEmp,
                "pCantidad": data.pCantidad,
                "pPrecioUnitario": data.pPrecioUnitario,
                "pMontoTotal": data.pMontoTotal,
                "pImpuesto": data.pImpuesto,
                "pMontoDescuento": data.pMontoDescuento,
                "pNaturalezaDescuento": data.pNaturalezaDescuento,
                "pMontoTotalLinea": data.pMontoTotalLinea,
                "pPorcentajeDesc": data.pPorcentajeDesc
        };
        tableArticulos.row(rowIdx).data(row).draw();

    },
    montoTotal : function(precio, cantidad){
        return parseFloat(precio) * parseFloat(cantidad);

    },
    descuento : function(descuentoPorcentaje, montoTotal){
        return ( parseFloat(descuentoPorcentaje) / 100 ) * parseFloat(montoTotal);
    },
    subTotal(montoTotal, descuento){

        return montoTotal - descuento;
    },
    totalImpuestoPorcentaje : function(impùestos){
         var impuesto = 0.00000;
        impùestos.forEach(function(imp) {
            if(imp.exoneraciones.length > 0){
                impuesto += parseFloat(imp.exoneraciones[0].montoImpuesto);
            }else{
                impuesto += parseFloat(imp.porcentaje || imp.pTarifa);
            }
            
        });
 
        return impuesto;
    },
    totalImpuestoMonto : function(subTotal, totalImpPorcentaje, montoTotal){
        var result = 0; 
        if (parseFloat(subTotal) === 0) {
            result = (parseFloat(totalImpPorcentaje) / 100) * parseFloat(montoTotal);
        } else {
            result = (parseFloat(totalImpPorcentaje) / 100) * parseFloat(subTotal);
        }

        return result;
    },
    montoTotalLinea : function(subTotal, totalImp){
        return subTotal + totalImp;

    },
    inserrLinea : function(mode){
        var self = this;
        var totalImpPorc = pageJs.totalImpuestoPorcentaje(self.getImpuestoTable());
        var montoTotal   = pageJs.montoTotal(pageJs.removeMask($("#precio").val()), pageJs.removeMask($("#cant").val()));
        var descPorcen   = parseFloat(pageJs.removeMask($("#porcentaje").val())); 
        var descuento    = pageJs.descuento(descPorcen, montoTotal);
        var subTotal     = pageJs.subTotal(montoTotal, descuento);
        var totalImp     = pageJs.totalImpuestoMonto(subTotal, totalImpPorc, montoTotal);

        $.extend(pageJs.cacheLinea, {
            "pDetalle": $("#descripcion").val(),
            "pMercServ": $("#tipoArticulo").val(),
            "pUnidadMedidaEmp": $("#idUnidadMedidaEmp").val(),
            "pCantidad": pageJs.removeMask($("#cant").val()),
            "pPrecioUnitario": pageJs.removeMask($("#precio").val()),
            "pMontoTotal": montoTotal,
            "pImpuesto": self.getImpuestoTable(),
            "pMontoDescuento": descuento,
            "pNaturalezaDescuento": $("#descDescripcion").val(),
            "pMontoTotalLinea": pageJs.montoTotalLinea(subTotal, totalImp),
            "pPorcentajeDesc": pageJs.removeMask($("#porcentaje").val())
        });
        //true inserto una linea nueva, false actualizo una linea

        if(mode){

              tableArticulos.row.add(pageJs.cacheLinea).invalidate().draw();

        }else{
            var rowIdx = tableArticulos.row(".selected").index();
            pageJs.insertTable(rowIdx, pageJs.cacheLinea);

        } 
         if ($("#boolClose").is(":checked")) { 
                $('#modalArticulo').modal("hide");

        }

    },
    getImpuestoTable : function(){
        var self = this;
        var impuestos = [];
        if (self.table.rows(".selected").count() > 0) {

            self.table.rows(".selected").every(function (rowIdx, tableLoop, rowLoop) {
                    var data = this.data();

                    if(pageJs.cacheLinea.pImpuesto !== null){ // estoy editando
                          var found = self.findImpuestoById(data.codigo, pageJs.cacheLinea.pImpuesto);
                        if(found.length > 0){
                            impuestos.push(found[0]);
                        }else{
                            impuestos.push({
                                "descripcion": data.descripcion,
                                "excepcion": data.excepcion,
                                "exoneraciones": [],
                                "idImpuestoHacienda": data.codigo,
                                "idsImpuestoEmp": data.codigosEmp,
                                "porcentaje": data.porcentajeImp
                            });
                        } 
                    }else{// estoy creando uno nuevo
                         impuestos.push({
                                "descripcion": data.descripcion,
                                "excepcion": data.excepcion,
                                "exoneraciones": [],
                                "idImpuestoHacienda": data.codigo,
                                "idsImpuestoEmp": data.codigosEmp,
                                "porcentaje": data.porcentajeImp
                            });
                    }
                  
            });
        }
        return impuestos;


    },
    findImpuestoById : function(id, impuestos){
        return $.grep(impuestos, function (row) {
            return row.idImpuestoHacienda == id;
        });
    },
    cutDecimals : function(number){
       return Number((number).toString().match(/^\d+(?:\.\d{0,5})?/));

    },
    hierarchySortFunc: function(a,b ) {
    	var self = this;
  		return a.secuencia > b.secuencia;

	},
    hierarhySort : function(hashArr, key, result){
		var self = this;
	  	if (hashArr[key] == undefined) return;
		  var arr = hashArr[key].sort(self.hierarchySortFunc);
		  for (var i=0; i<arr.length; i++) {
		    result.push(arr[i]);
		    self.hierarhySort(hashArr, arr[i].idTag, result);
	  	}
	  	return result;
	},
    reorderArray : function(arr){
		//var arr = pageJs.selectedCliente.plantilla.tags;

		function hierarchySortFunc(a,b ) {
  			return a.secuencia > b.secuencia;
		}

		function hierarhySort(hashArr, key, result) {

		  if (hashArr[key] == undefined) return;
		  var arr = hashArr[key].sort(hierarchySortFunc);
		  for (var i=0; i<arr.length; i++) {
		    result.push(arr[i]);
		    hierarhySort(hashArr, arr[i].idTag, result);
		  }

		  return result;
		}

		var hashArr = {};
		for (var i=0; i<arr.length; i++) {
		  if (hashArr[arr[i].idTagPadre] == undefined) hashArr[arr[i].idTagPadre] = [];
		  hashArr[arr[i].idTagPadre].push(arr[i]);
		}

		var result = hierarhySort(hashArr, 0, []);
		return result;
		
	},
    additionalInformation : function(){
    	var self = this;
        //funcion usada cuando el cliente posee una estructura xml adicional

        var plantilla = {};

        pageJs.selectedCliente.listaPlantillas.forEach(function(plan) {
              if(plan.codTipoDocEmp === "01"){
                    plantilla = plan;
              }
        }); 
        //console.log(plantilla); 
        pageJs.orderArray = self.reorderArray(plantilla.tags);
	 
        $("#descliinfo").text(plantilla.nombrePlantilla);
        $("#titleInfoadd").show("slow");
        if(plantilla.otroTexto){
    		$("#divOtros").show("slow"); 
    		//Busco las tags OtroTexto
    		var otroTexto = plantilla.tags.filter(function(tag) {
  								return tag.idTipoTag === 2;
			});
    	 
			otroTexto.forEach(function(tag) {
                $("#divOtros").append(self.generateInfo(tag, "", 1));
			});

        }else{
			$("#divOtros").hide("slow").empty();
        }

		if(plantilla.otroContenido){

    		$("#divOtroContenido").show("slow");

            var inputs = pageJs.orderArray.filter(function(tag) {
                 return tag.html == 1 ;  
            });
           // console.log(inputs);
            var div =  pageJs.generateDivs("", " row col-md-12");
            inputs.forEach(function(tag, i) { 
               var object = pageJs.generateInfo(tag, "", 3);
               $(div).append(object);
            });
            $("#divOtroContenido").append(div);
       
        }else{
			$("#divOtroContenido").hide("slow").empty();

        }

        if(plantilla.archivos){
            $("#atachmentsDiv").show();
            var files = pageJs.orderArray.filter(function(tag) {
                return tag.esAdjunto === "1"; // tag otroContenido
            });
            $num = 1 ;
            files.forEach(function(attach, i) {
                var otroContenido = pageJs.orderArray.filter(function(tag) {
                     return tag.idTagPadre == attach.idTag;
                }); 
                pageJs.attachBlockFiles($num, otroContenido, attach);
                $num += 1;
            });

        }else{
            $("#atachmentsDiv").hide().empty();
        }

    },
    generateInfo : function(tag, value, tipoArray){
        var self = this; 
        var object;
        switch(tag.typeTag) {
        case 'text':
            $divCol = self.generateDivs("", "col-md-6");
            $divFormGroup = self.generateDivs("", "form-group");
            $label = self.generateLabels("", "label-control", "", tag.descripcion,tag.visible);
            $input = self.generateInputs(tag.cdHtml, tag.typeTag,
                         "form-control form-control-sm border-primary "+tag.descripcion,
                          tag.longitudTag,true, tag.opcionalTag, tag.visible, value, tag, tipoArray);
            if(value != ""){
                 $($input).trigger("change");
            }

            $input.on("change", function(){
                var value =  $(this).val();
                tag.valor = value;
            });


            $input.trigger("change");
            $p     = self.generateP();
            $divFormGroup.append($label);
            $divFormGroup.append($input);
            $divFormGroup.append($p);
            $divCol.append($divFormGroup);

            object = $divCol;
            break;

        case 'textarea':

          	$divCol = self.generateDivs("", "col-md-12");
            $divFormGroup = self.generateDivs("", "form-group");
            $label = self.generateLabels("", "label-control", "", tag.descripcion,tag.visible);
            $input = self.generateTextArea(tag.cdHtml,
                          "" ,tag.typeTag,
                         "form-control form-control-sm border-primary "+tag.descripcion, 3, 50, tag.longitudTag,
                          true, tag.opcionalTag, tag.visible, value, tag, tipoArray);

            $p     = self.generateP();
            $divFormGroup.append($label);
            $divFormGroup.append($input);
            $divFormGroup.append($p);
            $divCol.append($divFormGroup);
            //$(parentDiv).append($divCol); 
             object = $divCol;
            break;

        case 'number':
        	$divCol = self.generateDivs("", "col-md-6");
            $divFormGroup = self.generateDivs("", "form-group");
            $label = self.generateLabels("", "label-control", "", tag.descripcion,tag.visible);
            $input = self.generateInputs(tag.cdHtml, tag.typeTag,
                         "form-control form-control-sm border-primary "+tag.descripcion,  tag.longitudTag, true,
                          tag.opcionalTag, tag.visible, value,  tag, tipoArray);
            $p     = self.generateP();
              $input.on("change", function(){
                var value =  $(this).val();
                tag.valor = value;
            });


            $input.trigger("change");
            $divFormGroup.append($label);
            $divFormGroup.append($input);
            $divFormGroup.append($p);
            $divCol.append($divFormGroup);
            //$(parentDiv).append($divCol);
             object = $divCol;
                 
            break;

      	case 'file':
        	$divCol = self.generateDivs("", "col-md-6");
            $divFormGroup = self.generateDivs("", "finput-group mb-3");
            $divPrepend = self.generateDivs("", "input-group-prepend");
            $span = $("<span>", { class:"input-group-text", id:"inputGroupFileAddon01", text :"Archivo"});
            $divCustomF = self.generateDivs("", "custom-file");
            $input = self.generateInputs(tag.cdHtml, tag.typeTag,
                         "border-primary custom-file-input"+tag.descripcion, true, tag.opcionalTag, value, tag, tipoArray);
          	$label = self.generateLabels("", "custom-file-label", "inputGroupFileAddon01", "");
            $input.on("change", function(){
                    var el = this;
                    var url = this.value;
                    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
                    if(el.files[0].size <= 3145728){
                        if (el.files && el.files[0] && (ext == "pdf" || ext == "doc" || ext == "xls" || ext == "xlsx" || ext == "png " || ext == "jpg")) {
                           self.getBase64(el.files[0]).then(function(data){
                                    tag.valor = data;
                           });

                        }else{
                            $(el).val('');
                            global.myToast(1, "Información", "Solo se permite subir archivos con extensiónes pdf, doc, xls , xlsx, png, y jpg.", 'toast-top-right', 'toast-top-right');
                        }
                    }else{
                        var size = ((el.files[0].size / 1024) /1024) + "MB";
                        global.myToast(1, "Información", "Solo se permite subir archivos con un tamaño maximo de 3 MB, este archivo pesa ."+ size, 'toast-top-right', 'toast-top-right');
                        $(el).val('');
                    }
            })

          	$divCustomF.append($input);
            $divCustomF.append($label);
			$divPrepend.append($span);
			$divFormGroup.append($divPrepend);
            $divFormGroup.append($divCustomF);
            $divCol.append($divFormGroup);
            //$(parentDiv).append($divCol);
             object = $divCol;   
            break;

        }

        return object;


    },
    attachBlockFiles: function(num, dataBlock, parent){
        
        var div =  pageJs.generateDivs(parent.idTag, parent.descripcion+ " "+" row col-md-12");
        dataBlock.forEach(function(tag, i) {
           var value = "";
           if(tag.autoIncrement == 1){
              value = num;
           }
           var object = pageJs.generateInfo(tag, value, 3);
           $(div).append(object);
        });
       $("#atachmentsDiv").append(div);


    },
    generateDivs : function(id , classes){
        return $("<div>", {"id": id, "class": classes });

    },
    generateLabels : function(id, classes, forOp, text, visible){
        $label = $("<label>", {"id": id, "class": classes, "for": forOp, "text": text });
        if(visible === 0){
            $($label).hide();
        }

        return  $label;

    },
    generateP : function(){
        return $("<p>",{  "clases": "help-block text-danger" });
    },
    generateInputs : function(name ,type, classes, maxlength, enable, required, visible, value, tag, tipoArray){
         var self = this;
        $input = $("<input>", {"name": name, "type" : type, "class": classes ,"value": value, "data-json": tag});
        $($input).data("json", tag);
        $input.prop({"required" : required , "enable" : enable});
        if(visible === 0){
            $($input).hide();
        }
        return $input;
    },
    generateTextArea: function(id, name, type, classes, rows, cols, maxlength, enable, required, visible, value, tag, tipoArray){
		 var self = this;
        $textArea = $("<textarea>", {"id" : id,   "name": name, "type" : type, "class": classes, "rows": rows, "cols" : cols, "maxlength": maxlength, "value": value , "data-json": tag}); 
        $textArea.prop({"required" : required , "enable" : enable});
        if(visible === 0){
           $($textArea).hide();
        } 
        return $textArea;    
    },
    addCustomInfo(tipo, data){
      var self = this;
      if(tipo === 1){
            self.deleteCustom(tipo, data);
            pageJs.customInfo.otroTexto.push(data); 
      }
       if(tipo === 2){
             self.deleteCustom(tipo, data);
            pageJs.customInfo.otroContenido.push(data);
      }
       if(tipo === 3){
            self.deleteCustom(tipo, data);
            pageJs.customInfo.attachments.push(data);
      }
         
    },
    deleteCustom(tipo, data){
         var self = this;
        if(tipo === 1){  
           pageJs.customInfo.otroTexto = $.grep(pageJs.customInfo.otroTexto, function(el, idx) {
                    return el.idTag == data.idTag

           },true); 
      }
       if(tipo === 2){ 
            pageJs.customInfo.otroContenido =
             $.grep(pageJs.customInfo.otroContenido, function(el, idx) {
                    return el.idTag == data.idTag

            },true); 

            pageJs.customInfo.otroContenido.push(data);
      }
       if(tipo === 3){ 
          pageJs.customInfo.attachments =
             $.grep(pageJs.customInfo.attachments, function(el, idx) {
                    return el.idTag == data.idTag

            },true);  
      }
    },
    readAsURL: function (input) {
       

    },
    getBase64 : function(file) {
          return new Promise((resolve, reject) => {
            var  reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = error => reject(error);
          });
    },
    getInfoAttachments(){
        var self = this;
        var attachments = [];
        $("#atachmentsDiv > div").each(function(el){

            $(el).find(":input").each(function(input){

            
            });

        });
    },
    loadCopyDoc: function(pIdDocumentoEmp){
        var self = this;
        var response = global.Ajax("POST", {"action" : 15,
            "pIdDocumentoEmp" : pIdDocumentoEmp
        }, "facturar.php", "json", true);

        response.then(function (data) {
            var data = JSON.parse(data);
            if(data.error){
                global.dismissLoadingBlock();
                global.myToast(4, "Error", data.message, 'toast-top-right', 'toast-top-right');
            }else{
                self.facturas = data.facturas;
                self.setDocumento(self.facturas);
                global.dismissLoadingBlock();
            }
        }).catch(function (error) {
            global.dismissLoadingBlock();
            console.log(error);
        });
    }

};
$(document).ready(function () {

    pageJs.Init();

    tableArticulos = $('#tblproductosdetalles').DataTable({
        "language": {
            "thousands": ",",
            "decimal": ".",
            "sProcessing": "Procesando...",
            "lengthMenu": "Mostrar _MENU_ Productos / Servicios",
            "sEmptyTable": "No se ha ingresado lineas de detalle",
            "sInfo": "Mostrando Productos / Servicios del _START_ al _END_ de un total de _TOTAL_ ",
            "sInfoEmpty": "Mostrando Productos / Servicios de 0 al 0 de un total de 0",
            "sInfoFiltered": "(filtrado de un total de _MAX_ Productos / Servicios)",
            "sInfoPostFix": "",
            "sSearch": "Buscar: ",
            "sUrl": "",
            "sLoadingRecords": "Cargando ...",
            "oPaginate": {
                "First": "Primero",
                "Last": "Último",
                "Next": "Siguiente",
                "Previous": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "select": {
                "rows": {
                    _: '%d filas seleccionadas',
                    0: 'Seleccione una fila',
                    1: 'Solo una fila selecciona '
                }
            }

        },
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        // "responsive": true,
        "fixedHeader": true,
        "pageLength": 5,
        "select": {
            style: 'single',
            selector: 'td:first-child'
        },
        "searching": false,
        "paging": false,
        "ordering": false,
        "info": false,

        "footerCallback": function (row, data, start, end, display) {
            var api = this.api(), data;

            // Remove the formatting to get integer data for summation
            var intVal = function (i) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '') * 1 :
                    typeof i === 'number' ?
                        i : 0;
            };

            // Total over all pages
            total = api
                .column(12)
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);


            var impuestosTotal = 0;

            api.rows().every(function (rowIdx, tableLoop, rowLoop) {

            	var data = this.data();


		      	/*var totalImpPorc = pageJs.totalImpuestoPorcentaje(data.pImpuesto);
	            var montoTotal =   pageJs.montoTotal(data.pPrecioUnitario, data.cantidad);
	            //var descPorcen =   parseFloat($articulo.pPorcentajeDesc); 
	            var descuento  =     parseFloat(data.pMontoDescuento);
	            var subTotal   =     pageJs.subTotal(montoTotal, descuento);
	            impuestosTotal =     pageJs.totalImpuestoMonto(subTotal, totalImpPorc, montoTotal);*/
          

                var data = this.data();
                var porcentajeLinea = pageJs.totalImpuestoPorcentaje(data.pImpuesto);
                var precio = parseFloat(data.pPrecioUnitario);
                var canti = parseFloat(data.pCantidad);
                var monto = precio * canti;
                var desc = parseFloat(data.pMontoDescuento);
                var subTotal = monto - desc;
                var montoPor = 0;
                if (subTotal === 0) {
                    montoPor = (porcentajeLinea / 100) * monto;
                } else {
                    montoPor = (porcentajeLinea / 100) * subTotal;

                }
                impuestosTotal = impuestosTotal + montoPor;


            });

           var montoTotal = api
                .column(8)
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

           var descuentoTotal = api
                .column(9)
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

            // Total over this page
            pageTotal = api
                .column(12, {page: 'current'})
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0);

            // Update footer
            $(api.column(12).footer()).html(
                pageTotal + ' (' + total + ' total)'
            );

            var sub = montoTotal - descuentoTotal;


            $("#montoTotalizado").text($.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(montoTotal))); 
            $("#mtTotalDescuento").text($.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(descuentoTotal))); 
            
            $("#subtotalResumen").text($.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(sub))); 
            $("#impuestoResumen").text($.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(impuestosTotal))); 
            $("#totaDetalle").text($.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(total)));


            pageJs.totalTablaDetalle = pageJs.cutDecimals(total);
            if (total > 0) {
                $("#pMediosPagoEmp").prop("disabled", false);

            } else {

                $("#tblBody").empty();
                $("#pMediosPagoEmp option:eq(0)").prop('selected', true);
                $("#pMediosPagoEmp option").each(function () {
                    $(this).show();
                });
                $("#pMediosPagoEmp").prop("disabled", true);

            }

        },
        "columns": [
            {
                orderable: false,
                data: null,
                className: 'text-center',
                target: 0,
                "render": function (data, type, row, meta) {
                    return '<i class="ft-edit fa-lg editModal text-blue"></i>';
                }
            },
            {
                orderable: false,
                data: null,
                className: "text-center",
                target: 1,
                "render": function (data, type, row, meta) {
                    return '<i class="fa fa-times-circle-o fa-lg remove text-red"></i>';
                }
            },
            {"data": "idArticuloEmp", "visible": false},
            {
                "data": "pDetalle",
                "visible": true,
                "render": function (data, type, row, meta) {
                    return '<input type="text" value="' + data + '" ' +
                        'class="form-control form-control-sm border-primary pDetalle">';
                }
            },
            {"data": "pMercServ", "visible": false},
            {"data": "pUnidadMedidaEmp", "visible": false},
            {
                "data": "pCantidad",
                "className": "text-right",
                "visible": true,
                "render": function (data, type, row, meta) {
                    return '<input type="text" value="' + $.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(data)) + '" ' +
                        'class="form-control form-control-sm border-primary pCantidad inputNum">';
                }
            },
            {
                "data": "pPrecioUnitario",
                "className": "text-right",
                "render": function (data, type, row, meta) {
                    var $input = $("<input>", {
                        "type": "text",
                        "value": $.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(data)),
                        "class": "form-control form-control-sm border-primary pPrecioUnitario inputNum",


                    });

                    return $input.prop("outerHTML");


                    /* return  '<input type="text"  value="'+data+'"' +
                         'class="form-control form-control-sm border-primary pPrecioUnitario inputNum">';*/
                }
            },
            {
                "data": "pMontoTotal", "className": "text-right",
                "render": function (data, type, row, meta) {
                    if (type === 'display') { 
                        return $.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(data));

                    } else {
                        return data;
                    }
                }


            }, 
            {
                "data": "pMontoDescuento", "className": "text-right",
                "render": function (data, type, row, meta) {
                    if (type === 'display') {
                         return $.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(data));
                         

                    } else {
                        return data;
                    }
                }

            },
               {
                "data": "pImpuesto", "visible": true, "className": "text-right",
                "render": function (data, type, row, meta) {
                    if (type === 'display') {
                        var totalImpPorc = pageJs.totalImpuestoPorcentaje(row.pImpuesto);
                        var montoTotal =   pageJs.montoTotal(row.pPrecioUnitario, row.pCantidad);
                        var descPorcen =   parseFloat(row.pPorcentajeDesc); 
                        var descuento =    pageJs.descuento(descPorcen, montoTotal);
                        var subTotal =     pageJs.subTotal(montoTotal, descuento);
                        var totalImp =     pageJs.totalImpuestoMonto(subTotal, totalImpPorc, montoTotal);
 

                        return  $.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(totalImp)) + ' ' + '<i class="fa fa-info"></i>'; 

                    } else {
                        return data;
                    } 
                }
            },
            {"data": "pNaturalezaDescuento", "className": "text-right", "visible": false},
            {
                "data": "pMontoTotalLinea", "className": "text-right",
                "render": function (data, type, row, meta) {
                    if (type === 'display') {
                           return  $.fn.dataTable.render.number(',', '.', 5).display(pageJs.cutDecimals(data));
                        
                    } else {
                        return data;
                    }
                }

            },
            {"data": "pPorcentajeDesc", "visible": false}

        ]

    });
    tableArticulos.on('draw', function () {
        //$("input.pPrecioUnitario").mask('00,000,000,000.00000', {reverse: true});
        //$("input.pCantidad").mask('00000000000.00000', {reverse: true});

    });

    $("#tblproductosdetalles tbody").on("click", 'input', function () {
        $(this).select();
    });

    $("#tblproductosdetalles tbody").on("change", 'input.pDetalle', function () {
        var $articulo = tableArticulos.row($(this).closest('tr')).data();
        var rowIdx = tableArticulos.row($(this).closest('tr')).index();
        var input  = $(this).val();
        if ($(this).val() != "") { 
            if(pageJs.checkCaracteres(input)){
                 $(this).val($articulo.pDetalle);
                 global.myToast(3, "Advertencia", "El nombre del detalle no puede contener caracteres especiales", 'toast-top-right', 'toast-top-right');
            }else{
                $articulo.pDetalle = $(this).val(); 
                pageJs.insertTable(rowIdx, $articulo);
            } 
        } else {
            $(this).val($articulo.pDetalle);
            global.myToast(3, "Advertencia", "El nombre del producto o servicio es requerido", 'toast-top-right', 'toast-top-right');

        }

    })

    $("#tblproductosdetalles tbody").on("change", 'input.pCantidad', function () {
        var $articulo = tableArticulos.row($(this).closest('tr')).data();
        var rowIdx = tableArticulos.row($(this).closest('tr')).index();
        var cantidad = parseFloat($(this).val());
        if (cantidad > 0) {

            var totalImpPorc = pageJs.totalImpuestoPorcentaje($articulo.pImpuesto);
            var montoTotal =   pageJs.montoTotal($articulo.pPrecioUnitario, cantidad);
            var descPorcen =   parseFloat($articulo.pPorcentajeDesc); 
            var descuento =    pageJs.descuento(descPorcen, montoTotal);
            var subTotal =     pageJs.subTotal(montoTotal, descuento);
            var totalImp =     pageJs.totalImpuestoMonto(subTotal, totalImpPorc, montoTotal);
            var rowUpdated = $articulo;

            $.extend(rowUpdated, { 
                "pCantidad": cantidad, 
                "pMontoTotal": montoTotal,
                "pMontoDescuento": descuento,
                "pMontoTotalLinea": pageJs.montoTotalLinea(subTotal, totalImp),
                "pPorcentajeDesc": descPorcen

            });
            pageJs.insertTable(rowIdx, $articulo);

        } else {

            $(this).val($articulo.pCantidad);
            global.myToast(3, "Advertencia", "La cantidad no puede ser negativa o 0.", 'toast-top-right', 'toast-top-right');

        }
        pageJs.resetMediosPago();

    });

    $("#tblproductosdetalles tbody").on("change", 'input.pPrecioUnitario', function () {
        var $articulo = tableArticulos.row($(this).closest('tr')).data();
        var rowIdx = tableArticulos.row($(this).closest('tr')).index();
        var precio = pageJs.removeMask($(this).val());

        if (precio > 0) {

            var totalImpPorc = pageJs.totalImpuestoPorcentaje($articulo.pImpuesto);
            var montoTotal =   pageJs.montoTotal(precio, $articulo.pCantidad);
            var descPorcen =   parseFloat($articulo.pPorcentajeDesc); 
            var descuento =    pageJs.descuento(descPorcen, montoTotal);
            var subTotal =     pageJs.subTotal(montoTotal, descuento);
            var totalImp =     pageJs.totalImpuestoMonto(subTotal, totalImpPorc, montoTotal);
            var rowUpdated = $articulo;

            $.extend(rowUpdated, { 
                "pPrecioUnitario": precio,
                "pMontoTotal": montoTotal,
                "pMontoDescuento": descuento,
                "pMontoTotalLinea": pageJs.montoTotalLinea(subTotal, totalImp),
                "pPorcentajeDesc": descPorcen

            });
            pageJs.insertTable(rowIdx, $articulo);
        } else {

            $(this).val(precio);
            global.myToast(3, "Advertencia", "El precio no puede ser negativo o cero.", 'toast-top-right', 'toast-top-right');

        }
        pageJs.resetMediosPago();

    });

    tableArticulos.on('select', function (e, dt, type, indexes) {
        if (type === 'row') {


            var product = dt.row(".selected").data();
            pageJs.cacheLinea = product;
            $("#boolClose").prop("checked", true);

            $("#editButtonArt").show();
            $("#addButtonArt").hide();
            $("#closeModalOP").hide();
            $("#numArtDiv").show();
            $("#idArticuloEmp").val(product.idArticuloEmp);
            $("#descripcion").val(product.pDetalle);
            $("#idUnidadMedidaEmp").val(product.pUnidadMedidaEmp);
            $("#idUnidadMedidaEmp").trigger("change");


            // $('#idUnidadMedidaEmp').val(product.pUnidadMedidaEmp).trigger('change.select2');
            $('#tipoArticulo').val(product.pMercServ).trigger('change.select2');

            //  $("#porcentaje").val(product.pDetalle);
            var pre = parseFloat(product.pPrecioUnitario);

            var descMonto = parseFloat(product.pMontoDescuento);
            var can = parseFloat(product.pCantidad);
            //var porcentajeDesc = (descMonto * 100) / pre;
            var porcentajeDesc = parseFloat(product.pPorcentajeDesc);
            var montoTotal = pre * can;

            pageJs.setMask($("#precio"), pre);
            pageJs.setMask($("#mnTotal"), montoTotal);
            pageJs.setMask($("#descuento"), descMonto);
            $("#porcentaje").val(porcentajeDesc);
            $("#cant").val(can);

            $("#descDescripcion").val(product.pNaturalezaDescuento);

            pageJs.checkRows(product.pImpuesto);


            $('#modalArticulo').modal({
                keyboard: false
            }).on('hidden.bs.modal', function () {
                tableArticulos.rows().deselect();
                pageJs.table.rows().deselect();
            });


        }

    }).on('deselect', function (e, dt, type, indexes) {
        // self.setModal();
    }).on('click', '.remove', function () {
        var tr = $(this).closest('tr');
        tableArticulos.row(tr).remove().draw(false);
    });

    $("#editButtonArt").on("click", function () {
        if ($("#descripcion").val() !== "") {
            if ($("#tipoArticulo").val() !== "-1") {
                if ($("#idUnidadMedidaEmp").val() !== "-1") {

                    if (pageJs.removeMask($("#descuento").val()) > 0) {
                        if ($("#descDescripcion").val().length === 0) {
                            global.myToast(3, "Advertencia", "La descripción del descuento es requerida, si indica un monto de descuento.", 'toast-top-right', 'toast-top-right');

                        }else {  
                            pageJs.inserrLinea(false);  
                        }

                    } else {  
                        pageJs.inserrLinea(false); 
                    } 
                } else {
                    global.myToast(3, "Advertencia", "lLa unidad de medida es requerida.", 'toast-top-right', 'toast-top-right');

                }
            } else {
                global.myToast(3, "Advertencia", "El tipo  es requerido.", 'toast-top-right', 'toast-top-right');

            }

        } else {
            global.myToast(3, "Advertencia", "El nombre del producto/servicio es requerido.", 'toast-top-right', 'toast-top-right');

        }

    });

    $("#pTipoDocumentoEmp").on("change", function () {
        if ($(this).val() != "-1") {
            $("#spTipDoc").text($("#pTipoDocumentoEmp option:selected").text());
        } else {
            global.myToast(4, "Error", "El tipo documento es requerido", 'toast-top-right', 'toast-top-right');
        }
    });

    $("#pIdReceptorEmp").on("change", function () {
        $(".blockCli").each(function () {
            $(this).prop("disabled", true);
        });
        $value = $(this).val();
        if ($value !== "-1") {
            cliNew = false;
            pageJs.selectedCliente = pageJs.searchClient($value);
      
            $("#pTipoIdenReceptorEmp").val(pageJs.selectedCliente.tiposIdentificacionEmp[0]).trigger('change');
            $("#pNumeroIdenReceptor").val(pageJs.selectedCliente.numIdentificacion);
            $("#pNombreReceptor").val(pageJs.selectedCliente.nombre);
            $("#pEmailReceptor").val(pageJs.selectedCliente.correoElectronico);
            $("#cliInfoContainer").collapse("show");

            if(pageJs.selectedCliente.hasOwnProperty('listaPlantillas') && pageJs.selectedCliente.listaPlantillas !== null){
                pageJs.additionalInformation();
            }

        } else {
            $("#pTipoIdenReceptorEmp ").val("-1").trigger('change');
            $("#pNumeroIdenReceptor").val("");
            //$("#pNumeroIdenReceptor").prop("disabled", true);
            $("#pNombreReceptor").val("");
            $("#pEmailReceptor").val("");
            //$("#cliInfoContainer").collapse("hide");
        }
    });

    $("#addClient").on("click", function (event) {
        $("#pIdReceptorEmp").val("-1").trigger('change');
        cliNew = true;
        $("#pTipoIdenReceptorEmp ").val("-1").trigger('change');
        $("#pNumeroIdenReceptor").val("");
        $("#pNombreReceptor").val("");
        $("#pEmailReceptor").val("");

        $(".blockCli").each(function () {
            $(this).prop("disabled", false);
        });

        $('#cliInfoContainer').collapse("show");

        $("#tipoIdenModal ").val("-1").trigger('change');
        $("#numIdenModal").val("");
        $("#nombreModal").val("");
        $("#correoModal").val("");

        $('#modalCliente').modal({
            keyboard: false
        });

    });

    $("#pInformacionReferencia").on("change", function () {

        if ($(this).prop("checked")) {
            $('#docRefContainer').collapse("show");
        } else {
            $('#docRefContainer').collapse("hide");
        }
    });

    $("#pMediosPagoEmp").on("change", function () {


        var value = $(this).val();
        $("#pMediosPagoEmp option:selected").hide();

        var $tr = $("<tr>");
        var $td1 = $("<td>", {"class": "with-200 text-right", "style": "padding: 2px 2px;"});
        var $pMedioPagoEmp = $("<input>",
            {
                "id": value, "class": "form-control form-control-sm",
                "style": "border: 0px; background-color: white; font-weight: bold;",
                "value": $("#pMediosPagoEmp option:selected").text()
            });
        $pMedioPagoEmp.prop("readonly", true);
        $td1.append($pMedioPagoEmp);
        var $td2 = $("<td>", {"style": "padding: 2px 2px;"});

        var rMedPag = $('#medPag tr').length;
        var monto = 0;
        if (rMedPag === 0) {
            monto = pageJs.totalTablaDetalle;
        }

        var $pMonto = $("<input>", {
            "type": "text",
            "class": "form-control form-control-sm border-primary sumMedio inputNum",
            "value": pageJs.cutDecimals(monto)
        });

        $pMonto.on("change", function () {
            if ($(this).val() === "") {
                $(this).val(0);
            }


        });
        $pMonto.on("click", function () {
            $(this).select();
        })

        $td2.append($pMonto);

        var $td3 = $("<td>", {"style": "padding: 2px 2px;"});
        var $pComprobante = $("<input>", {
            "type": "text",
            "class": "form-control form-control-sm border-primary",
            "placeholder": "Número Comprobante",
            "value": ""
        });

        $td3.append($pComprobante);


        var $td4 = $("<td>", {"style": "padding: 2px 2px;"});
        var $btn = $("<button>", {"type": "button", "class": "btn btn-sm btn-icon btn-primary mr -1"});
        $btn.on("click", function () {
            $("#pMediosPagoEmp option[value=" + value + "]").show();
            $tr.remove();
        });

        var $icon = $("<i>", {"class": "fa fa-close"});
        $td4.append($btn.append($icon));

        $tr.append($td1);
        $tr.append($td2);
        $tr.append($td3);
        $tr.append($td4);
        $("#tblBody").append($tr);

       // $('.sumMedio').mask('00,000,000,000.000000', {reverse: true});
        $("#pMediosPagoEmp option:eq(0)").prop('selected', true);

    });

    $("#pIdSucursalEmp").on("change", function () {
        pageJs.loadPDVs($(this).val())
    });

    $("#addArticulo").on("click", function () {
        $("#editButtonArt").hide();
        $("#addButtonArt").show();
        $("#closeModalOP").show();
        $("#numArtDiv").hide();
        $("#boolClose").prop("disabled", false);
        $("#boolClose").prop("checked", true);

        document.getElementById("forArticulos").reset();
        $('#modalArticulo').modal({
            keyboard: false
        });
        $("#precio").trigger("change");
    });

    $("#addButtonArt").on("click", function () {

        if ($("#descripcion").val() !== "") {
            if ($("#tipoArticulo").val() !== "-1") {
                if ($("#idUnidadMedidaEmp").val() !== "-1") {

                     pageJs.cacheLinea = {               
                                "idArticuloEmp": null,
                                "pDetalle": null,
                                "pMercServ": null,
                                "pUnidadMedidaEmp": null,
                                "pCantidad": null,
                                "pPrecioUnitario": null,
                                "pMontoTotal": null,
                                "pImpuesto": null,
                                "pMontoDescuento": null,
                                "pNaturalezaDescuento": null,
                                "pMontoTotalLinea": null,
                                "pPorcentajeDesc": null
                            };


                    if (pageJs.removeMask($("#descuento").val()) > 0) {

                        if ($("#descDescripcion").val().length === 0) {
                            global.myToast(3, "Advertencia", "La descripción del descuento es requerida, si indica un monto de descuento.", 'toast-top-right', 'toast-top-right');

                        }else {
                            pageJs.inserrLinea(true);  
                         }
                    }else{
                         pageJs.inserrLinea(true);   
                    }

                } else {
                    global.myToast(3, "Advertencia", "lLa unidad de medida es requerida.", 'toast-top-right', 'toast-top-right');

                }
            } else {
                global.myToast(3, "Advertencia", "El tipo  es requerido.", 'toast-top-right', 'toast-top-right');

            }

        } else {
            global.myToast(3, "Advertencia", "El nombre del producto/servicio es requerido.", 'toast-top-right', 'toast-top-right');

        }
    });
 
    $("#nombreModal").on("change", function(){
        if(pageJs.checkCaracteres($(this).val())){
             $(this).val("");
             global.myToast(3, "Advertencia", "La razón social no puede contener caracteres especiales.", 'toast-top-right', 'toast-top-right');
        }
    })

    $("#descDescripcion").on("change", function(){
        if(pageJs.checkCaracteres($(this).val())){
             $(this).val("");
             global.myToast(3, "Advertencia", "La descripción del descuento no puede contener caracteres especiales.", 'toast-top-right', 'toast-top-right');
        }
    })

    $("#addCliModal").on("click", function () {

        if ($("#tipoIdenModal").val() !== "-1") {
            if ($("#numIdenModal").val() !== "") {
                if ($("#nombreModal").val() !== "-1") {

                    var emailInvalid = false;

                    if ($("#correoModal").val() !== "") {
                        if (pageJs.validateEmail($("#correoModal").val())) {
                            emailInvalid = true;
                        }
                    } else {
                        emailInvalid = true;
                    }

                    if (emailInvalid != true) {
                        global.myToast(3, "Advertencia", "Formato del correo inválido.", 'toast-top-right', 'toast-top-right');
                    } else {
                        $("#pTipoIdenReceptorEmp ").val($("#tipoIdenModal").val()).trigger('change');
                        $("#pNumeroIdenReceptor").val($("#numIdenModal").val());
                        $("#pNombreReceptor").val($("#nombreModal").val());
                        $("#pEmailReceptor").val($("#correoModal").val());

                        $('#modalCliente').modal("hide");
                    }

                    

                } else {
                    global.myToast(3, "Advertencia", "La razon social es requerida.", 'toast-top-right', 'toast-top-right');

                }
            } else {
                global.myToast(3, "Advertencia", "El número de identificación es requerido.", 'toast-top-right', 'toast-top-right');

            }

        } else {
            global.myToast(3, "Advertencia", "El tipo de identificación es requerido.", 'toast-top-right', 'toast-top-right');

        }
    });

    $("#pNumero").on("change", function () {
        pageJs.loadDocRef($(this).val());
    });

    $("#pTipoCambio").on("change", function () {
        if ($(this).val() <= 0) {
            $(this).val(1);
            global.myToast(3, "Advertencia", "El tipo de cambio no puede ser negativo o cero.", 'toast-top-right', 'toast-top-right');
        }
    });

    $("#addEmails").on("click", function () {
        // var $row =  $("<div>", {"class": "row col-md-12"});
        var $formGroup = $("<div>", {"class": "form-group"});
        var $inputGroup = $("<div>", {"class": "input-group input-group-sm"});
        var $span = $("<span>", {"class": "input-group-btn"});
        var $i = $("<i>", {"class": "fa fa-close"});
        var $button = $("<button>",
            {"class": "btn btn-danger"}).on("click", function () {
            $formGroup.remove();
        });

        var $correo = $("<input>", {
            "type": "text",
            "class": "form-control form-control-sm border-primary emailVal",
            "placeholder": "correoejemplo@ejemplo.com",
            "name": "pEmailReceptor[]"
        });
        $button.append($i);
        $span.append($button);
        $inputGroup.append($correo);
        $inputGroup.append($span);
        $formGroup.append($inputGroup);

        $("#groupEmails").append($formGroup);
    })

    $("#pCondicionVentaEmp").on("change", function () {
        if ($("#pCondicionVentaEmp option:selected").text() == "Contado") {

            $("#divPlazoCredito").hide();
        } else {
            $("#divPlazoCredito").show();
        }
    });

    $("#pPlazoCredito").on("change", function () {
        if ($(this).val() !== "") {
            if (isNaN($(this).val())) {
                global.myToast(3, "Advertencia", "El plazo a crédito debe ser valor numérico", 'toast-top-right', 'toast-top-right');
            }
        } else {
            global.myToast(3, "Advertencia", "El plazo a crédito es requerido", 'toast-top-right', 'toast-top-right');

        }

    });

    $("#pIdMonedaEmp").on("change", function () {
        pageJs.resetMediosPago();
        $(".addSymbol").text($("#pIdMonedaEmp option:selected").data("simbolo"));
        if (tableArticulos.rows().count() > 0) {
            swal({
                title: ' Cambio de Moneda ',
                type: 'info',
                text: "Se ha cambiado la moneda del documento, " +
                "por favor revisar los montos del detalle para que vayan acorde a la moneda que selecciono.",
                focusConfirm: true,
                confirmButtonText: 'Entendido',
                confirmButtonColor: '#009c9f'
            })
        }

    });

    $("#tipoArticulo").on("change", function () {
        if ($("#tipoArticulo").val() === "-1") {
            global.myToast(3, "Advertencia", "El tipo es requerido.", 'toast-top-right', 'toast-top-right');

        }
    });

    /** CALCULOS DE ARTICULOS**/

    $("#cant").on("change", function () {
        var cantidad = pageJs.removeMask($(this).val()); 
        if (cantidad >= 99999999999) {
            cantidad = 1;  
            global.myToast(3, "Advertencia", "El precio no puede ser mayor a 99,999,999,999.", 'toast-top-right', 'toast-top-right');
        } 
        if(cantidad <= 0) { 
           cantidad = 1;  
           global.myToast(3, "Advertencia", "La cantidad no puede ser negativa o cero.", 'toast-top-right', 'toast-top-right');
        } 
        var porcentaje = parseFloat($("#porcentaje").val());
        var precio     = pageJs.removeMask($("#precio").val());
        var montoTotal = pageJs.montoTotal(precio, cantidad);
        var descuento  = pageJs.descuento(porcentaje, montoTotal);
       
        $("#mnTotal").val(pageJs.cutDecimals(montoTotal)).trigger('input');
        $("#descuento").val(pageJs.cutDecimals(descuento)).trigger('input');

    });

    $("#porcentaje").on("change", function () {
        var porcentaje = pageJs.removeMask($(this).val());
        if(porcentaje > 100){
            porcentaje = 0;
            global.myToast(3, "Advertencia", "El porcentaje no puede ser mayor a 100.", 'toast-top-right', 'toast-top-right');
        }
        if(porcentaje < 0){
            porcentaje = 0;
            global.myToast(3, "Advertencia", "El porcentaje no puede ser negativo.", 'toast-top-right', 'toast-top-right');
        }
        var precio     = pageJs.removeMask($("#precio").val());
        var cantidad   = pageJs.removeMask($("#cant").val());
        var montoTotal = pageJs.montoTotal(precio, cantidad);
        var descuento  = pageJs.descuento(porcentaje, montoTotal);
        
        $("#mnTotal").val(pageJs.cutDecimals(montoTotal)).trigger('input');
        $("#descuento").val(pageJs.cutDecimals(descuento)).trigger('input');
    });

    $("#precio").on("change", function () {
        var precio = pageJs.removeMask($(this).val());
        if (precio >= 99999999999) {
            precio = 1;
            global.myToast(3, "Advertencia", "El precio no puede ser mayor a 99,999,999,999.", 'toast-top-right', 'toast-top-right');
        }
        if (precio < 1) {
            precio = 1;
            global.myToast(3, "Advertencia", "El precio no puede ser negativo o cero.", 'toast-top-right', 'toast-top-right');
        } 
        var porcentaje = parseFloat($("#porcentaje").val());
        var cantidad     = pageJs.removeMask($("#cant").val());
        var montoTotal = pageJs.montoTotal(precio, cantidad);
        var descuento  = pageJs.descuento(porcentaje, montoTotal);
    
        $("#mnTotal").val(pageJs.cutDecimals(montoTotal)).trigger('input');
        $("#descuento").val(pageJs.cutDecimals(descuento)).trigger('input');
    });

    $('#modalArticulo').on('hidden.bs.modal', function () {
        $('#tipoArticulo').val("-1").trigger('change.select2');
        $('#idUnidadMedidaEmp').val("-1").trigger('change.select2');
        tableArticulos.rows().deselect();
        pageJs.tableImp.rows().deselect();
    });

    $("#pInformacionReferencia").on("change", function () {
        if ($("#pInformacionReferencia").is(":checked")) {
            $("#pFechaEmisionRef").prop("disabled", false);
        } else {
            $("#pFechaEmisionRef").prop("disabled", true);

        }
    });

    $("#pTipoIdenReceptorEmp").on("change",  function () {
        pageJs.changeMask($("#pNumeroIdenReceptor"), $(this).val());
        if($(this).val() === "-1"){
            $("#pNumeroIdenReceptor").val("");
            //$("#pNumeroIdenReceptor").prop("disabled", true);

        }
    });

    $("#tipoIdenModal").on("change",  function () {
        pageJs.changeMask($("#numIdenModal"), $(this).val());
        if($(this).val() === "-1"){
            $("#numIdenModal").val("");
            //$("#pNumeroIdenReceptor").prop("disabled", true);

        }
    });

    $("#copyFac").on("click", function () {
        $("#searchModal").modal("show");
    });

   /* $("#copyFacBtn").on("click", function () {
        pageJs.loadCopyDoc($("#searchFac").val());
    });
*/

    $("#descripcion").on("change", function(){
        if(pageJs.checkCaracteres($(this).val())){
             $(this).val("");
             global.myToast(3, "Advertencia", "El nombre del articulo o servicio no puede contener caracteres especiales", 'toast-top-right', 'toast-top-right');
        }
    })

     $("#radioStacked1").on("click", function(){
         pageJs.ticketCajaHTML(pageJs.lastIdDoc);
    })

    $('#pdfModal').on('hidden.bs.modal', function () {
         global.loadingBlock("Redireccionando, Por Favor Espere ... ");
        window.location.reload();
    });
});