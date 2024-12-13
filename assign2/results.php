<?php
$professions = ["doctor" => 0, "dentist" => 0, "pharmacist" => 0];

# Question 1
$workout_location = filter_input(INPUT_GET, 'workout_loc');
if (!is_null($workout_location))
{
    if ($workout_location == 'club')
    {
        $professions['dentist']++;
    }
    elseif ($workout_location == 'outside')
    {
        $professions['doctor']++;
    }
    elseif ($workout_location == 'none')
    {
        $professions['pharmacist']++;
    }
}

# Question 2
$activity_count = 0;

$actvities = filter_input(INPUT_GET, 'activities', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

if (!is_null($actvities))
{
    $activity_count = count($actvities);
    if ($activity_count >= 3)
    {
        $professions['dentist']++;
    }
    elseif ($activity_count == 2)
    {
        $professions['doctor']++;
    }
    else
    {
        $professions['pharmacist']++;
    }
}

# Question 3
$boy_name = filter_input(INPUT_GET, 'boy');
$boys_vowel_count = vowel_count($boy_name);
if (!is_null($boy_name))
{
    if ($boys_vowel_count >= 4)
    {
        $professions['pharmacist']++;
    }
    elseif ($boys_vowel_count >= 2)
    {
        $professions['dentist']++;
    }
    else
    {
        $professions['doctor']++;
    }
}

# Question 4
$girl_name = filter_input(INPUT_GET, 'girl');
$girls_vowel_count = vowel_count($girl_name);
if (!is_null($girl_name))
{
    if ($girls_vowel_count >= 4)
    {
        $professions['pharmacist']++;
    }
    elseif ($girls_vowel_count >= 2)
    {
        $professions['dentist']++;
    }
    else
    {
        $professions['doctor']++;
    }
}

# Question 5
$talents = filter_input(INPUT_GET, 'talents');
$talents_len = mb_strlen($talents, 'utf8');
if (!is_null($talents))
{
    if ($talents_len > 40)
    {
        $professions['pharmacist']++;
    }
    elseif ($talents_len >= 20)
    {
        $professions['dentist']++;
    }
    else
    {
        $professions['doctor']++;
    }
}

# Question 6
$task = filter_input(INPUT_GET, 'likely_task');
if (!is_null($task))
{
    if ($task == 'salon')
    {
        $professions['dentist']++;
    }
    elseif ($task == 'hgh')
    {
        $professions['pharmacist']++;
    }
    elseif ($task == 'stitch')
    {
        $professions['doctor']++;
    }
}

# Question 7
$shows = filter_input(INPUT_GET, 'tv_shows', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
$dr_show_count = 0;

if (!is_null($shows))
{
    $show_count = count($shows);
    if ($show_count > 4)
    {
        $professions['pharmacist']++;
    }
    else
    {
        if (in_array('house', $shows))
        {
            $dr_show_count++;
        }
        if (in_array('greys_anatomy', $shows))
        {
            $dr_show_count++;
        }
        if (in_array('chicago_hope', $shows))
        {
            $dr_show_count++;
        }
        if ($dr_show_count > 1) {
            $professions['doctor']++;
        }
        else {
            $professions['dentist']++;
        }
    }
}

function vowel_count($name)
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $vowel_count = 0;

    for ($i = 0; $i < strlen($name); $i++)
    {
        if (in_array($name[$i], $vowels))
        {
            $vowel_count++;
        }
    }

    return $vowel_count;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Test results</title>
</head>

<body>
    <h1>Carson's Personalities and Professions</h1>
    <div id="results">
        <h3>Our proprietary algorithm has uncovered the following:</h3>
        <h3>Results:<br />
            <span class='results_display'>
                <?php
                foreach ($professions as $key => $value)
                {
                    echo $key . ' = ' . $value . '<br/>';
                }
                ?>
            </span>
        </h3>
    </div>
</body>

</html>