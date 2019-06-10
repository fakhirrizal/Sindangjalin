// Dynamic Rowspan
var dynamicRowspan = document.querySelectorAll('.dynamic-rowspan');
dynamicRowspan.forEach(function(elem, i){
    var manyTr = elem.parentNode.parentNode.querySelectorAll("tr").length;
    elem.setAttribute('rowspan', manyTr);
});