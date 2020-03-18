
<?php
/***************************************
Written by: Immanuel Flepu (Siya)
Github: https://github.com/SiyaFl

***************************************/
?>


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

$my_var =     array(
            1 => array(
                'potso' => '1.Below are a couple of greetings, some of which you may have heard before. Which one is typically South African?',
                'karabo' => array(
                'A' => 'Howzit',
                'B' => 'G.day',
                'C' => 'Alright',
                'D' => 'Ciao'

            ),
            'dikarabo' => 'A'
    ),
            2 => array(
                'potso' => '2.If you were in Cape Town, South Africa and one of the locals invite you to a braai, which of the following would you be more likely to take with you?',
                'karabo' => array(
                'A' => 'Sports gear/equipment',
                'B' => 'Suntan lotion and a towel',
                'C' => 'Warm clothes',
                'D' => 'Boerewors and Castle'
            ),
            'dikarabo' => 'D'
            ),
            3 => array(
                    'potso' => '3.If a South African says to you "Lekker tekkies bru!", what does that mean?',
                    'karabo' => array(
                    'A' => 'I have a massive headache!',
                    'B' => 'Why the long face?',
                    'C' => 'Nice running shoes man!',
                    'D' => 'Pass me the salt'

                ),
                'dikarabo' => 'C'
            ),
            4 => array(
                    'potso' => '4.If you were told in South Africa "a couple of skelms have just scaled that bakkie", what would you have been told?',
                    'karabo' => array(
                    'A' => 'Two fellows chopped that tree down',
                    'B' => 'A few thieves have stolen a pick-up truck',
                    'C' => 'Some climbers managed to reach the summit',
                    'D' => 'The surveyours measured the building site'

                ),
                'dikarabo' => 'B'
            ),  
            5 => array(
                    'potso' => '5.South Africans sometimes say "I have a heavy babbie, I need to crash!" What does it mean?
                    ',
                    'karabo' => array(
                    'A' => 'I am really tired, I want to sit down',
                    'B' => 'I have got a massive hangover, I need some sleep',
                    'C' => 'This is too much work for me, I am going home',
                    'D' => 'This is a massive load, give me a hand'

                ),
                'dikarabo' => 'B'
            ),
            6 => array(
                    'potso' => '6.When a Saffa tells you he/she will do something "just now" or "now now", they generally mean to do it when?',
                    'karabo' => array(
                    'A' => 'Immediately',
                    'B' => 'A.S.A.P',
                    'C' => 'Tomorrow',
                    'D' => 'In a minute'

                ),
                'dikarabo' => 'D'
            ),
            7 => array(
                    'potso' => '7.Translate the South African sentence into real English: "This other oke skipped the red robot"',
                    'karabo' => array(
                    'A' => 'He jumped over a scarlet android',
                    'B' => 'Someone else missed the last train',
                    'C' => 'The man left out the important bit',
                    'D' => 'The man drove through the red traffic lights'

                ),
                'dikarabo' => 'D'
            ),
            8 => array(
                    'potso' => '8. When in Pretoria (Capital of South Africa) and you find yourself on the wrong side of the tracks and are being told "Do not charf my cherry, I will buckle your frame China!", what are you being told?',
                    'karabo' => array(
                    'A' => 'Do not look at my dessert, yours is coming!',
                    'B' => 'Take me home, I am your dream girl!',
                    'C' => 'Stop using my pool cue, use your own!',
                    'D' => 'Leave my girl alone, I will smash your head in son!'

                ),
                'dikarabo' => 'D'
            ),
            9 => array(
                    'potso' => '9."Chips" in South Africa means/refers to',
                    'karabo' => array(
                    'A' => 'Look out! [A warning]',
                    'B' => 'Potato crisps',
                    'C' => 'Fries',
                    'D' => 'None of the above'

                ),
                'dikarabo' => 'C'
            ),
            10 => array(
                    'potso' => '10.If you say "ag shame," what are you likely saying in South Africa?',
                    'karabo' => array(
                    'A' => 'Oh Cute!',
                    'B' => 'How awful',
                    'C' => 'No way!',
                    'D' => 'Nice'

                ),
                'dikarabo' => 'A'
            ),
            11 => array(
                    'potso' => '11.What does "lekka chow" mean?',
                    'karabo' => array(
                    'A' => 'Stale meal',
                    'B' => 'Bad meal',
                    'C' => 'Good meal',
                    'D' => 'None of the above'

                ),
                'dikarabo' => 'C'
            ),
            12 => array(
                    'potso' => '12.What is a "boer?"',
                    'karabo' => array(
                    'A' => 'A Fisherman',
                    'B' => 'A famer',
                    'C' => 'A salesman ',
                    'D' => 'A Barman'

                ),
                'dikarabo' => 'B'
            ),
            13 => array(
                    'potso' => '13."Jawelnofine" is an expression of...',
                    'karabo' => array(
                    'A' => 'resignation',
                    'B' => 'indignation',
                    'C' => 'respect',
                    'D' => 'all of the above'

                ),
                'dikarabo' => 'A'
            ),
            14 => array(
                    'potso' => '14.What does "fundi" refers to',
                    'karabo' => array(
                    'A' => 'An expert',
                    'B' => 'A type of a candy',
                    'C' => 'A bar',
                    'D' => 'Beer'

                ),
                'dikarabo' => 'A'
            ),
            15 => array(
                    'potso' => '15.What does "loskop" refer to',
                    'karabo' => array(
                    'A' => 'Someone who is selfish or greedy',
                    'B' => 'Someone who is lost then found',
                    'C' => 'Someone who is clumsy or forgetful',
                    'D' => 'Someone who is lazy'

                ),
                'dikarabo' => 'C'
            ),
            16 => array(
                    'potso' => '16.What is mealie',
                    'karabo' => array(
                    'A' => 'Dog food',
                    'B' => 'Corn on the cob',
                    'C' => 'Breakfast',
                    'D' => 'Wheat'

                ),
                'dikarabo' => 'B'
            ),
            17 => array(
                    'potso' => '17.Which of the following refer to a party or fun activity',
                    'karabo' => array(
                    'A' => 'Jol',
                    'B' => 'Sangoma',
                    'C' => 'Jova',
                    'D' => 'Kasi'

                ),
                'dikarabo' => 'A'
            ),
            18 => array(
                    'potso' => '18.Which of the follwing refer to medication',
                    'karabo' => array(
                    'A' => 'Hoezit',
                    'B' => 'Muti',
                    'C' => 'Rooibos',
                    'D' => 'Doppie'

                ),
                'dikarabo' => 'B'
            ),
            19 => array(
                    'potso' => '19.Which of the following refer to insect',
                    'karabo' => array(
                    'A' => 'Bushveld',
                    'B' => 'Tsotsi',
                    'C' => 'Gogga',
                    'D' => 'None of the above'

                ),
                'dikarabo' => 'C'
            ),
            20 => array(
                    'potso' => '20."Just sommer"mean:',
                    'karabo' => array(
                    'A' => 'Just before',
                    'B' => 'Just because',
                    'C' => 'Just now',
                    'D' => 'None of the above'

                ),
                'dikarabo' => 'B'
            )
                        
);

