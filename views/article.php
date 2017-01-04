<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <title>Блог для задания</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        </head>
    <body>
        <div class="container">
            <h1>Блог для задания</h1>
            <div>
                <div class="article">
                    <h3><?=$article['title']?></h3>
                    <em>Создано <?=$article['data_created']?></em>
                    <em>Изменено <?=$article['data_updated']?></em>
                    <p><?=$article['content']?></p>    
                </div>
                </div>
            </div>
                <footer>
            <p>Блог для задания<br>Copyright&copy;2017</p></footer>
            </body>
</html>