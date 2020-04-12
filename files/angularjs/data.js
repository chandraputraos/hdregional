var app = angular.module('myApps', ['datatables']);

app.controller('hdrApp', function($scope, DTOptionsBuilder, DTColumnBuilder, DTColumnDefBuilder, $location, $http, Data) {
    $scope.getData;
    $scope.getSummary;
    $scope.insertData = '';


    $scope.getData = function() {
        $http({
            method: 'GET',
            url: 'files/api/view_data.php'
        }).then(function(response) {
            // success
            $scope.reports = response.data;
        }, function(response) {
            // error
            console.log(response.data, response.status);
        });
    };

    $scope.getSummary = function() {
        $http({
            method: 'GET',
            url: 'files/api/summary.php'
        }).then(function(response) {
            // success
            $scope.summary = response.data;
        }, function(response) {
            // error
            console.log(response.data, response.status);
        });
    };

    $scope.getUser = function() {
        $http({
            method: 'GET',
            url: 'files/api/user_admin.php'
        }).then(function(response) {
            // success
            $scope.useradmin = response.data;
        }, function(response) {
            // error
            console.log(response.data, response.status);
        });
    };


    $scope.insertData = function() {
        $http({
            method: 'POST',
            url: 'files/api/insert_data.php',

            data: {
                user_name: $scope.user_namalengkap,
                user_team: $scope.user_team,
                ping: $scope.ping,
                download: $scope.download,
                upload: $scope.upload,
                status_internet: $scope.status_internet,
                call_internal: $scope.call_internal,
                call_eksternal: $scope.call_eksternal,
                status_yealink: $scope.status_yealink,
                test_print: $scope.test_print,
                life_toner: $scope.life_toner,
                life_opc: $scope.life_opc,
                status_printer: $scope.status_printer,
                test_print_mcf: $scope.test_print_mcf,
                life_toner_mcf: $scope.life_toner_mcf,
                life_drum_mcf: $scope.life_drum_mcf,
                life_fuser_mcf: $scope.life_fuser_mcf,
                status_printer_mcf: $scope.status_printer_mcf,
                suhu_ac: $scope.suhu_ac,
                kondisi_ac: $scope.kondisi_ac,
                status_ac: $scope.status_ac,
                load_ups: $scope.load_ups,
                battery_ups: $scope.battery_ups,
                status_ups: $scope.status_ups,
                modem: $scope.modem,
                core_switch: $scope.core_switch,
                server_lokal: $scope.server_lokal,
                kebersihan: $scope.kebersihan,
                status_rack: $scope.status_rack,
                jira: $scope.jira,
                remarks: $scope.remarks
            }

        }).then(function(response) {
            console.log("Data Inserted Successfully");
        }, function(error) {
            alert("Sorry! Data Couldn't be inserted!");
            console.error(error);
        });
    };


    $scope.delete_data = function(hdr_id) {
        if (confirm("Are you sure you want to delete?")) {
            $http({
                    method: 'POST',
                    url: 'files/api/delete_data.php',
                    data: {
                        recordId: hdr_id
                    }
                })
                .success(function(data) {
                    alert(data);
                    $scope.show_data();
                });
        } else {
            return false;
        }
    }

    $scope.getData();
    $scope.getSummary();
    $scope.getUser();
    $scope.vm = {};
    $scope.vm.dtInstance = {};
    $scope.vm.dtColumnDefs = [DTColumnDefBuilder.newColumnDef(2).notSortable()];
    $scope.vm.dtOptions = DTOptionsBuilder.newOptions()
        .withOption('paging', true)
        .withOption('searching', true)
        .withOption('info', true);

    $scope.logout = function() {
        Data.get('logout').then(function(results) {
            Data.toast(results);
            $location.path('login');
        });
    }

});