if (isset($_POST['karabo'])){
    $karabo = $_POST['karabo']; // Get submitted karabo.

    // Now this is fun, automated potso checking! ;)
    $counter = 0;
    foreach ($my_var as $potsoNo => $Value){
       
    // Echo the potso
        echo $Value['potso'].'<br/>';

        if ($karabo[$potsoNo] != $Value['dikarabo'])
        {
             echo 'You answered: <span style="color: red;">'.$Value['karabo'][$karabo[$potsoNo]].'</span><br>'; 
    // Replace style with a class        
             echo 'Correct answer: <span style="color: green;">'.$Value['karabo'][$Value['dikarabo']].'</span>';
        } else {
            echo 'Correct answer: <span style="color: green;">'.$Value['karabo'][$karabo[$potsoNo]].'</span><br>';
    // Replace style with a class 
            echo 'You are correct: <span style="color: green;">'.$Value['karabo'][$karabo[$potsoNo]].'</span>'; 
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
<div class="header">
  <h1>S.A Slang!!!</h1>
  <p>'If you dont click any answer, the corresponding marks for that question will be marked <strong>ZERO</strong> and further changes cannot be undone.'</p>
</div>
  <div class= "container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
        <?php foreach ($my_var as $potsoNo => $Value){ ?>
          <div class="alert alert-success" role="alert"><strong>  
            <h3><?php echo $Value['potso']; ?></h3></strong>
        </div>
            <?php 
            foreach ($Value['karabo'] as $Letter => $Answer){ 
                $Label = 'potso-'.$potsoNo.'-karabo-'.$Letter;
                 ?>
            <div class="form">
                <input type="radio" name="karabo[<?php echo $potsoNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" required/>
                <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
            
            <?php } ?>

        <?php } ?>
        echo "<br>
        <input type="submit" class="btn btn-outline-dark" value="View Results" href="my_var.php"/>
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
  <!--Footer-->
  <div class="media-container-row mbr-white">
    <div class="col-sm-6 copyright">
        <p class="mbr-text mbr-fonts-style display-7">
            © Copyright 2020 Immanuel Flepu - All Rights Reserved
        </p>
    </div>    
    </div>
  </div>
  <!--End footer-->
  </body>
</html>