<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax Table</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<input type="button" name="category_name" onclick="window.location='index_publication.php'" id="goto_publication" value="Publications">

<form>
    <table class="add">
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="text" name="category_name" id="input_name"></td>
        </tr>
        <tr>
            <td colspan="1">
                <div id="add_new_item" class="button">Add to Database</div>
            </td>
        </tr>
        </tbody>
    </table>
</form>
<table class="show">
    <thead>
    <tr>
        <th width="50px">#</th>
        <th width="400px">Name</th>
		<th>DEL</th>
    </tr>
    </thead>
    <tbody id="tbody">
        <tr><td class="load" colspan="3"><img src="load.gif"></td></tr>
    </tbody>
</table>

<script src="ajax_func.js"></script>
</body>
</html>
