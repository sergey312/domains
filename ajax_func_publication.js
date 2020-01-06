$(document).ready(function () {
    get_table_items_publication();

    $("#add_new_item_publication").click(function () {
        add_new_item_publication();
    });
});


function get_table_items_publication() {
    $.getJSON("ajax_select_publication.php", function (result) {
        $('#tbody_publication').empty();
        $.each(result, function (i, field) {
            $('#tbody_publication').append(
                '<tr param-id=' + (i+1) + '>' +
                '<td class="center">' + (i+1) + '</td>' +
                '<td id="input'+ field['publication_id'] + 'publication_title" contenteditable="true" onkeydown="save(' + field['publication_id'] + ', \'publication_title\');">' + field['publication_title'] + '</td>' +
                '<td id="input'+ field['publication_id'] + 'publication_description" contenteditable="true" onkeydown="save(' + field['publication_id'] + ', \'publication_description\');">' + field['publication_description'] + '</td>' +
                '<td id="input'+ field['publication_id'] + 'publication_body" contenteditable="true" onkeydown="save(' + field['publication_id'] + ', \'publication_body\');">' + field['publication_body'] + '</td>' +
                '<td id="input'+ field['publication_id'] + 'publication_date" contenteditable="true"  onkeydown="save(' + field['publication_id'] + ', \'publication_date\');">' + '11-04-2019' + '</td>' +
				'<td class="center">' +
                '<img class="del-icon" src="del_icon.png" onclick="delete_item_publication('+ field['publication_id'] +')">' +
                '</td>' +
                '</tr>'
            );
        });
    });
}

function add_new_item_publication() {
    var publication_title = $("#input_title").val();
	var publication_description = $("#input_description").val();
	var publication_body = $("#input_body").val();
	var publication_date = $("#input_date").val();
    $.ajax({
        type: "POST",
        url: "ajax_insert_publication.php",
        dataType: "json",
        data: {publication_title: publication_title, publication_description: publication_description, publication_body: publication_body, publication_date: publication_date}
    }).done(function (data) {
        $('#tbody_publication').empty();
        get_table_items_publication();
    }).fail(function () {
        alert('Fatal error');
    }).always(function () {
        $("#input_title").val('');
		$("#input_description").val('');
		$("#input_body").val('');
        $("#input_date").val('');
        });
}

function delete_item_publication(id) {
    $.ajax({
        type: "POST",
        url: "ajax_delete_publication.php",
        dataType: "json",
        data: {id: id}
    }).done(function (data) {
        $('#tbody_publication').empty();
        get_table_items_publication();
    }).fail(function () {
        alert('Fatal error');
    });
}

function update_item_publication(col,value,id) {
    $.ajax({
        type: "POST",
        url: "ajax_update_publication.php",
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

        update_item_publication(col,value,id);

        $(selector).attr('contenteditable','true');
    }
}

