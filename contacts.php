<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>наши филиалы</title>
</head>
<style>
    #first {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        flex-wrap: wrap;
    }

    @media screen and (max-width: 1191px) {
        #first {
            display: flex;
            justify-content: center;
            flex-direction: row;
            flex-wrap: wrap;
        }

    }

    #card {
        margin-right: 20px;
        margin-left: 20px;
    }

    #img {
        object-fit: cover;
        height: 100%;
    }
</style>
<? require "header.php" ?>
<p class="word-wrap text-center fs-1 mt-4 py-0 text-uppercase">наши филиалы</p>

<div class="first" id="first">

    <div class="card my-4" id="card" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="media/filialy/kansk1.jpeg" id="img" class="img-fluid rounded" alt="Card title">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="bold fs-4">Филиал №1</p>
                    <p class="card-text fs-6">Понедельник-пятница: с 8:00 до 16:00.<br>
                        Суббота, воскресенье: выходной</p>
                    <p class="card-text fs-6">г. Канск, ул. Революции, 37</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card my-4" id="card" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="media/filialy/les1.jpeg" id="img" class="img-fluid rounded" alt="Card title">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="bold fs-4">Филиал №2</p>
                    <p class="card-text fs-6">Понедельник-пятница: с 8:00 до 16:00.<br>
                        Суббота, воскресенье: выходной</p>
                    <p class="card-text fs-6">г. Лесосибирск, ул. Громовой, 24</p>
                </div>
            </div>
        </div>
    </div>



    <div class="card my-4" id="card" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="media/filialy/minus1.jpeg" id="img" class="img-fluid rounded" alt="Card title">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="bold fs-4">Филиал №3</p>
                    <p class="card-text fs-6">Понедельник-пятница: с 8:00 до 16:00.<br>
                        Суббота, воскресенье: выходной</p>
                    <p class="card-text fs-6">г. Минусинск, ул. Советская, 39В</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card my-4" id="card" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="media/filialy/ach1.jpeg" id="img" class="img-fluid rounded" alt="Card title">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <p class="bold fs-4">Филиал №4</p>
                    <p class="card-text fs-6">Понедельник-пятница: с 8:00 до 16:00.<br>
                        Суббота, воскресенье: выходной</p>
                    <p class="card-text fs-6">г.Ачинск, ул.Гагарина, 6</p>
                </div>
            </div>
        </div>
    </div>
</div>

<? require "footer.php" ?>