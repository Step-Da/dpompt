<?php $host = 'localhost'; $user = 'root';$password = ''; $dataBaseName = 'dpompt_database';
 $link = mysqli_connect($host, $user, $password, $dataBaseName );?>
<!DOCTYPE html>
<div class="line layout">
    <div class="content">
        <div class="data-content">
           <div class="form-group">
              <label id="user-label">Авторизуйтесь на сайте, чтобы записаться на курс.</label>
            </div>
            <form id="radio-form" method="POST">
                <div class="form-group">
                    <label for="">Каталог образовательных курсов</label>
                    <button id="button-map" type="button" class="btn btn-warning" data-toggle="button" aria-pressed="false" autocomplete="off">
                        Карта
                    </button>
                    <button id="button-table" type="button" class="btn btn-warning" data-toggle="button" aria-pressed="false" autocomplete="off">
                        Таблица
                    </button>
                </div>
            </form>
            <div class="form-group">
                <div class="form-group">

                    <table id="table-catalog-programmer" class="table">
                        <tr>
                            <th>Наименование курса</th>
                            <th>Дата начала</th>
                            <th>Дата конца</th>
                            <th>Описание</th>
                            <th>Переподователь</th>
                            <th>Почта</th>
                        </tr>
                        <?php
                            $querySelectCatalog = "SELECT * FROM `item_catalog` WHERE `range` = 1";
                            $dataResult = mysqli_query($link, $querySelectCatalog);
                            while($row = mysqli_fetch_array($dataResult)){
                                if ($row['start_date'] == date('Y-m-d')){
                                    echo('<input id="mail-data" class="hide" value="'.$row['start_date'].'">');
                                }
                                echo('<tr>'); echo('<td>'.'<a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">'.$row['name_courses'].'</td>'.'</a>');
                                echo('<td>'.$row['start_date'].'</td>');
                                echo('<td>'.$row['end_date'].'</td>');
                                echo('<td>'.$row['description'].'</td>');
                                echo('<td>'.$row['teacher'].'</td>');
                                echo('<td>'.$row['email'].'</td>');echo('</tr>');
                            }?>
                    </table>
                    
                    <table id="table-catalog-exams" class="table">
                        <tr>
                            <th>Наименование курса</th>
                            <th>Дата начала</th>
                            <th>Дата конца</th>
                            <th>Описание</th>
                            <th>Переподователь</th>
                            <th>Почта</th>
                        </tr>
                        <?php
                            $querySelectCatalog = "SELECT * FROM `item_catalog` WHERE `range` = 2";
                            $dataResult = mysqli_query($link, $querySelectCatalog);
                            while($row = mysqli_fetch_array($dataResult)){
                                if ($row['start_date'] == date('Y-m-d')){
                                    echo('<input id="mail-data" class="hide" value="'.$row['start_date'].'">');
                                }
                                echo('<tr>'); echo('<td>'.'<a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">'.$row['name_courses'].'</td>'.'</a>');
                                echo('<td>'.$row['start_date'].'</td>');
                                echo('<td>'.$row['end_date'].'</td>');
                                echo('<td>'.$row['description'].'</td>');
                                echo('<td>'.$row['teacher'].'</td>');
                                echo('<td>'.$row['email'].'</td>');echo('</tr>');
                            }?>
                    </table>

                    <table id="table-catalog-general" class="table">
                        <tr>
                            <th>Наименование курса</th>
                            <th>Дата начала</th>
                            <th>Дата конца</th>
                            <th>Описание</th>
                            <th>Переподователь</th>
                            <th>Почта</th>
                        </tr>
                        <?php
                            $querySelectCatalog = "SELECT * FROM `item_catalog` WHERE `range` = 3";
                            $dataResult = mysqli_query($link, $querySelectCatalog);
                            while($row = mysqli_fetch_array($dataResult)){
                                if ($row['start_date'] == date('Y-m-d')){
                                    echo('<input id="mail-data" class="hide" value="'.$row['start_date'].'">');
                                }
                                echo('<tr>'); echo('<td>'.'<a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">'.$row['name_courses'].'</td>'.'</a>');
                                echo('<td>'.$row['start_date'].'</td>');
                                echo('<td>'.$row['end_date'].'</td>');
                                echo('<td>'.$row['description'].'</td>');
                                echo('<td>'.$row['teacher'].'</td>');
                                echo('<td>'.$row['email'].'</td>');echo('</tr>');
                            }?>
                    </table>
                </div>
            </div>

            <table id="table-map-catalog-programm" class="table map-catalog">
                <tr>
                    <td>
                        <div id='listener-courses-programmer'>
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                    <div class="col-md-10">
                                        <div class="row space-16">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-15">
                                                    <div class="thumbnail">
                                                        <div class="caption text-center">
                                                            <div class="position-relative">
                                                                <img src="image/web.png" class="cardImageCatalog" />
                                                            </div>
                                                            <h4 id="thumbnail-label"><a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">FrontEnd разработка и дизайн</a></h4>
                                                            <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Лихачёв Лазарь Богданович</p>
                                                            <div class="thumbnail-description smaller">Проектирование и разработка веб-ресурсов</div>
                                                        </div>
                                                        <div class="caption card-footer text-center">
                                                        <ul class="list-inline">
                                                        <li><i class="people lighter"></i>&nbsp;38.600 руб</li>
                                                        <li></li>
                                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;lihac@gmail.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-2">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div id='listener-courses-programmer'>
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                    <div class="col-md-10">
                                        <div class="row space-16">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-15">
                                                    <div class="thumbnail">
                                                        <div class="caption text-center">
                                                            <div class="position-relative">
                                                                <img src="image/android.png" class="cardImageCatalog" />
                                                            </div>
                                                            <h4 id="thumbnail-label"><a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">Разработка мобильных приложений</a></h4>
                                                            <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Панов Мартын Германнович</p>
                                                            <div class="thumbnail-description smaller">Обучающий курс для разработки на Android</div>
                                                        </div>
                                                        <div class="caption card-footer text-center">
                                                        <ul class="list-inline">
                                                        <li><i class="people lighter"></i>&nbsp;38.600 руб</li>
                                                        <li></li>
                                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;aibarra@gmail.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-2">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div id='listener-courses-programmer'>
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                    <div class="col-md-10">
                                        <div class="row space-16">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-15">
                                                    <div class="thumbnail">
                                                        <div class="caption text-center">
                                                            <div class="position-relative">
                                                                <img src="image/visual.png" class="cardImageCatalog" />
                                                            </div>
                                                            <h4 id="thumbnail-label"><a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">Программирование на платформе .NET</a></h4>
                                                            <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Лазарев Мстислав Григорьевич</p>
                                                            <div class="thumbnail-description smaller">Разработка настольных приложений на C#</div>
                                                        </div>
                                                        <div class="caption card-footer text-center">
                                                        <ul class="list-inline">
                                                        <li><i class="people lighter"></i>&nbsp;38.600 руб</li>
                                                        <li></li>
                                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;ladinah399@gmail.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-2">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table id="table-map-catalog-exams" class="table map-catalog">
                <tr>
                    <td>
                        <div id='listener-courses-exams'>
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                    <div class="col-md-10">
                                        <div class="row space-16">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-15">
                                                    <div class="thumbnail">
                                                        <div class="caption text-center">
                                                            <div class="position-relative">
                                                                <img src="image/maths.png" class="cardImageCatalog" />
                                                            </div>
                                                            <h4 id="thumbnail-label"><a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">Алгебра и Геометрия</a></h4>
                                                            <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Круглова Анастасия Казимировна</p>
                                                            <div class="thumbnail-description smaller">Подготовка к экзамену по математике <br>(Алгебра | Геометрия | Статистика)</div>
                                                        </div>
                                                        <div class="caption card-footer text-center">
                                                        <ul class="list-inline">
                                                        <li><i class="people lighter"></i>&nbsp;38.600 руб</li>
                                                        <li></li>
                                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;lihac@gmail.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-2">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div id='listener-courses-exams'>
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                    <div class="col-md-10">
                                        <div class="row space-16">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-15">
                                                    <div class="thumbnail">
                                                        <div class="caption text-center">
                                                            <div class="position-relative">
                                                                <img src="image/russian.png" class="cardImageCatalog" />
                                                            </div>
                                                            <h4 id="thumbnail-label"><a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">Изучение Русского языка</a></h4>
                                                            <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Фотина Лилия Елизаровна</p>
                                                            <div class="thumbnail-description smaller">Подготовка к экзамену по Русскому языку</div>
                                                        </div>
                                                        <div class="caption card-footer text-center">
                                                        <ul class="list-inline">
                                                        <li><i class="people lighter"></i>&nbsp;38.600 руб</li>
                                                        <li></li>
                                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;fotina@gmail.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-2">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div id='listener-courses-exams'>
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                    <div class="col-md-10">
                                        <div class="row space-16">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-15">
                                                    <div class="thumbnail">
                                                        <div class="caption text-center">
                                                            <div class="position-relative">
                                                                <img src="image/english.png" class="cardImageCatalog" />
                                                            </div>
                                                            <h4 id="thumbnail-label"><a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">Изучение Английского языка</a></h4>
                                                            <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Сутулина Полина Мироновна</p>
                                                            <div class="thumbnail-description smaller">Подготовка к экзамену по Английскому языку</div>
                                                        </div>
                                                        <div class="caption card-footer text-center">
                                                        <ul class="list-inline">
                                                        <li><i class="people lighter"></i>&nbsp;38.600 руб</li>
                                                        <li></li>
                                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;sutulina@gamil.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-2">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table id="table-map-catalog-general" class="table map-catalog">
                <tr>
                    <td>
                        <div id='listener-courses-exams'>
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                    <div class="col-md-10">
                                        <div class="row space-16">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-10">
                                                    <div class="thumbnail">
                                                        <div class="caption text-center">
                                                            <div class="position-relative">
                                                                <img src="image/operator.png" class="secondImageCatalog"/>
                                                            </div>
                                                            <h4 id="thumbnail-label"><a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">Оператор ЭВМ</a></h4>
                                                            <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Коровин Аркадий Пахомович</p>
                                                            <div class="thumbnail-description smaller">Подготовка оператора ЭВМ 3-го разряда</div>
                                                        </div>
                                                        <div class="caption card-footer text-center">
                                                        <ul class="list-inline">
                                                        <li><i class="people lighter"></i>&nbsp;38.600 руб</li>
                                                        <li></li>
                                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;covrin@gmail.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-2">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div id='listener-courses-exams'>
                            <div class="row">
                                <div class="col-md-1">&nbsp;</div>
                                    <div class="col-md-10">
                                        <div class="row space-10">&nbsp;</div>
                                            <div class="row">
                                                <div class="col-sm-15">
                                                    <div class="thumbnail">
                                                        <div class="caption text-center">
                                                            <div class="position-relative">
                                                                <img src="image/documentation.png" class="cardImageCatalog" />
                                                            </div>
                                                            <h4 id="thumbnail-label"><a id="sigin-link" class="sign" href="#modal-sigin-up" data-toggle="modal" target="_blank">Изучение технической документации</a></h4>
                                                            <p><i class="glyphicon glyphicon-user light-red lighter bigger-120"></i>&nbsp;Эсце Василиса Потаповна</p>
                                                            <div class="thumbnail-description smaller">Изучение ЕСПД. Приектирование и составление<br> технической документации</div>
                                                        </div>
                                                        <div class="caption card-footer text-center">
                                                        <ul class="list-inline">
                                                        <li><i class="people lighter"></i>&nbsp;38.600 руб</li>
                                                        <li></li>
                                                        <li><i class="glyphicon glyphicon-envelope lighter"></i><a href="#">&nbsp;esce@gmail.com</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="col-md-2">&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal-sigin-up">
           <div class="modal-dialog">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title">Купить курс</h4>
               </div>
               <form method="POST" id="buy-form">
                   <div class="modal-body">
                       <div class="form-group">
                            <label>Номер кредитной карты</label>
                            <input id="card-number" type="text" class="form-control" require name="number-card" placeholder="000-000-000-000">
                       </div>
                        <div class="row">
                            <div class="col-sm-9">
                                    <div class="row">
                                    <div class="col-8 col-sm-6">
                                        <label>Срок действия</label>
                                        <input type="date" class="form-control" require name="exp-data">
                                    </div>
                                    <div class="col-4 col-sm-6">
                                        <label>СVC/CVV</label>
                                        <input id='cvv-cvc' type="password" maxlength="3" require class="form-control" require name="ccv-code" placeholder="* * *" >
                                    </div>
                            </div>
                          </div>
                        </div>
                       <div class="from-group">
                          <label for="">Владелец</label>
                          <input type="text" class="form-control" required placeholder="Введите данные как на вышей банковсоко карте">
                       </div>   
                   </div>
                   <div class="modal-footer">
                     <button type="button" id="button-buy-clouse" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                     <button type="button" id="button-buy" class="btn btn-success">Купить</button>
                   </div>
               </form>
             </div>
           </div>
    </div>


    <script type="text/javascript">
        var opening = 750;
        var closing = 1300;

        $(document).ready(function(){
            $('#card-number').mask("9999-9999-9999-9999", {placeholder: " "});
            $('#table-catalog-programmer').hide();
            $('#table-catalog-general').hide();
            $('#table-catalog-exams').hide();
            $('#table-map-catalog-exams').hide();
            $('#table-map-catalog-general').hide();
            $('#mail-data').hide();
            dateСheck();
        });


        $('#button-map').click(function(){
            $('#table-catalog-programmer').fadeOut(closing);
            setTimeout(function(){
                $('#table-map-catalog-programm').fadeIn(opening);
            },2000)
        });

        $('#button-table').click(function(){
            $('#table-map-catalog-exams').fadeOut(closing);
            $('#table-map-catalog-general').fadeOut(closing);
            $('#table-map-catalog-programm').fadeOut(closing);
            setTimeout(function(){
                $('#table-catalog-programmer').fadeIn(opening);
            },2000) 
        });

        var event;
        $('.sign').click(function(){
           alert(this.innerHTML);
           event = this.innerHTML;
        });

        $('#button-buy').click(function(){
            console.log(event);
            setTimeout(function(){
              $.ajax({
              url: 'mail/buyMail.php',
              method: 'POST',
              data: {                     
                user: document.getElementById('mirrorUsers').value,
                curse: event
              }
            }).done(function(data){
              console.log(data);
            });
            setTimeout(function(){
                $('#button-clouse').trigger('click');
              });
            }, 2000);
        });

        function dateСheck(){
            try{
                var today = new Date().toLocaleDateString(); 
                var date = document.getElementById('mail-data').value;
                console.log(date);
                if(date != today){
                    $.ajax({
                        url:'mail/dateMailing.php',
                        method:'POST',
                        data:{
                            date:date
                        }
                    });
                }
            }
            catch{} 
        };

    </script>