(function(){
  var
    searchIcon = document.getElementById('search-icon'),
    searchInput = document.getElementById('search-input')
  ;

  searchIcon.addEventListener("click", function(e){
    searchInput.classList.toggle("is-hidden");
    searchInput.focus();
  }, false);
})();

(function(){
  var
    navToggle = document.getElementById("nav-toggle"),
    navPrimary = document.getElementById("nav-primary")
  ;

  navToggle.addEventListener("click", function(e){
    navPrimary.classList.toggle("is-hidden")
  }, false);
})();