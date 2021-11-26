<?php
$data = array(
    "first" => array(
        "question" => "Произведение писателя Гранин, где главным героям не прививали с детства милосердие, за что они испытывали трудности на протяжении истории рассказа.",
        "answer" => "милосердие",
        "message" => "Найдите QR код на обложке этого произведение."),
    "second" => array(
        "question" => "Произведение Тургенева наглядно показывающее важность взаимопонимания между родителями и детьми.",
        "answer" => "отцы и дети",
        "message" => "Найдите QR код на обложке этого произведение."),
    "third" => array(
        "question" => "Произведение Шолохова в котором главный герой не смотря на все потери в своей жизни, включая утрату родной семьи, оставался добрым и героическим человеком, продолжавшим защищать свою родину в период войны, а затем взял на воспитание маленького мальчика, который также лишился своей семьи.",
        "answer" => "судьба человека",
        "message" => "Найдите QR код на обложке этого произведение."),
    "fourth" => array(
        "question" => "Произведение Лермонтова, где главный герой показывает на себе множество пороков человеческого общества, неоднократно поступая крайне плохо, но в конечном итоге в результате разных событий понимает свои ошибки и в конечном итоге исправляется.",
        "answer" => "герой нашего времени",
        "message" => "Найдите QR код на обложке этого произведение."),
    "fifth" => array(
        "question" => "Произведение Гоголя в котором и на примере главного героя можно увидеть нехорошее преступление в виде обмана государства и на примере тех помещиков, с которыми он пересекается, можно увидеть множество людских пороков. Книга наглядно показывает с разных сторон, как поступать не хорошо и не следует.",
        "answer" => "мертвые души",
        "message" => "Поздравляю, вы познакомились с множеством прекрасных произведений, каждое из которых наглядно показывает хорошие и плохие поступки людей, виспитывает своих читателей нравственно и помогает им развиваться в лучшую сторону!")
);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Квест "Воспитай себя"</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style type="text/css">
        .waves-effect.waves-blue .waves-ripple {
            background-color: #1565C099;
        }
    </style>
    <script type="text/javascript">
        function Answer() {
            $('.alert').removeClass('in');
            $('.alert').removeClass('alert-success');
            $('.alert').removeClass('alert-warning');
            if($('#answer').val().toLowerCase() === "<?= $data[$_GET['level']]['answer'] ?>") {
                $('.alert').addClass('alert-success');
                $('.alert').text('Правильный ответ!');
                $('.alert').addClass('in');

                var elem = document.getElementById('modal_answer');
                var instance = M.Modal.getInstance(elem);
                instance.open();
            } else {
                $('.alert').addClass('alert-warning');
                $('.alert').text('Не верно, попробуйте еще раз.');
                $('.alert').addClass('in');
            }
        }
    </script>
</head>

<body>

<nav class="blue darken-3" style="height: 64px;">
    <div class="nav-wrapper" style="height: 64px;">
        <a class="brand-logo w-75 text-center position-absolute" style="height: 64px; line-height: 64px; top: 0; left: 0; transform: initial; margin: 0 12.5%">Квест "Воспитай себя"</a>
    </div>
</nav>


<?php if($_GET['level'] == 'first') { ?>
    <div class="card container mx-auto p-0">
        <h2 class="display-5 text-center">Добро пожаловать в игру! Пройдите квест до конца и поделитесь с нами своими впечатлениями. Удачи!</h2>
    </div>
<?php } ?>

<div class="card container mx-auto p-0">
    <?php if(!!$data[$_GET['level']]['question_hint']) { ?>
        <div class="card-image">
            <img class="materialboxed" src="<?= $data[$_GET['level']]['question_hint'] ?>">
        </div>
    <?php } ?>
    <div class="card-content">
        <p style="white-space: pre-wrap;"><?= $data[$_GET['level']]['question'] ?></p>
    </div>
    <div class="card-action">
        <div class="input-field p-0">
            <input id="answer" type="text" class="validate" pattern="^[А-Яа-яЁё\s]+$" data-length="<?= (strlen($data[$_GET['level']]['answer']) / 2) ?>">
            <label for="answer" style="font-weight: 400;">Ответ</label>
        </div>
        <button class="waves-effect waves-blue btn-flat" onclick="Answer();">Отправить<i class="material-icons right">send</i></button>
        <div class="alert show fade my-1" role="alert">
            Правильный ответ!
        </div>
    </div>
</div>

<div id="modal_answer" class="modal" style="bottom: initial;">
    <div class="modal-content border-0">
        <h4 class="text-success">Правильный ответ</h4>
        <p><?= $data[$_GET['level']]['message'] ?></p>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('input').characterCounter();
        $('.modal').modal();
        $('.materialboxed').materialbox();

        $("input").keyup(function(event) {
            if(event.keyCode==13) {
                Answer();
            }
        });

        $('input').keydown(function(e)
        {
            var key = e.charCode || e.keyCode || 0;
            return (key !== 32);
        });
    });
</script>
</body>
</html>
