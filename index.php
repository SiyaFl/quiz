<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel= "stylesheet" type="text/css" href="css/style.css">
    <title>Quiz</title>
  </head>
  <body>

    <!--PHP-->
<?php 

$Questions =     array(
            1 => array(
                'Question' => '1.Below are a couple of greetings, some of which you may have heard before. Which one is typically South African?',
                'Answers' => array(
                'A' => 'Howzit',
                'B' => 'G.day',
                'C' => 'Alright',
                'D' => 'Ciao'

            ),
            'CorrectAnswer' => 'A'
    ),
            2 => array(
                'Question' => '2.If you were in Cape Town, South Africa and one of the locals invite you to a braai, which of the following would you be more likely to take with you?',
                'Answers' => array(
                'A' => 'Sports gear/equipment',
                'B' => 'Suntan lotion and a towel',
                'C' => 'Warm clothes',
                'D' => 'Boerewors and Castle'
            ),
            'CorrectAnswer' => 'D'
            ),
            3 => array(
                    'Question' => '3.If a South African says to you "Lekker tekkies bru!", what does that mean?',
                    'Answers' => array(
                    'A' => 'I have a massive headache!',
                    'B' => 'Why the long face?',
                    'C' => 'Nice running shoes man!',
                    'D' => 'Pass me the salt'

                ),
                'CorrectAnswer' => 'C'
            ),
            4 => array(
                    'Question' => '4.If you were told in South Africa "a couple of skelms have just scaled that bakkie", what would you have been told?',
                    'Answers' => array(
                    'A' => 'Two fellows chopped that tree down',
                    'B' => 'A few thieves have stolen a pick-up truck',
                    'C' => 'Some climbers managed to reach the summit',
                    'D' => 'The surveyours measured the building site'

                ),
                'CorrectAnswer' => 'B'
            ),  
            5 => array(
                    'Question' => '5.South Africans sometimes say "I have a heavy babbie, I need to crash!" What does it mean?
                    ',
                    'Answers' => array(
                    'A' => 'I am really tired, I want to sit down',
                    'B' => 'I have got a massive hangover, I need some sleep',
                    'C' => 'This is too much work for me, I am going home',
                    'D' => 'This is a massive load, give me a hand'

                ),
                'CorrectAnswer' => 'B'
            ),
            6 => array(
                    'Question' => '6.When a Saffa tells you he/she will do something "just now" or "now now", they generally mean to do it when?',
                    'Answers' => array(
                    'A' => 'Immediately',
                    'B' => 'A.S.A.P',
                    'C' => 'Tomorrow',
                    'D' => 'In a minute'

                ),
                'CorrectAnswer' => 'D'
            ),
            7 => array(
                    'Question' => '7.Translate the South African sentence into real English: "This other oke skipped the red robot"',
                    'Answers' => array(
                    'A' => 'He jumped over a scarlet android',
                    'B' => 'Someone else missed the last train',
                    'C' => 'The man left out the important bit',
                    'D' => 'The man drove through the red traffic lights'

                ),
                'CorrectAnswer' => 'D'
            ),
            8 => array(
                    'Question' => '8. When in Pretoria (Capital of South Africa) and you find yourself on the wrong side of the tracks and are being told "Do not charf my cherry, I will buckle your frame China!", what are you being told?',
                    'Answers' => array(
                    'A' => 'Do not look at my dessert, yours is coming!',
                    'B' => 'Take me home, I am your dream girl!',
                    'C' => 'Stop using my pool cue, use your own!',
                    'D' => 'Leave my girl alone, I will smash your head in son!'

                ),
                'CorrectAnswer' => 'D'
            ),
            9 => array(
                    'Question' => '9."Chips" in South Africa means/refers to',
                    'Answers' => array(
                    'A' => 'Look out! [A warning]',
                    'B' => 'Potato crisps',
                    'C' => 'Fries',
                    'D' => 'None of the above'

                ),
                'CorrectAnswer' => 'C'
            ),
            10 => array(
                    'Question' => '10.If you say "ag shame," what are you likely saying in South Africa?',
                    'Answers' => array(
                    'A' => 'Oh Cute!',
                    'B' => 'How awful',
                    'C' => 'No way!',
                    'D' => 'Nice'

                ),
                'CorrectAnswer' => 'A'
            ),
            11 => array(
                    'Question' => '11.What does "lekka chow" mean?',
                    'Answers' => array(
                    'A' => 'Stale meal',
                    'B' => 'Bad meal',
                    'C' => 'Good meal',
                    'D' => 'None of the above'

                ),
                'CorrectAnswer' => 'C'
            ),
            12 => array(
                    'Question' => '12.What is a "boer?"',
                    'Answers' => array(
                    'A' => 'A Fisherman',
                    'B' => 'A famer',
                    'C' => 'A salesman ',
                    'D' => 'A Barman'

                ),
                'CorrectAnswer' => 'B'
            ),
            13 => array(
                    'Question' => '13."Jawelnofine" is an expression of...',
                    'Answers' => array(
                    'A' => 'resignation',
                    'B' => 'indignation',
                    'C' => 'respect',
                    'D' => 'all of the above'

                ),
                'CorrectAnswer' => 'A'
            ),
            14 => array(
                    'Question' => '14.What does "fundi" refers to',
                    'Answers' => array(
                    'A' => 'An expert',
                    'B' => 'A type of a candy',
                    'C' => 'A bar',
                    'D' => 'Beer'

                ),
                'CorrectAnswer' => 'A'
            ),
            15 => array(
                    'Question' => '15.What does "loskop" refer to',
                    'Answers' => array(
                    'A' => 'Someone who is selfish or greedy',
                    'B' => 'Someone who is lost then found',
                    'C' => 'Someone who is clumsy or forgetful',
                    'D' => 'Someone who is lazy'

                ),
                'CorrectAnswer' => 'C'
            ),
            16 => array(
                    'Question' => '16.What is mealie',
                    'Answers' => array(
                    'A' => 'Dog food',
                    'B' => 'Corn on the cob',
                    'C' => 'Breakfast',
                    'D' => 'Wheat'

                ),
                'CorrectAnswer' => 'B'
            ),
            17 => array(
                    'Question' => '17.Which of the following refer to a party or fun activity',
                    'Answers' => array(
                    'A' => 'Jol',
                    'B' => 'Sangoma',
                    'C' => 'Jova',
                    'D' => 'Kasi'

                ),
                'CorrectAnswer' => 'A'
            ),
            18 => array(
                    'Question' => '18.Which of the follwing refer to medication',
                    'Answers' => array(
                    'A' => 'Hoezit',
                    'B' => 'Muti',
                    'C' => 'Rooibos',
                    'D' => 'Doppie'

                ),
                'CorrectAnswer' => 'B'
            ),
            19 => array(
                    'Question' => '19.Which of the following refer to insect',
                    'Answers' => array(
                    'A' => 'Bushveld',
                    'B' => 'Tsotsi',
                    'C' => 'Gogga',
                    'D' => 'None of the above'

                ),
                'CorrectAnswer' => 'C'
            ),
            20 => array(
                    'Question' => '20."Just sommer"mean:',
                    'Answers' => array(
                    'A' => 'Just before',
                    'B' => 'Just because',
                    'C' => 'Just now',
                    'D' => 'None of the above'

                ),
                'CorrectAnswers' => 'B'
            )
                        
);

