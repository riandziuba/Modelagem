




/*para este script funcionar, copie este e substitua pelo outro, e copie estas tags aki em baixo, e substitua pelos
 botoes do mateus
 
 <a href="#" class="setas setas-esquerda"><i class="material-icons icon_button" onmousedown="Prev()">chevron_left</i></a>
 <a href="#" class="setas setas-direita"><i class="material-icons icon_button" onmousedown="Next()">chevron_right</i></a>
 
 
 */

var Time_of_Caroussel = 7  // defina aki o tempo q demora para o caroussel rolar automaticamente.
//
var Time_Sleep_Caroussel = 10 //defina aki o tempo q demora para o carousel voltar a rolar Automaticamente quando o
// usuario clica em uma das setas
//
//Obs: Quando o carousel chega no ultimo card, ele comeca a voltar automaticamente.
//
//            Dê uma olhada Pra ver se n ficou top d+ ;)


var Case = 4
var card = 3;
Main_Function(card);
var set_Time = false;
var Return = false;
var y = document.getElementsByClassName("Card");
var z = document.getElementsByClassName("icon_button");
if (y.length <= 4) {
    z[0].style.opacity = "0"
    z[1].style.opacity = "0"
}
if (Case == 4) {
    z[0].style.opacity = "0"
}
function Next() {
    set_Time = false;
    Main_Control(+1);
}
function Prev() {
    set_Time = false;
    Main_Control(-1);
}
function Main_Control(v) {
    var z = document.getElementsByClassName("icon_button");
    var x = document.getElementsByClassName("Card");
    if (Case == 5 && v == "-1") {
        z[0].style.opacity = "0"
    }
    else {
        z[0].style.opacity = "1"
    }
    if (Case == x.length - 1 && v == "+1") {
        z[1].style.opacity = "0"
    }
    else {
        z[1].style.opacity = "1"
    }
    if (x.length > 4) {
        if (Case == x.length && v == "+1") {
            v = 0
        }
        Case += v
        if (v == "-1") {
            if (Case >= 4) {
                x[card].style.display = "none"
            } else {
                Case++;
                v = 0
            }
        }
        if (v == "+1" && card == 3) {
            x[0].style.display = "none"
        }
        if (v == "+1") {
            x[0].style.display = "none"
        }
        Main_Function(card += v);
    }
    else {
        var z = document.getElementsByClassName("icon_button");
        z[0].style.opacity = "0";
        z[1].style.opacity = "0"
    }
}
function Main_Function(n) {
    var x = document.getElementsByClassName("Card");
    if (x.length > 4) {
        for (var v = n - 3; v > 0; v--) {
            x[v].style.display = "none";
        }
        for (var c = n - 3; c <= n; c++) {
            x[c].style.display = "block"
        }
    }
    else {
        for (var c = 0; c < x.length; c++) {
            x[c].style.display = "block";
        }
    }
}
function Auto_RowScrool() {
    var x = document.getElementsByClassName("Card");
    if (Case == x.length) {
        Return = true
    }
    if (Case == 4) {
        Return = false
    }
    if (Return == false) {
        if (set_Time == true) {
            Main_Control(+1)
        }
        setTimeout(Aux_Auto_RowScrool, Time_of_Caroussel * 1000);
    }
    else {
        if (set_Time == true) {
            Main_Control(-1)
        }
        setTimeout(Aux_Auto_RowScrool, Time_of_Caroussel * 1000);
    }
}
function Aux_Auto_RowScrool() {
    if (set_Time == false) {
        set_Time = true;
        setTimeout(Auto_RowScrool, 10000);
    }
    else {
        Auto_RowScrool()
    }
}
