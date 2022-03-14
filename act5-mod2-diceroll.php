<!DOCTYPE html>
<html>
    <head>
        <title>
            DICE ROLLING
        </title>
    </head>
<body>

<?php
    $FacesNamesSingular = array("one","two","three","Four","Five","Six");
    $FacesNamesPlural = array("ones","twos","threes","Fours","Fives","Sixes");
    $DoublesCount = 0;
    $RollNumber = 1;

    function CheckForDoubles($Die1, $Die2){
        global $FacesNamesSingular;
        global $FacesNamesPlural;
        $ReturnValue = false;
        if($Die1 == $Die2){
            echo "The Roll was Double ", $FacesNamesPlural[$Die1-1],"<br />";
            $ReturnValue = true;
        }
        else {
            echo "The Roll was a ", $FacesNamesPlural[$Die1-1]," and a ",$FacesNamesSingular[$Die2-1],"<br />";
            $ReturnValue = false;
        }
        return $ReturnValue;
        
    }
    function DisplayScoreText($Score, $Doubles){
        switch($Score){
            case 2: 
                echo "You rolled a snake eyes!";
                break;
            case 3: 
                echo "You rolled a loose deuce!";
                break;
            case 5: 
                echo "You rolled a fever five!";
                break;
            case 7: 
                echo "You rolled a natural!";
                break;
            case 9: 
                echo "You rolled a nina!";
                break;
            case 11: 
                echo "You rolled a yo!";
                break;
            case 12: 
                echo "You rolled a boxcar!";
                break;
            default:
                if($Score % 2 == 0){
                    if($Doubles){
                        echo "You rolled hard $Score!";
                    }
                    else{
                        echo "You rolled easy $Score!";
                    }
                }
                break;

        }
        
    }
    while($RollNumber <= 5){
        $Dice = array();
        $Dice[0] = rand(1,6);
        $Dice[1] = rand(1,6);
        $Score = $Dice[0] + $Dice[1];
    
        echo "<p>";
        echo "The total score for two roll $RollNumber was: ", $Score,"<br />"; 
        
        $Doubles = CheckForDoubles($Dice[0],$Dice[1]);
        DisplayScoreText($Score, $Doubles);
        echo "<p>";
        if($Doubles)
            ++$DoublesCount;
        ++$RollNumber;
        echo "<p>Doubles occurred on $DoublesCount of the 
        five rolls.</p>";
    }

?>



</body>
</html>