<html>
<head>
    <title>Example 1</title>
</head>
<body>
    <h1>My Website</h1>
    <p><?php echo 'Is dinosaur free';?></p>
    <p><?php echo 42+3;?></p>
    <?php $address="114 Observatory" ;?>
    <p><?php echo $address;?></p>
    <ul>
        <?php 
        $authors = array(
        '1870' => 'Charles Dickens', 
        '1863' => 'William Thackeray', 
        '1882' => 'Anthony Trollope', 
        '1889' => 'Gerard Manley Hopkins'
        );
    foreach ($authors as $year => $author):
        ?><li><?php echo "$author died in $year."?></li> <?php endforeach;?>
    </ul>

<p><?php 
function seconds_to_years($seconds)
{
    $conversion=(60*60*24*365.25);
    return $seconds/$conversion;
}
$a=2;
$b=4;
echo $a/$b;
?>

<hr/>
<h3>Seconds to Years</h3>
<?php
    echo seconds_to_years(60000);
    echo '<p>' . seconds_to_years(40000000000000) . '</p>';
?>

<hr/>
<h3>Days to Weeks</h3>
<?php
function days_to_weeks($days)
{
    return $days/7;

}
?>
<p><?php echo days_to_weeks(14);?></p>
<p><?php echo days_to_weeks(28);?></p>

<hr/>

<h2>Homework-Set3</h2>
<h4>problem one</h4>
<?php 
    function multiply($x, $y)
    {
        return $x*$y;
    }
    ?>

    <p><?php echo multiply(4,2);?></p>
    <p><?php echo multiply(0,4);?></p>
    <p><?php echo multiply(900,32);?></p>
    <p><?php echo multiply(299999,23);?></p>

<h4>problem two</h4>
<?php
    function divide($x, $y)
    {
        return $x/$y;

    }

    ?> 
    
    <p><?php echo divide(4,2);?></p>
    <p><?php echo divide(2,4);?></p>
    <p><?php echo divide(900,32);?></p>
    <p><?php echo divide(384,0);?></p>






</body>
</html>