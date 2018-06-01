<!doctype html>
<html >
    <head>
        
        <title>Laravel</title>

       
    </head>
    <body>
        <form>
            <label>title</label>
            <input type="text" name="title">
            <label>completed</label>
            <input type="text" name="completed">
            <label>priority</label>
            <input type="text" name="priority">
            <label>user_id</label>
            <input type="text" name="user_id">
            
            <input type="submit" name="submit" value="add">
        </form>


        <ul>
            @foreach($data as $clan)
                <li>
                    {{ $clan->title}}
                </li>
                <li>
                    {{ $clan->completed}}
                </li>
            @endforeach
        </ul>


    </body>
</html>