<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax Table</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<input type="button" name="publication_name" onclick="window.location='index.php'" id="goto_category" value="Categories">
<form>
    <table class="add">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
			<th>Body</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="text" name="title" id="input_title"></td>
            <td><input type="text" name="description" id="input_description"></td>
            <td><input type="text" name="body" id="input_body"></td>
            <input type="hidden" name="date" id="input_date" value="11-04-2019">
        </tr>
        <tr>
            <td colspan="3">
                <div id="add_new_item_publication" class="button">Add to Database</div>
            </td>
        </tr>
        </tbody>
    </table>
</form>
<table class="show">
    <thead>
    <tr>
        <th width="25px">#</th>
        <th width="250px">Title</th>
        <th width="200px">Description</th>
        <th width="150px">Body</th>
		<th width="150px">Date</th>
        <th>DEL</th>
    </tr>
    </thead>
    <tbody id="tbody_publication">
        <tr><td class="load" colspan="6"><img src="load.gif"></td></tr>
    </tbody>
</table> 

<script src="ajax_func_publication.js"></script>
</body>
</html>
