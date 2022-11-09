document.querySelector(".generargrafica").addEventListener("click", generargrafica);


var parametros = [];
var valores = [];

function generargrafica() {

    for (var i = 0; i < document.querySelectorAll('.parametro').length; i++) {

        parametros.push(document.querySelectorAll('.parametro')[i].value);
        valores.push(parseInt(document.querySelectorAll('.valor')[i].value));


    }


    var data = [
        {
            x: parametros,
            y: valores,
            type: 'linear'
        }];

    Plotly.newPlot('grafica', data);

}