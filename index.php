<?php 
    $data = array( 
        "first" => array( 
            "question" => "Вы пришли в морской университет, а значит первое задание о морской истории и кораблях. 
Отыщите в мраморном зале \"Святого\", который пошел по воде в 1694 году в Архангельске и напишите его имя (5 букв). Подсказка: это не человек.", 
            "answer" => "павел", 
            "message" => "Найдите на стене за макетом судна qr-код для продолжения игры."), 
        "second" => array( 
            "question" => "Вы, конечно же, знаете, что с древних времен люди старались сохранить тайну переписки. Автором самого известного шифра древности является древнеримский государственный и политический деятель, полководец, писатель Гай Юлий Цезарь. 
Кратко суть шифра: для шифрования все буквы алфавита смещаются на несколько позиций вправо. Число этих позиций называют ключом шифра. А для расшифровки выполняют обратную операцию. Все просто! 
Расшифруйте слово ТЩНКП с помощью шифра Цезаря с ключом, равным числу букв в первом ответе, и узнайте куда двигаться дальше.", 
            "question_hint" => "second_image.jpg", 
            "answer" => "музей", 
            "message" => "В нашем вузе есть музей, загляните в него, там много интересного. А на самом большом винте аккуратно ищите следующий qr-код."), 
        "third" => array( 
            "question" => "Глобальная сеть — это любая сеть связи, которая охватывает всю Землю. 
Вспомните значок глобальной сети Интернет. Что на нем изображено помните? В нашем университете есть такой же. 
Расшифруйте по кодовой таблице ответ на этот вопрос и отправляйтесь в путешествие. 
131 139 142 129 149 145", 
            "question_hint" => "third_hint.jpg", 
            "answer" => "глобус", 
            "message" => "Если выйти из музея, повернуть налево и пройти в глубь здания, можно увидеть наш прекрасный глобус. Ищите следующий код рядом с Антананариву. (можете погуглить где это)"), 
        "fourth" => array( 
            "question" => "Одно из главных сражений, прославивших ЕГО, – битва в Синопской бухте. ОН сумел уничтожить противника, несмотря на то, что располагал вдвое меньшими силами, чем неприятель. При этом ОН не потерял ни одного корабля. Найдите его среди равных ему.", 
            "answer" => "нахимов", 
            "message" => "В мраморном зале есть скульптурное изображение адмирала, рядом следующий код."), 
        "fifth" => array( 
            "question" => "В ГМУ имени адмирала Ф.Ф. Ушакова имеется множество равных по значимости кафедр и только одна из них выделяется среди всего многообразия, тем что готовит специалистов для профессий будущего. Используя азбуку Морзе переведите данный шифр и найдите нас. 
• — •     • • — • •     • •     —", 
            "question_hint" => "question_hint.jpg", 
            "answer" => "рэит", 
            "message" => "Найдите выставку кафедры РЭИТ, которая готовит самых востребованных специалистов на современном рынке. У нас можно поиграть с тем, что делают наши студенты.") 
    );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ГМУ - Найти it</title>
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
    if($('#answer').val().toLowerCase() == "<?= $data[$_GET['level']]['answer'] ?>") {
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
        <a href="http://www.aumsu.ru/" style="height: 64px; width: 64px; float: left; z-index: 1;"><img src="aumsu.png" style="height: 64px; width: 64px; float: left; z-index: 1;"></a>
        <a class="brand-logo w-75 text-center position-absolute" style="height: 64px; line-height: 64px; top: 0; left: 0; transform: initial; margin: 0 12.5%">ГМУ - Найти IT</a>
        <a href="https://vk.com/reiit" style="height: 64px; width: 64px; float: right; z-index: 1;"><img src="rait.jpg" style="height: 64px; width: 64px; float: right; z-index: 1;"></a>
    </div>
</nav>


<?php if($_GET['level'] == 'first') { ?>
<div class="card container mx-auto p-0">
    <h2 class="display-4 text-center">Добро пожаловать в игру! Пройдите квест до конца и поделитесь с нами своими впечатлениями. Удачи!</h2>
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
            /*var regexp = /^[А-Яа-яЁё]+$/i;
            if(!regexp.test($('input').val())) {
                e.preventDefault();
                return false;
            } else {
                return true;
            }*/
            var key = e.charCode || e.keyCode || 0;
            // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
            // home, end, period, and numpad decimal
            return (key != 32);
        });
});
</script>
</body>
</html>