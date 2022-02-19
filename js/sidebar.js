
function openNav() {
  
    document.getElementById("sidenav").classList.add("sidenav-mobile-open");
    menu.innerHTML = "&times;";
    menu.style.fontSize = "xx-large" ;
    document.getElementById("menu").onclick = closeNav;  
    
  }
  
  function closeNav() {
    document.getElementById("sidenav").classList.remove("sidenav-mobile-open");
    menu.innerHTML = "&#9776;";
    menu.style.fontSize = "20pt" ;
    document.getElementById("menu").onclick = openNav; 
    
  }

  window.addEventListener("resize",() =>{
    if(document.body.clientWidth > 800){
      document.getElementById("sidenav").classList.remove("sidenav-mobile-open");
      menu.innerHTML = "&#9776;";
      document.getElementById("menu").onclick = openNav; 
    }
    // if(document.body.clientWidth <= 800){

    // }
  });

  function addMobileMenuBtn(elementName,isCssClass){

    isCssClass = isCssClass != true ? false : true;
    elementName = elementName == null || elementName == "" ? "mobile-menu-btn": elementName;

    let parent;
    let mobileMenuBtn = document.createElement('span');
    mobileMenuBtn.id = "menu";
    mobileMenuBtn.innerHTML = "&#9776;";
    mobileMenuBtn.onclick = function() {openNav('55%');};


    if(isCssClass){
      parent = document.getElementsByClassName(elementName)[0];
    }
    else if (parent == null){

      parent = document.getElementById(elementName);

    }else if(parent == null){
      parent = document.createElement('div');
    }

    parent.appendChild(mobileMenuBtn);
    parent.style.display = "inline-block";
      
  }


  function addLinks(links) {

    let sublinks = links.filter(function(link){

      return link["isSublink"] == true;
    });

    let topLevelLinks = links.filter(function(link){

      return link["isSublink"] != true;
    });

    addSublinks(sublinks);
    addTopLevelLinks(topLevelLinks);
  }

  function addSublinks(links) {

    for(var i = 0; i < links.length; i++){

      var link = links[i];

      var parentLink = document.getElementById(link["parentLinkId"]);

      if(parentLink == null) {
        console.error("There is no parent link with the id '" + link["parentLinkId"] + "' for '" + link["label"] + "'");
      }

      if(parentLink.lastChild.tagName == "UL") {
        
        var ul = parentLink.lastChild;
        
      } else {
        
        var ul = document.createElement("ul");
        var isNewUL = true;
      }

      var a = document.createElement("a");
      a.setAttribute("href", link["href"]);
      a.innerHTML = link["label"];

      var li = document.createElement("li");
      li.appendChild(a);
      ul.appendChild(li);

      if(isNewUL) parentLink.appendChild(ul);
    }
  }


  function addTopLevelLinks(links) {

    var sidebarLinks = document.getElementById("sidebar-links");

    for(var i = 0; i < links.length; i++){

      var li = document.createElement("li");
      li.classList.add("side-menu-item");

      var a = document.createElement("a");
      a.setAttribute("href", links[i]["href"]);

      a.innerHTML = links[i]["label"];

      li.appendChild(a);

      console.log(li);
    
      sidebarLinks.appendChild(li);
    }
  }



  window.onload = function(){
    addMobileMenuBtn();

    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
      });
    };
  }