<?php
$frukter = ["äpple", "banan", "päron"];
echo $frukter[0];
echo "<br>";

$elev = ["name" => "Stina", "age" => 18];
echo $elev["name"];
echo "<br>";

foreach ($elev as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

$elever = [
    ["name" => "Stina", "age" => 18],
    ["name" => "Pelle", "age" => 17],
    ["name" => "Sara", "age" => 18],
    ["name" => "Ali", "age" => 19],
    ["name" => "Emma", "age" => 17]
];

echo "<ul>";
foreach ($elever as $e) {
    echo "<li>" . $e["name"] . ", " . $e["age"] . " år</li>";
}
echo "</ul>";

$students = [
    [
        "name" => "Stina",
        "age" => 18,
        "courses" => [
            "programming" => "A",
            "webdevelopment" => "C"
        ]
    ],
    [
        "name" => "Pelle",
        "age" => 17,
        "courses" => [
            "programming" => "B",
            "webdevelopment" => "A"
        ]
    ]
];

echo $students[0]["courses"]["programming"];
echo "<br>";

echo "<table border='1'>";
echo "<tr><th>Namn</th><th>Kurs</th><th>Betyg</th></tr>";
foreach ($students as $s) {
    echo "<tr>";
    echo "<td>" . $s["name"] . "</td>";
    echo "<td>webdevelopment</td>";
    echo "<td>" . $s["courses"]["webdevelopment"] . "</td>";
    echo "</tr>";
}
echo "</table>";