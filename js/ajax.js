
//FUNÇÃO DE NOTIFICAÇÃO
//INICIO
$(document).ready(function()
{
  $("#notificationLink").click(function()
  {
    $("#notificationContainer").fadeToggle(300);
    $("#notification_count").fadeOut("slow");
    return false;
  });

//Document Click
$(document).click(function()
{
  $("#notificationContainer").hide();
});
//Popup Click
$("#notificationContainer").click(function()
{
  return false
});

});
//FIM

/*login*/
  //INICIO
  $(document).ready(function()
  {
    $("#LoginLink").click(function()
    {
      $("#LoginContainer").fadeToggle(300);
      return false;
    });
//Document Click
$(document).click(function()
{
  $("#LoginContainer").hide();
});
//Popup Click
$("#LoginBody").click(function()
{
  return false;
});

$("#bt").click(function()
{
  return true;
});
});
//FIM

//ADICIONAR VALOR NO INPUT DO PALPITE
//INICIO
function id( el ){
  return document.getElementById( el );
}
function menos( id_qnt,id_img ) 
{
  var qnt = parseInt( id( id_qnt ).value );
  if( qnt > 0 ){
    id( id_qnt ).value = qnt - 1; 
    if ( id( id_qnt ).value == 0) {
     document.getElementById(id_img).src = "images/setas/baixo.png"
   }
 }
} 
function mais( id_qnt,id_img )
{
  id( id_qnt ).value = parseInt( id( id_qnt ).value ) + 1; 
  document.getElementById(id_img).src = "images/setas/seta_baixo.png"
} 
//FIM

//CHAMAR ABA DE INFORMAÇÃO
//INICIO
function informacao(id,id_sub,pros_id,pros_id_sub){
  classe = document.getElementById(id).className; 
  if(classe == 'info'){
    document.getElementById(id).className = 'info_encond';
    document.getElementById(id_sub).className = 'esconder';
    document.getElementById(pros_id).className = 'info';
    document.getElementById(pros_id_sub).className = 'aparecer';
  }else{
    document.getElementById(id).className = 'info_encond';
    document.getElementById(id_sub).className = 'esconder';
  }
}
//FIM

