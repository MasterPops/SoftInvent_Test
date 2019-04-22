<!DOCTYPE html>
<html>
    <head>
        <title>SoftInvent</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-around" style="margin-top: 15%">
                <div class="col-4">
                    <form method="GET" action="/apps">
                        <button class="btn btn-primary btn-block btn-lg" type="submit">Получить приложения</button>
                        <select class="form-control mt-2" name="platform">
                            <?php
                                foreach ($platforms as $platform) 
                                {
                                    echo '<option value="';
                                    echo $platform->id;
                                    echo'">';
                                    echo $platform->platform_name;
                                    echo '</option>';
                                }
                            ?>
                        </select>
                    </form>
                </div>
                <div class="col-4">
                    <form method="GET" action="/requests">
                        <button type="submit" class="btn btn-success btn-block btn-lg" >Заявки</button>
                        <label class="mt-2">От</label>
                        <input class="form-control mt-2" type="datetime-local" name="since">
                        <label class="mt-2">До</label>
                        <input class="form-control mt-2" type="datetime-local" name="due">
                    </form>
                </div>
            </div>
            <div class="row justify-content-around" style="margin-top: 5%">
                <div class="col-4">
                    <form method="POST" action="/apps" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <button class="btn btn-warning btn-block btn-lg" type="submit">Добавить приложение</button>
                        <input type="text" class="form-control mt-2" name="title" placeholder="Название">
                        <label class="mt-2">Выберите платформу</label>
                        <select class="form-control mt-2" name="platform">
                            <?php
                                foreach ($platforms as $platform) 
                                {
                                    echo '<option value="';
                                    echo $platform->id;
                                    echo'">';
                                    echo $platform->platform_name;
                                    echo '</option>';
                                }
                            ?>
                        </select>
                        <label class="mt-2">Иконка приложения</label>
                        <input type="file" class="mt-2" name="icon">
                        <input type="text" class="form-control mt-2" name="link" placeholder="Ссылка на приложение в Store">
                    </form>
                </div>
                <div class="col-4">
                    <form method="POST" action="/requests" enctype="multipart/form-data">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}">
                        <button class="btn btn-info btn-block btn-lg" type="submit">Создать заявку</button>
                        <input type="text" class="form-control mt-2" name="name" placeholder="Имя">
                        <div class="form-group mt-5">
                            <textarea class="form-control" id="text" rows="3" name="comment" placeholder="Описание"></textarea>
                        </div>
                        <label class="mt-2">Прикрепить изображение</label>
                        <input type="file" class="mt-2" name="photo">
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
