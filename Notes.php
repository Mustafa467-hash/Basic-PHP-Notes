<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Notes Of PHP Basics</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans p-6">

    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 space-y-6">
        <h1 class="text-4xl font-bold text-center text-blue-600 mb-4">Notes of basics of PHP</h1>
        <h2 class="text-2xl font-semibold text-blue-500 mb-2 border-b pb-1">Date of learning: 2nd of June 2025  </h2>

        <section>
            <h2 class="text-2xl font-semibold text-blue-500 mb-2 border-b pb-1">Variable & Types</h2>
            <div class="bg-gray-50 p-4 rounded border">
                <?php
                    $nam = "Ahmed";
                    $num1 = -2234;
                    $num2 = 2.234;
                    $bol = true;
                    $arr = ["Ali", 2134, true, 234.34];

                    echo var_dump($nam) . "<br>";
                    echo var_dump($num1) . "<br>";
                    echo var_dump(value: $num2) . "<br>";
                    echo var_dump($bol) . "<br>";
                    echo var_dump($arr) . "<br>";
                ?>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-500 mb-2 border-b pb-1">Arithmetic Operators</h2>
            <div class="bg-gray-50 p-4 rounded border">
                <?php
                    $x = 4;
                    $y = 8;

                    echo "The Sum of two num is: " . ($x + $y) . "<br>";
                    echo "The Sub of two num is: " . ($x - $y) . "<br>";
                    echo "The Mult of two num is: " . ($x * $y) . "<br>";
                    echo "The Divide of two num is: " . ($x / $y) . "<br>";
                    echo "The Power of two num is: " . ($x ** $y) . "<br>";
                    echo "The Modulus of two num is: " . ($x % $y) . "<br>";
                ?>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-500 mb-2 border-b pb-1">Switch Case</h2>
            <div class="bg-gray-50 p-4 rounded border">
                <?php
                    $favClr = "Red";

                    switch ($favClr) {
                        case "Red":
                            echo "Your Favourite is Red.";
                            break;
                        case "Green":
                            echo "Your Favourite is Green.";
                            break;
                        case "Blue":
                            echo "Your Favourite is Blue.";
                            break;
                        default:
                            echo "No Favourite Color.";
                            break;
                    }
                ?>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-500 mb-2 border-b pb-1">Array</h2>
            <div class="bg-gray-50 p-4 rounded border">
                <?php 
                    $stdData = array("Ali", "Mustafa", "Aslam", "Ahmed", "Hamid");
                    foreach ($stdData as $V) {
                        echo $V . "<br>";
                    }
                ?>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-500 mb-2 border-b pb-1">Associative Array</h2>
            <div class="bg-gray-50 p-4 rounded border">
                <?php
                    $stdInfo = array("name" => "Ali", "age" => 23, "city" => "Karachi");
                    foreach ($stdInfo as $k => $va) {
                        echo "$k = $va <br>";
                    }
                ?>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-500 mb-2 border-b pb-1">Function</h2>
            <div class="bg-gray-50 p-4 rounded border">
                <?php
                    function sum($x, $y) {
                        $num1 = $x;
                        $num2 = $y;
                        return $num1 + $num2;
                    }
                    
                    $funValue = sum(4, 6);
                    echo $funValue;
                ?>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-semibold text-blue-500 mb-2 border-b pb-1">Table</h2>
            <div class="bg-gray-50 p-4 rounded border">
                <?php
                    function tableGen($n) {
                        $tableOf = $n;
                        for ($i = 1; $i < 11; $i++) {
                            echo "$tableOf x $i = " . ($tableOf * $i) . "<br>";
                        }
                    }
                    tableGen(102);
                ?>
            </div>
        </section>

    </div>

</body>
</html>
