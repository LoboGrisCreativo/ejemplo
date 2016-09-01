$(document).ready(function() {

    // Botones que añaden equipos

    $('#Del').attr('disabled','disabled');
    $('#Add').click(function(e) {
        e.preventDefault();
        var num = $('.teams').length; // how many "duplicatable" input fields we currently have
        var newNum = new Number(num + 1); // the numeric ID of the new input field being added

        // create the new element via clone(), and manipulate it's ID using newNum value
        var newElem = $('#team' + num).clone().attr('id', 'team' + newNum);

        // manipulate the name/id values of the input inside the new element
        newElem.children(':last').attr('id', 'name' + newNum).attr('name', 'name' + newNum);

        // insert the new element after the last "duplicatable" input field
        $('#team' + num).after(newElem);

        // enable the "remove" button
        $('#Del').attr('disabled',false);
    });

    $('#Del').click(function(e) {
        e.preventDefault();
        var num = $('.teams').length; // how many "duplicatable" input fields we currently have
        $('#team' + num).remove(); // remove the last element

        // if only one element remains, disable the "remove" button
        if (num-1 == 1)
            $('#Del').attr('disabled','disabled');
    });


    // Botones para añadir temporadas a las estadísticas

    $('#DelEsta').attr('disabled','disabled');
    $('#AddEsta').click(function(e) {
        e.preventDefault();
        var num = $('.esta').length; // how many "duplicatable" input fields we currently have
        var newNum = new Number(num + 1); // the numeric ID of the new input field being added

        // create the new element via clone(), and manipulate it's ID using newNum value
        var newElem = $('#esta' + num).clone().attr('id', 'esta' + newNum);

        // manipulate the name/id values of the input inside the new element
        newElem.children(':last').attr('id', 'name' + newNum).attr('name', 'name' + newNum);

        // insert the new element after the last "duplicatable" input field
        $('#esta' + num).after(newElem);

        // enable the "remove" button
        $('#DelEsta').attr('disabled',false);
    });

    $('#DelEsta').click(function(e) {
        e.preventDefault();
        var num = $('.esta').length; // how many "duplicatable" input fields we currently have
        $('#esta' + num).remove(); // remove the last element

        // if only one element remains, disable the "remove" button
        if (num-1 == 1)
            $('#DelEsta').attr('disabled','disabled');
    });

});