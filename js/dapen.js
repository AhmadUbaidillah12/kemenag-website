var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
coll[i].addEventListener("click", function() {
this.classList.toggle("active");
var content = this.nextElementSibling;
if (content.style.display === "block") {
content.style.display = "none";
} else {
content.style.display = "block";
var subColl = document.getElementsByClassName("sub-content");
var j;
for (j = 0; j < subColl.length; j++) {
subColl[j].style.display = "none";
}
}
});
}

var subColl = document.getElementsByClassName("sub-collapsible");
var j;

for (j = 0; j < subColl.length; j++) {
subColl[j].addEventListener("click", function() {
this.classList.toggle("active");
var subContent = this.nextElementSibling;
if (subContent.style.display === "block") {
subContent.style.display = "none";
} else {
subContent.style.display = "block";
}
});
}