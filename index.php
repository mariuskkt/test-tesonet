<?php

class Date_count
{
    /**
     * @param $input_date date which comes to $_POST after user fills input correctly and submits the form
     * @return string
     */
    public function DateDifference($input_date)
    {
        $user_birthday = date_create($input_date);
        $today_date = date_create(date('Y-m-d'));
        $difference = date_diff($today_date, $user_birthday);
        $years_text = 'You are ' . $difference->y . ' years ' . $difference->m . ' months and ' . $difference->d . ' days old';

        return $years_text;
    }
}

if ($_POST['date']) {
    $date_count = new Date_count();
    $text = $date_count->DateDifference($_POST['date']);
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Year count from Your birth date</title>
</head>
<body>
<h1>
    Type in your birthdate:
</h1>
<form action="index.php" method="post">
    <label>
        <span>Date:</span>
        <input name="date" type="date" required>
    </label>
    <button type="submit"> Let's count your age!</button>
</form>
<h2><?php print $text ?></h2>
</body>
</html>