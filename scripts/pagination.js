let pageCount = 0;
let numPages = 0;
let current;
$(document).ready(function () {
    current = $("#page" + pageCount);
    let elements = $("#mainForm").children();
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
    console.log(pageCount);
};

function previousHandler() {
    current.addClass("hidden");
    pageCount = pageCount > 0 ? (pageCount - 1) % numPages : numPages - 1;
    current = $("#page" + pageCount);
    current.removeClass("hidden");
    console.log(pageCount);
};
 