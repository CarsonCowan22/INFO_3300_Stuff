<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Carson's Personalities and Professions</title>
</head>

<body>
    <h1>Welcome to Carson's Personalities and Professions</h1>
    <h3>Answer the following questions and our system will match you to a profession.</h3>
    <div id="questionnaire">
        <form action="results.php" method="get">
            <ol>
                <li>Where do you prefer to workout?</li>
                <input value="club" type="radio" name="workout_loc" /> The country club
                <input value="outside" type="radio" name="workout_loc" /> Outside
                <input value="none" type="radio" name="workout_loc" /> I would rather eat potato chips than workout
                <br>
                <br>
                <li>Check all of the recreation activities you want to pursue in your life?</li>
                <input type="checkbox" name="activities[]" value="wake"> Wake surfing<br>
                <input type="checkbox" name="activities[]" value="snow"> Snowmobiling<br>
                <input type="checkbox" name="activities[]" value="read"> Reading <br>
                <input type="checkbox" name="activities[]" value="hiking"> Extreme Hiking <br>
                <input type="checkbox" name="activities[]" value="travel"> Visiting foreign countries <br>
                <input type="checkbox" name="activities[]" value="motorcycle"> Motorcyle tours of the US
                <br>
                <br>
                <li>Type your favorite boys name.</li>
                <input type="text" name="boy" id="boy">
                <br>
                <br>
                <li>Type your favorite girls name.</li>
                <input type="text" name="girl" id="girl">
                <br>
                <br>
                <li>Describe one of your talents.</li>
                <textarea name="talents" cols="30" rows="8"></textarea>
                <br>
                <br>
                <li>Which of the following are you most liekly to do?</li>
                <select name="likely_task">
                    <option value="salon">Go to a tanning salon</option>
                    <option value="hgh">Take a human growth hormone (HGH)</option>
                    <option value="stitch">Stitch up your own finger</option>
                </select>
                <br>
                <br>
                <li>Select all of the TV shows you like.</li>
                <select name="tv_shows[]" size="9" multiple>
                    <option value="house">House</option>
                    <option value="breaking_bad">Breaking Bad</option>
                    <option value="housewives_of_beverly_hills">Housewives of Beverly Hills</option>
                    <option value="greys_anatomy">Grey's Anatomy</option>
                    <option value="ncis">NCIS</option>
                    <option value="csi_new_york">CSI: New York</option>
                    <option value="chicago_hope">Chicago Hope</option>
                    <option value="the_bachelor">The Bachelor</option>
                    <option value="survivor">Survivor</option>
                </select>
                <br>
                <br>
                <input type="submit" value="submit">
            </ol>
        </form>
    </div>
</body>

</html>