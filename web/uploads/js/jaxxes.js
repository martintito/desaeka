/**
 * Crea un contador de tiempo que se actualiza cada segundo y que muestra
 * cuánto falta para que expire la oferta.
 */
function muestraCuentaAtras(id, fecha, boton, valor) {
    var horas, minutos, segundos;
    
    var ahora = new Date();
    /**var fechaExpiracion = new Date(fecha.ano, fecha.mes, fecha.dia, fecha.hora, fecha.minuto, fecha.segundo);
    fechaExpiracion.setDate(ahora.getDate()+parseInt(1));
    var fechaExpiracion = new Date(ahora.getDate()+parseInt(10000));**/
    var fechaExpiracion = new Date("2014", "10", "27", "14", "00", "00");
    
    /**
    valorFecha = ahora.valueOf();  // 1269226800000
    valorFechaTermino = valorFecha +  ( 1 * 24 * 60 * 60 * 1000 ); // 60 días después, como milisegundos ( días * horas * minutos * segundos * milisegundos )
    var fechaExpiracion = new Date(valorFechaTermino);
    **/
    
    /**var falta = Math.floor( (fechaExpiracion.getTime() - ahora.getTime()) / 1000 );**/
    
    var falta = Math.floor( (valor - 1 ) );
    var Next = Math.floor( (valor - 1 ) );
    
    if (falta < 0) {
        /**
        cuentaAtras = '-';
        cuentaAtras =fechaExpiracion;**/
        alert("Termino el tiempo de la prueba, pasara a la siguiente evaluación.", "Alerta");
        document.getElementById(boton).click();
        
    }
    else {
        horas = Math.floor(falta/3600);
        falta = falta % 3600;
        
        minutos = Math.floor(falta/60);
        falta = falta % 60;
        
        segundos = Math.floor(falta);
        
        cuentaAtras = (horas < 10    ? '0' + horas    : horas)    + 'h '
                    + (minutos < 10  ? '0' + minutos  : minutos)  + 'm '
                    + (segundos < 10 ? '0' + segundos : segundos) + 's ';
        
        setTimeout(function() {
            muestraCuentaAtras(id, fecha,boton, Next);
        }, 1000);
    }
    
    document.getElementById(id).innerHTML = cuentaAtras;
}
