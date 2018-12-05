//Load this file in the page were we have need

skillsManager = window.skillsManager || {};

while ($ === undefined && JQuery === undefined) {
    //TODO : make it better for Jquery wait
}

$.getJSON( "Json/Links.json", function( data ) {
    skillsManager.links = data;
});

$.getJSON( "Json/Projects.json", function( data ) {
    skillsManager.projects = data;
});
