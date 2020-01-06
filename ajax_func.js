$(document).ready(function () {
    get_table_items();

    $("#add_new_item").click(function () {
        add_new_item();
    });
});


function get_table_items() {
    $.getJSON("ajax_select.php", function (result) {
        $('#tbody').empty();
        $.each(result, function (i, field) {
            $('#tbody').append(
                '<tr param-id=' + (i+1) + '>' +
                '<td class="center">' + (i+1) + '</td>' +
                '<td id="input'+ field['id'] + 'category_name" contenteditable="true" onkeydown="save(' + field['id'] + ', \'category_name\');">' + field['category_name'] + '</td>' +
                '<td class="center">' +
                '<img class="del-icon" src="del_icon.png" onclick="delete_item('+ field['id'] +')">' +
                '</td>' +
                '</tr>'
            );
        });
    });
}

function add_new_item() {
    var category_name = $("#input_name").val();
    $.ajax({
        type: "POST",
        url: "ajax_insert.php",
        dataType: "json",
        data: {category_name: category_name}
    }).done(function (data) {
        $('#tbody').empty();
        get_table_items();
    }).fail(function () {
        alert('Fatal error');
    }).always(function () {
        $("#input_name").val('');
        });
}

function delete_item(id) {
    $.ajax({
        type: "POST",
        url: "ajax_delete.php",
        dataType: "json",
        data: {id: id}
    }).done(function (data) {
        $('#tbody').empty();
        get_table_items();
    }).fail(function () {
        alert('Fatal error');
    });
}

function update_item(col,value,id) {
    $.ajax({
        type: "POST",
        url: "ajax_update.php",
        dataType: "json",
        data: {col: col, value: value, id: id}
    }).done(function (data) {
        alert("Update success!")
    }).fail(function () {
        alert('Fatal error');
    });
}

function save(id,col) {
    if (event.keyCode == 13) {
        var selector = "#input" + id + col;

        $(selector).attr('contenteditable','false');

        var value = $(selector).html();

        update_item(col,value,id);
		
        $(selector).attr('contenteditable','true');
    }
}

