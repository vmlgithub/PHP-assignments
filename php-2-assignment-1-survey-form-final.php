<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with Form Data and Session</title>
    <style>
    .container{
        text-align: center;
        font-family: Comic Sans MS, Comic Sans, cursive;
    }    
    form{
        display: inline-block;        
        width: 300px;
        padding: 20px;  
        text-align: left;       
        border: 1px solid black;
        margin-top: 20px;      
    }
    input, select, option, textarea{
        float: right;
    }
    option:first-child{
        display: none;
    }    
    .new_line{
        float: right;
        margin-left: 250px;        
    }    
    </style>    
</head>

<body>
    <div class="container">
        <form action='submitted.php' method='post'>
            <p><label class="name">Your Name: <input type="text" name="firstname" id="firstname"></label></p>
            <p><label>Dojo Location: </label>
                <select name="location" id="location">
                    <option value="empty">Choose</option>
                    <option value="Mountain View">Mountain View</option>
                    <option value="Seattle, WA">Seattle, WA</option>
                </select>
            </p>
            <p><label>Favorite Language: </label>
                <select name="language" id="language">
                    <option value="empty">Choose</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="Node">Node</option>
                </select>
            </p>
            <p><label>Comment (optional):</label><textarea name="comment" id="comment" rows="4"></textarea></p>
            
            <div class="new_line">
                <p><input type="submit" value="submit"></p>
            </div>
        </form>
    </div>           
</body>
</html>