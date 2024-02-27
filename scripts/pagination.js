let pageCount = 0;
let numPages = 0;
let current;
$(document).ready(function () {
    alert("Document is ready sir!");
    current = $("#page" + pageCount);
    let elements = $("#mainForm").children()[0];
    console.log(elements);
    numPages = elements.length;
    //hide everything
    elements.addClass("hidden");
    current.removeClass("hidden");

});

function nextHandler() {
    current.addClass("hidden");
    pageCount = (pageCount + 1) % numPages;
    current = $("#page" + pageCount);
    current.removeClass("hidden");
};

function previousHandler() {
    current.addClass("hidden");
    pageCount = pageCount > 0 ? (pageCount - 1) % numPages : numPages - 1;
    current = $("#page" + pageCount);
    current.removeClass("hidden");
};
 