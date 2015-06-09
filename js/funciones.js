/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var dec = 5;
function convertir_origen_EA(){
    var EE = document.getElementById('Efectivo_O');
    var VV = document.getElementById('Vencido_O');
    var E = EE.value;
    var V = VV.value;
    var I = parseFloat($(Interes_O).val());
    var M = parseFloat($(Periodos_O).val());
    var J;
    if(V == 4){//es vencido
        //alert('Vencido');
        if(E==1){//Es Efectivo
            //alert('Efectivo');
            var K = 0.0;
            K = 1 + I;
            J = (Math.pow(K,M))-1;
        }else{ //es Nominal\
            //alert('Nominal');
            J = (Math.pow((1+(I/M)),M)) -1;
        }
    }else{ //es anticipado
        alert('Anticipado');
        if(E==1){//Es Efectivo
            //alert('Efectivo');
            J = (Math.pow((1-I),-1*M)) -1;
        }else{//es Nominal
            //alert('Nominal');
            J = (Math.pow((1-(I/M)),-1*M)) -1;
        }
    }
    
    convertir_EA_destino(J);
}

function convertir_EA_destino(I){
    var EE = document.getElementById('Efectivo_D');
    var VV = document.getElementById('Vencido_D');
    var RR = document.getElementById('Resultado');
    var E = EE.value;
    var V = VV.value;
    var M = parseFloat($(Periodos_D).val());
    var J;
   
    if(V==4){//es vencido
        //alert('Vencido');
        if(E==1){//Es Efectivo
            //alert('Efectivo');
            J = (Math.pow((1+I),(1/M)))-1;
        }else{ //es Nominal
            //alert('Nominal');
            J = (Math.pow((1+I),(1/M))-1)*M;
        }
    }else{ //es anticipado
        //alert('anticipado');
        if(E==1){//Es Efectivo
            //alert('efectivo');
            J = ((Math.pow((1+I),(1/(-1*M))))-1)*(-1);
        }else{//es Nominal
            //alert('Nominal');
            J = ((Math.pow((1+I),(1/(-1*M))))-1)*((-1)*(M));
        }
    }
    RR.value = J.toFixed(dec);
}
function cuota_presenta_anu(RR,I,N){
    var VR_P = parseFloat($(valor_presente).val());
    RR.value = (VR_P/(((1-(Math.pow((1+I),(-1*N)))))/I)).toFixed(dec);
}

function cuota_presente_amortizacion_anualidad(RR,I,N,OP){
    var VR_P = parseFloat($(valor_presente).val());
    RR.value = (VR_P/(((1-(Math.pow((1+I),(-1*N)))))/I)).toFixed(dec);
    location.href="amortizacion.php?cuota="+RR.value+"&vp="+VR_P+"&i="+I+"&n="+N+"&op="+OP+"&grad=0";
}

function cuota_futura_anu(RR,I,N){
    var VR_F = parseFloat($(valor_futuro).val());
    RR.value = (VR_F/((((Math.pow((1+I),N))-1))/I)).toFixed(dec);
}
function valor_presente_anu(RR,I,N){
    var R = parseFloat($(cuota).val());
    RR.value = (R*((1-(Math.pow((1+I),(-1*N))))/I)).toFixed(dec);
}
function valor_futuro_anu(RR,I,N){
    var R = parseFloat($(cuota).val());
    RR.value = ((R*((Math.pow((1+I),N))-1))/I).toFixed(dec);
}

function cuota_presente_amortizacion_gradienteL(RR,I,N,L,OP){
    var VR_P = parseFloat($(valor_presente).val());
    var ani = (1- (Math.pow(1+I,-1*N)))/I;
    RR.value = (((VR_P)-((L/I)*(ani - N*(Math.pow(1+I,-1*N)))))/ani).toFixed(dec);
   
    location.href="amortizacion.php?cuota="+RR.value+"&vp="+VR_P+"&i="+I+"&n="+N+"&grad="+L+"&op="+OP;
}

function cuota_presente_amortizacion_gradienteG(RR,I,N,G,OP){
    var VR_P = parseFloat($(valor_presente).val());
    if(G == I){
        RR.value = (VR_P/((N)/(1+I))).toFixed(dec);
    }else{
        RR.value = (((VR_P)*(G-I))/((((Math.pow((1+G),N))*(Math.pow((1+I),-1*N)))-1))).toFixed(dec);
    }
    location.href="amortizacion.php?cuota="+RR.value+"&vp="+VR_P+"&i="+I+"&n="+N+"&grad="+G+"&op="+OP;
}


function anualidad(caso, op){
    var RR = document.getElementById('resultado_anualidad');
    var I = parseFloat($(interes_anualidad).val());
    var N = parseFloat($(n).val());
   
    switch (caso) {
        case 0:
            cuota_presenta_anu(RR,I,N);
            break;
        case 1:
            cuota_futura_anu(RR,I,N);
            break;
        case 2:
            valor_presente_anu(RR,I,N);
            break;
        case 3:
            valor_futuro_anu(RR,I,N);
            break;
        case 4:
            switch (op){
                case 1:
                    cuota_presente_amortizacion_anualidad(RR,I,N,op);
                    break;
                case 2:
                    var L = parseFloat($(gradiente).val());
                    cuota_presente_amortizacion_gradienteL(RR,I,N,L,op);
                    break;
                case 3:
                    var G = parseFloat($(gradiente).val());
                    alert(G);
                    cuota_presente_amortizacion_gradienteG(RR,I,N,G,op);
                    break;
            }
            break;
    }   
}