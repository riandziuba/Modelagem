  var Case = 4
  var card = 3;
  Main_Function(card);
  var bolean = false;

  function Main_Control(v) {
    var x = document.getElementsByClassName("Card");
    if (Case==10 && v=="+1") {v=0}
    Case+=v
    if (v=="-1"){if(Case>=4){x[card].style.display = "none"}else{Case++;v=0}}
    if (v=="+1" && card==3) {x[0].style.display = "none"}
    if (v=="+1") {x[0].style.display = "none"}
    Main_Function(card += v);
    }

  function Main_Function(n) {
    var x = document.getElementsByClassName("Card");
    for(var v = n-3; v>0;v--){
      x[v].style.display = "none";
    }
    for (var c = n-3; c <= n; c++) {
      x[c].style.display = "block";
    }
  }

  function Auto_RowScrool(){
  if(bolean == true){Main_Control(+1)}
    bolean=false
  setTimeout(Aux_Auto_RowScrool, 7000);

  }
  function Aux_Auto_RowScrool(){
  bolean=true;
  Auto_RowScrool()
  }
