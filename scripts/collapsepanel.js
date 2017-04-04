(function(){
  var elements = document.getElementsByClassName('collapsepanel');

  for(var i = 0; i < elements.length; i++){
    elements[i].addEventListener('click', toggleCollapsePanelShown, false);
  }
})();

function toggleCollapsePanelShown(e){
  var parent = e.target.parentNode;

  parent.classList.toggle("is-open");
}