if (isset($_POST['answers'])){
    $Answers = $_POST['answers']; // Get submitted answers.

    // Now this is fun, automated question checking! ;)
    $counter = 0;
    foreach ($Questions as $QuestionNo => $Value){
       
    // Echo the question
        echo $Value['Question'].'<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer'])
        {
             echo 'You answered: <span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; 
    // Replace style with a class        
             echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span>';
        } else {
            echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>';
    // Replace style with a class 
            echo 'You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; 
            $counter++;
        }

        echo '<br /><hr>'; 
                                if ($counter=="0") 
                                { 
                                $results = "Your score: $counter/20"; 
                                }
                                else 
                                { 
                                $results = "Your score: $counter/20"; 
                                }
            }                           echo $results;
 
                                if ($counter < 10) 
                                {
                                    echo "Opps! Low points, Please try again!";
                                }
                                if ($counter >= 10)
                                {
                                    echo "Avarage points, Try header!";
                                }
                                if ($counter >15)
                                {
                                    echo "Well done!";
                                }
                            }      
else
{  
?>
  <div class= "container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
        <?php foreach ($Questions as $QuestionNo => $Value){ ?>

            <h3><?php echo $Value['Question']; ?></h3>
            <?php 
            foreach ($Value['Answers'] as $Letter => $Answer){ 
                $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
                 ?>
            <div class="form">
                <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
                <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
            
            <?php } ?>

        <?php } ?>
        <input type="submit" value="View Results" href="questions.php"/>
        </form>
    <?php 
    }
    ?>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>