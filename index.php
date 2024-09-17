<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Массивы в php</title>
</head>

<body>


    <div class="tasks">
        <div class="one-block">
            <h1>1 задание</h1>
            <?
            $array = ['Иванов', 'Сидоров', 'Сандакова', 'Безвинная', 'Игнатова', 'Кириллова', 'Волков'];
            foreach ($array as $element) {
                echo $element;
                echo '</br>';
            }

            

            echo '<p>Количество студентов:' .count($array) . '</p>';
            
            echo '</br>';

            if (in_array('Сидоров', $array)) {
                echo 'Да, Сидоров есть в списке';
                echo '</br>';
            } else {
                echo 'В списке такой фамилии нет';
                echo '</br>';
            }

            $explead = array_pop($array);

            echo '</br>';

            foreach ($array as $elements) {
                echo $elements;
                echo '</br>';
            }

            ?>
        </div>

        <div class="two-block">
            <h1>2 задание</h1>

            <?
            $clubs = [
                'Спортивный' => 'Сидоров',
                'Художественный' => 'Емелина',
                'Музыкальный' => 'Иванова',
                'Литературный' => 'Петров',
                'Биологический' => 'Антонова'
            ];

            asort($clubs);

            foreach ($clubs as $club => $surname) {
                echo "$club - $surname\n";
                echo '</br>';
                echo '</br>';
            }
            ?>

        </div>

        <div class="three-block">
            <h1>3 задание</h1>

            <?
            $arrayMe = [
                'name' => ['Имя' => 'Катя'],
                'surname' => ['Фамилия' => 'Сандакова'],
                'group' => ['Группа' => '425 ВЕБ'],
                'hobbies' => ['Хобби' => 'Рисование, смотреть фильмы и сериалы'],
                'social' => ['instagram' => 'ssnypii', 'telegram' => 'ssnypii']
            ];

            foreach ($arrayMe as $title => $items) {
                foreach ($items as $key => $value) {
                    echo "<p>$key : $value</p>";
                }
            }

            ?>

        </div>
    </div>
</body>

</html>