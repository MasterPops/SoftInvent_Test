<!DOCTYPE html>
<html>
    <head>
        <title>SoftInvent - Заявки</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-top: 15%">
                <?php
                    foreach ($reqs as $req) 
                    {
                        echo '<div class="col-8 mt-5">';
                            echo '<div class="card"">';
                                echo '<div class="row">';
                                    echo '<div class="col-5">';
                                        echo '<img src="'; echo $req->photo; echo '" class="card-img-top">';
                                    echo '</div>';
                                    echo '<div class="col-7">';
                                        echo '<div class="card-body">';
                                            echo '<h5 class="card-title">';
                                                echo $req->name;
                                            echo '</h5>';
                                            echo '<p class="card-text">';
                                                echo $req->comment;;
                                            echo '</p>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>