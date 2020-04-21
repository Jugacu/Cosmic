var remote = function() {

    return {
        init: function() {

            $.ajax({
                url: '/housekeeping/api/remote/getplayer',
                type: "post",
                data: {
                    user_id: $("#user_id").data('id')
                },
                headers: {
                    "Authorization": 'housekeeping_remote_control'
                },
                dataType: 'json',
                beforeSend: function() {
                    remote.blockPage();
                },
                success: function(data) {
                    remote.initDatatable(data);
                }
            });
          
        },
      
        blockPage: function () {
            KTApp.blockPage({
                overlayColor: "#000000",
                type: "v2",
                state: "primary",
                message: "Processing..."
            }), setTimeout(function() {
                KTApp.unblockPage()
            }, 2e3)
        },

        initDatatable: function (jsonObj) {
          
        var datatableHotelAccessLogs = function() {
          
        if ($('#kt_datatable_access_logs').length === 0) {
           return;
        }
          
        var t;
        $("#kt_datatable_access_logs").KTDatatable({
               data: {
                   type: 'local',
                   source: jsonObj.accessLogs,
                   pageSize: 10
               },
               layout: {
                   scroll: !1,
                   footer: !1
               },
               sortable: !0,
               pagination: !0,
               search: {
                   input: $("#generalSearch")
               },
               columns: [{
                   field: "id",
                   title: "#",
                   type: "number",
                   width: 75,
                   sortable: "desc",
                   template: function(data) {
                       return '<span class="kt-font">' + data.id + '</span>';
                   }
               }, {
                   field: "hardware_id",
                   title: "Machine ID",
                   width: 300,
                   template: function(data) {
                       return '<span class="kt-font">' + data.hardware_id + '</span>';
                   }
               }, {
                   field: "ip_address",
                   title: "IP Adress",
                   width: 250,
                   template: function(data) {
                        if(jsonObj.authorization) {
                          return '<span class="kt-font"><a href="#" class="kt-user-card-v2__name" data-toggle="modal" data-target="#ipremoteLogs" data-id="' + data.id + '">' + data.ip_address + '</a></span>';
                        } else {
                          return data.ip_address;
                        }
                    }
               }, {
                   field: "timestamp",
                   title: "Timestsamp",
                   width: 200,
                   template: function(data) {
                       return '<span class="kt-font">' + data.timestamp + '</span>';
                   }
               }]
            }), $("#kt_datatable_reload").on("click", function() {
               $("#kt_datatable_access_logs").KTDatatable("reload")
            })
            }
        
            datatableHotelAccessLogs();
          
            var datatableChatLogs = function() {
              
            if ($('#kt_datatable_chatlogs').length === 0) {
               return;
            }
              
            var t;
            $("#kt_datatable_chatlogs").KTDatatable({
                   data: {
                       type: 'local',
                       source: jsonObj.chatlogs,
                       pageSize: 10
                   },
                   layout: {
                       scroll: !1,
                       footer: !1
                   },
                   sortable: !0,
                   pagination: !0,
                   search: {
                       input: $("#generalSearch_chatlogs")
                   },
                   columns: [{
                       field: "type",
                       title: "Tipo",
                       width: 75
                   }, {
                       field: "message",
                       title: "Mensaje",
                       width: 350
                   }, {
                       field: "timestamp",
                       title: "timestamp",
                       width: 175
                   }]
                }), $("#kt_datatable_reload_chatlogs").on("click", function() {
                   $("#kt_datatable_chatlogs").KTDatatable("reload")
                })
            }
            
            datatableChatLogs();

            var datatableStaffLogs = function() {

                if ($('#kt_datatable_stafflogs').length === 0) {
                    return;
                }

                var t;
                $("#kt_datatable_stafflogs").KTDatatable({
                    data: {
                        type: 'local',
                        source: jsonObj.stafflogs,
                        pageSize: 10
                    },
                    layout: {
                        scroll: !1,
                        footer: !1
                    },
                    sortable: !0,
                    pagination: !0,
                    search: {
                        input: $("#generalSearch_stafflogs")
                    },
                    columns: [{
                        field: "id",
                        title: "#",
                        type: "number",
                        width: 75
                    }, {
                        field: "username",
                        title: "Nombre de usuario",
                        width: 100,
                        template: function(data) {
                            return '<span class="kt-font"><a href="#" class="kt-user-card-v2__name" data-toggle="modal" data-target="#actionModal"  data-id="' + data.username + '">' + data.username +  '</a>';
                        }
                    }, {
                        field: "type",
                        title: "Tipo",
                        width: 85
                    }, {
                        field: "value",
                        title: "Data",
                        width: 350
                    }, {
                        field: "target",
                        title: "Target",
                        width: 100,
                        template: function(data) {
                            if(data.target !== null)
                                return '<span class="kt-font"><a href="#" class="kt-user-card-v2__name" data-toggle="modal" data-target="#actionModal"  data-id="' + data.target + '">' + data.target +  '</a>';
                        }
                    }, {
                        field: "time",
                        title: "Timestamp"
                    }]
                }), $("#kt_datatable_reload_stafflogs").on("click", function() {
                    $("#kt_datatable_stafflogs").KTDatatable("reload")
                })
            }

            datatableStaffLogs();


            var datatableClones = function() {
              
            if ($('#kt_datatable_clones').length === 0) {
               return;
            }
              
            var t;
            $("#kt_datatable_clones").KTDatatable({
                   data: {
                       type: 'local',
                       source: jsonObj.duplicateUsers,
                       pageSize: 10
                   },
                   layout: {
                       scroll: !1,
                       footer: !1
                   },
                   sortable: !0,
                   pagination: !0,
                   search: {
                       input: $("#generalSearch_clones")
                   },
                   columns: [{
                       field: "id",
                       title: "#",
                       type: "number",
                       width: 75,
                       sortable: "desc"
                   }, {
                       field: "username",
                       title: "Nombre de usuario",
                       width: 200,
                       template: function(data) {
                           return '<span class="kt-font"><a href="#" class="kt-user-card-v2__name" data-toggle="modal" data-target="#actionModal" data-id="' + data.username + '">' + data.username + '</a></span>';
                       }
                   }, {
                       field: "ip_address",
                       title: "Última IP de conexión / IP de registro",
                       width: 250,
                       template: function(data) {
                           return '<span class="kt-font">' + data.iplast + ' / ' + data.ipreg + '</span>';
                       }
                   }, {
                       field: "last_login",
                       title: "Último inicio de sesión",
                       width: 175
                   }]
                }), $("#kt_datatable_reload_clones").on("click", function() {
                   $("#kt_datatable_clones").KTDatatable("reload")
                })
            }
            
            datatableClones();

            var datatableUserLogs = function() {
              
            if ($('#kt_datatable_userlogs').length === 0) {
               return;
            }
              
            var t;
            $("#kt_datatable_userlogs").KTDatatable({
                   data: {
                       type: 'local',
                       source: jsonObj.userlogs,
                       pageSize: 10
                   },
                   layout: {
                       scroll: !1,
                       footer: !1
                   },
                   sortable: !0,
                   pagination: !0,
                   search: {
                       input: $("#generalSearch_clones")
                   },
                   columns: [{
                       field: "id",
                       title: "#",
                       type: "number",
                       width: 75,
                       sortable: "desc"
                   }, {
                       field: "new_name",
                       title: "Nuevo nombre de usuario",
                       width: 200
                   }, {
                       field: "old_name",
                       title: "Antiguo nombre de usuario",
                       width: 250
                   }, {
                       field: "timestamp",
                       title: "timestamp",
                       width: 175,
                       template: function(data) {
                           return '<span class="kt-font">' + data.timestamp + '</span>';
                       }
                   }]
                }), $("#kt_datatable_reload_userlogs").on("click", function() {
                   $("#kt_datatable_userlogs").KTDatatable("reload")
                })
            }
            
            datatableUserLogs();
          
            var datatableTradeLogs = function() {
              
            if ($('#kt_datatable_tradelogs').length === 0) {
               return;
            }

            var t;
            $("#kt_datatable_tradelogs").KTDatatable({
                   data: {
                       type: 'local',
                       source: jsonObj.tradelogs,
                       pageSize: 10
                   },
                   layout: {
                       scroll: !1,
                       footer: !1
                   },
                   sortable: !0,
                   pagination: !0,
                   search: {
                       input: $("#generalSearch_tradelogs")
                   },
                   columns: [{
                       field: "user_one",
                       title: "De / A",
                       width: 120,
                       template: function(data) {
                           return '<span class="kt-font">' + data.user_one_id.username + ' / ' + data.user_two_id.username + '</span>';
                       }
                   }, {
                       field: "user_one_items",
                       title: "Items 1",
                       width: 250,
                       template: function(data, i) {
                            var jsonObj = {};
                         
                            for (var x = 0; i < data.items.length; i++) {
                            var items = data.items[i];
                                if(data.user_one_id.username == items.user_id.username) {
                                    jsonObj[i] = items.item_name;
                                }
                            }
                            return '<span class="kt-font">' + JSON.stringify(jsonObj) + '</span>';
                       }
                   }, {
                       field: "user_two_items",
                       title: "Items 2",
                       template: function(data, i) {
                            var jsonObj = {};
                         
                            for (var x = 0; i < data.items.length; i++) {
                            var items = data.items[i];
                                if(data.user_two_id.username == items.user_id.username) {
                                    jsonObj[i] = items.item_name;
                                }
                            }
                            return '<span class="kt-font">' + JSON.stringify(jsonObj) + '</span>';
                       }
                   }, {
                       field: "timestamp",
                       title: "Timestamp",
                       width: 120,
                       template: function(data) {
                           return '<span class="kt-font">' + data.timestamp + '</span>';
                       }
                   }]
                }), $("#kt_datatable_reload_tradelogs").on("click", function() {
                   $("#kt_datatable_tradelogs").KTDatatable("reload")
                })
            }
            
            datatableTradeLogs();

            var datatableMailLogs = function() {
              
            if ($('#kt_datatable_maillogs').length === 0) {
               return;
            }
              
            var t;
            $("#kt_datatable_maillogs").KTDatatable({
                   data: {
                       type: 'local',
                       source: jsonObj.maillogs,
                       pageSize: 10
                   },
                   layout: {
                       scroll: !1,
                       footer: !1
                   },
                   sortable: !0,
                   pagination: !0,
                   search: {
                       input: $("#generalSearch_maillogs")
                   },
                   columns: [{
                       field: "id",
                       title: "#",
                       type: "number",
                       width: 75,
                       sortable: "desc",
                       template: function(data) {
                           return '<span class="kt-font">' + data.id + '</span>';
                       }
                   }, {
                       field: "new_mail",
                       title: "Nuevo correo electrónico",
                       width: 220,
                       template: function(data) {
                           return '<span class="kt-font">' + data.new_mail + '</span>';
                       }
                   }, {
                       field: "old_mail",
                       title: "Antiguo correo electrónico",
                       width: 220,
                       template: function(data) {
                           return '<span class="kt-font">' + data.old_mail + '</span>';
                       }
                   }, {
                       field: "ip_address",
                       title: "IP Adress",
                       width: 120,
                       template: function(data) {
                           return '<span class="kt-font">' + data.ip_address + '</span>';
                       }
                   }, {
                       field: "timestamp",
                       title: "Timestamp",
                       width: 175,
                       template: function(data) {
                           return '<span class="kt-font">' + data.timestamp + '</span>';
                       }
                   }]
                }), $("#kt_datatable_reload_maillogs").on("click", function() {
                   $("#kt_datatable_maillogs").KTDatatable("reload")
                })
            }
            
            datatableMailLogs();
            
            var datatableRoomLogs = function() {
              
            if ($('#kt_datatable_roomlogs').length === 0) {
               return;
            }
              
            var t;
            $("#kt_datatable_roomlogs").KTDatatable({
                   data: {
                       type: 'local',
                       source: jsonObj.rooms,
                       pageSize: 10
                   },
                   layout: {
                       scroll: !1,
                       footer: !1
                   },
                   sortable: !0,
                   pagination: !0,
                   search: {
                       input: $("#generalSearch_roomlogs")
                   },
                   columns: [{
                       field: "id",
                       title: "#",
                       type: "number",
                       width: 75,
                       sortable: "desc",
                       template: function(data) {
                           return '<span class="kt-font">' + data.id + '</span>';
                       }
                   }, {
                       field: "name",
                       title: "Nombre",
                       width: 200,
                       // callback function support for column rendering
                       template: function(data) {
                           return '<span class="kt-font">' + data.name + '</span>';
                       }
                   }, {
                       field: "description",
                       title: "Descripción",
                       width: 350,
                       template: function(data) {
                           return '<span class="kt-font">' + data.description + '</span>';
                       }
                   }]
                }), $("#kt_datatable_reload_roomlogs").on("click", function() {
                   $("#kt_datatable_roomlogs").KTDatatable("reload")
                })
            }
            datatableRoomLogs();

            var datatableBanLogs = function() {

                if ($('#kt_datatable_banlogs').length === 0) {
                    return;
                }

                var t;
                $("#kt_datatable_banlogs").KTDatatable({
                    data: {
                        type: 'local',
                        source: jsonObj.banlog,
                        pageSize: 10
                    },
                    layout: {
                        scroll: !1,
                        footer: !1
                    },
                    sortable: !0,
                    pagination: !0,
                    search: {
                        input: $("#generalSearch_banlogs")
                    },
                    columns: [{
                        field: "id",
                        title: "#",
                        type: "number",
                        width: 75,
                        sortable: "desc"
                    }, {
                        field: "user_staff_id",
                        title: "Staff",
                        width: 100,
                           template: function(data) {
                               return '<span class="kt-font">' + data.user_staff_id.username + '</span>';
                           }
                    }, {
                        field: "ban_reason",
                        title: "Razón",
                        width: 350
                    }, {
                        field: "ban_expire",
                        title: "Fecha y hora de expiración (GMT+1)",
                    }]
                }), $("#kt_datatable_reload_banlogs").on("click", function() {
                    $("#kt_datatable_banlogs").KTDatatable("reload")
                })
            }

            datatableBanLogs();

        }
    }
}();



jQuery(document).ready(function() {
    remote.init();
});