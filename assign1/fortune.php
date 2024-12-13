<?php
$relationships_array[] = "Love will find you when you least expect it.";
$relationships_array[] = "A long-lost friend will rekindle your heart.";
$relationships_array[] = "Communication is the key to strengthening your bond.";
$relationships_array[] = "Patience will bring harmony to your relationship.";
$relationships_array[] = "A new connection will blossom into something special.";
$relationships_array[] = "Trust your instincts when it comes to matters of the heart.";
$relationships_array[] = "An honest conversation will clear up misunderstandings.";
$relationships_array[] = "Romance is in the air; embrace the moment.";
$relationships_array[] = "A surprise gesture will deepen your relationship.";
$relationships_array[] = "Your relationship will grow stronger through shared experiences.";

$money_array[] = "A financial opportunity will present itself soon.";
$money_array[] = "Wise investments will lead to prosperity.";
$money_array[] = "Saving today will bring rewards tomorrow.";
$money_array[] = "Unexpected expenses will be balanced by unexpected income.";
$money_array[] = "A small risk will pay off in a big way.";
$money_array[] = "Your hard work will soon lead to a financial breakthrough.";
$money_array[] = "Generosity will bring financial blessings in return.";
$money_array[] = "A careful budget will help you achieve your goals.";
$money_array[] = "A windfall is on the horizon; stay prepared.";
$money_array[] = "Your financial wisdom will inspire others.";

$fame_array[] = "Recognition for your talents is just around the corner.";
$fame_array[] = "Your name will soon be on everyone's lips.";
$fame_array[] = "A public appearance will boost your popularity.";
$fame_array[] = "Fame will come, but stay grounded to handle it well.";
$fame_array[] = "Your unique skills will attract a lot of attention.";
$fame_array[] = "An unexpected event will thrust you into the spotlight.";
$fame_array[] = "Your achievements will be celebrated by many.";
$fame_array[] = "Fame will bring new opportunities; be ready to seize them.";
$fame_array[] = "A viral moment will propel you into the limelight.";
$fame_array[] = "Your hard work will be rewarded with widespread acclaim.";

$relationships_random = random_int(0, count($relationships_array) - 1);
$money_random = random_int(0, count($money_array) - 1);
$fame_random = random_int(0, count($fame_array) - 1);

$lucky_number = random_int(0, 100);

$relationships_fortune = $relationships_array[$relationships_random];
$money_fortune = $money_array[$money_random];
$fame_fortune = $fame_array[$fame_random];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dial a Fortune</title>
</head>

<body> by Carson Cowan
    <h1><?php echo $relationships_fortune ?></h1>
    <h1><?php echo $money_fortune ?></h1>
    <h1><?php echo $fame_fortune ?></h1>
    <h1>Lucky Number</h1>
    <?php
    for ($i = 0; $i <= $lucky_number; $i++)
    {
        echo $i . ' ';
    }
    ?>
</body>

</html>