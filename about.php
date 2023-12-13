<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
</head>
<style>
    .container {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-between;
    }

    @media screen and (max-width: 991px) {
        .container {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: center;
        }

    }
</style>


<?
require "header.php"
?>
<p class="word-wrap text-center fs-1 mt-4 py-0 text-uppercase">наши сотрудники</p>
<div class="container px-0">
    <div class="card m-4" style="max-width: 340px;">
        <img src="/media/personal/fotoshef1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ГЕРШЕНОВИЧ ГРИГОРИЙ
                МАРКЕЛОВИЧ</h5>
            <p class="card-text">главный врач, врач-организатор,
                врач-психиатр высшей категории</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Телефон: (391) 246-25-98</li>
            <li class="list-group-item">Факс: (391) 246-25-98</li>
            <li class="list-group-item">Е-mail: kkpnd1@kraspsixo.ru</li>
        </ul>
    </div>


    <div class="card m-4" style="max-width: 340px;">
        <img src="/media/personal/jukovskaya1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ЖУКОВСКАЯ ГАЛИНА ПЕТРОВНА</h5>
            <p class="card-text">заместитель главного врача по лечебной работе,
                врач-психиатр высшей категории</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Телефон: (391) 246-25-98</li>
            <li class="list-group-item">Факс: (391) 246-25-98</li>
            <li class="list-group-item">Е-mail: kkpnd1@kraspsixo.ru</li>
        </ul>
    </div>


    <div class="card m-4" style="max-width: 340px;">
        <img src="/media/personal/potehina1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ПОТЕХИНА НАТАЛИЯ АРКАДЬЕВНА</h5>
            <p class="card-text">Главная медицинская сестра, менеджер в
                системе здравоохранения</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Телефон: (391) 246-25-98</li>
            <li class="list-group-item">Факс: (391) 246-25-98</li>
            <li class="list-group-item">Е-mail: kkpnd1@kraspsixo.ru</li>
        </ul>
    </div>


    <div class="card m-4" style="max-width: 340px;">
        <img src="/media/personal/katseval1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">КАЦЕВАЛ АЛЕКСАНДР ВАСИЛЬЕВИЧ</h5>
            <p class="card-text">заместитель главного врача по
                организационно–методической работе,
                врач-психиатр высшей категории</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Телефон: (391) 246-25-98</li>
            <li class="list-group-item">Факс: (391) 246-25-98</li>
            <li class="list-group-item">Е-mail: kkpnd1@kraspsixo.ru</li>
        </ul>
    </div>


    <div class="card m-4" style="max-width: 340px;">
        <img src="/media/personal/davidova1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ДАВЫДОВА МАРИНА ВИКТОРОВНА</h5>
            <p class="card-text">заместитель главного врача по
                амбулаторно-поликлинической работе,
                врач-психиатр высшей категории</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Телефон: (391) 246-25-98</li>
            <li class="list-group-item">Факс: (391) 246-25-98</li>
            <li class="list-group-item">Е-mail: kkpnd1@kraspsixo.ru</li>
        </ul>
    </div>


    <div class="card m-4" style="max-width: 340px;">
        <img src="/media/personal/petrov1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ПЕТРОВ АНАТОЛИЙ СТАНИСЛАВОВИЧ</h5>
            <p class="card-text">заместитель главного врача по
                судебно-психиатрической экспертизе</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Телефон: (391) 246-25-98</li>
            <li class="list-group-item">Факс: (391) 246-25-98</li>
            <li class="list-group-item">Е-mail: kkpnd1@kraspsixo.ru</li>
        </ul>
    </div>
</div>
<?
require "footer.php"
?>
</body>

</html>