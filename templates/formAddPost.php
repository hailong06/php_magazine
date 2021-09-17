<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddPost</title>
</head>
<body>
    <form action="?action=doAdd" method="POST">
        <table border="2" align="center">
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" placeholder="input your title"></td>
            </tr>
            <tr>
                <td>Content</td>
                <td><textarea type="text area" name="content" placeholder="input your Content"></textarea></td>
            </tr>
            <tr>
                <td>Time</td>
                <td><input type="datetime" name="time" placeholder="input your Time"></td>
            </tr>
            <tr>
                <td>Img</td>
                <td><input type="text" name="img" placeholder="input your Image"></td>
            </tr>
            <tr>
                <td>Tag</td>
                <td><input type="text" name="tag" placeholder="input your Tag"></td>
            </tr>
            <tr>
                <input type="submit" value="OK">
            </tr>
        </table>
    </form>
</body>
</html>