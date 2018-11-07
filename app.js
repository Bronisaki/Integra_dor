/* Criando uma aplicação AngularJS */
var app = angular.module('APP', []);

/* Declarando um controller para nossa aplicação */
app.controller('controlador', controlador);

function controlador($scope, $http, $location) {