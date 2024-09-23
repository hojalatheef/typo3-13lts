let elementsToToggle = [
    [".frame-collapsemobile", "(max-width: 800px)"],
    [".frame-collapse", null],
    [".accordion", null]
];

$(document).ready(function() {
    $.each(elementsToToggle, function(index, element) {
        $(element[0]).children("div,ul").addClass("togglecontent");
        $(element[0]).find("header").on("click", null, element, toggleOnClick);

        if (element[1]) {
            let matchMedia = window.matchMedia(element[1]);
            handleToggleOnResize(matchMedia);
            matchMedia.addListener(handleToggleOnResize);
        }
    });
});

function toggleOnClick(event)
{
    if (event.data[1] && !window.matchMedia(event.data[1]).matches) {
        return;
    }

    let $toggleContent = $(this).next(".togglecontent");

    if ($toggleContent.hasClass("open")) {
        $toggleContent.slideUp("slow").removeClass("open");
        $(this).removeClass("open");
    } else {
        $toggleContent.slideDown("slow").addClass("open");
        $(this).addClass("open");
    }
}

function handleToggleOnResize(matchMedia)
{
    if (!matchMedia.matches) {
        $.each(elementsToToggle, function(index, element) {
            if (element[1]) {
                let $element = $(element[0]).find("header");
                let $toggleContent = $element.siblings(".togglecontent");
                $toggleContent.slideDown("slow").addClass("open");
            }
        });
    } else {
        $.each(elementsToToggle, function(index, element) {
            if (element[1]) {
                let $element = $(element[0]).find("header");
                let $toggleContent = $element.siblings(".togglecontent");
                $toggleContent.slideUp("slow").removeClass("open");
            }
        });
    }
}
