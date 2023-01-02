<style>
    body{
        background-color:#251749;
    }

    .time{
        color:white;
        font-size:25px;
        font-family:Arial;
        margin-right:-50px;
    }

    .tabel{
        background-color:black;
        padding:30px;
        padding-left:100px;
        padding-right:100px;
        border-radius:25px;

    }

    .way{
        margin-right:580px;
    }

    .way{
        float: center;
        margin-left:550px;
        margin-bottom:500px;
    }
    
    .date{
        color:white;
        font-family:sans-serif;
        font-size:20px;
        float:right;
    }

    .table {
        background-color:#E1D7C6;
        border-radius:15px;
        margin-top:-450px;
        padding:50px;
        font-family:Arial;
    }

    .table h1{
        font-size:30px;
    }

    .table p{
        font-size:20px;
    }
    

    .contact{
        background-color:#E1D7C6;   
        border-radius:15px;
        margin-top:30px;  
        padding:20px;
        font-family:Sans-serif;
    }


    .contact a{
        list-style-type: none;
        text-decoration:none;
    }

</style>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple web</title>
</head>
<body>

<div class="date">
<?php
    $date = date('l,d m F 20y');
echo $date;

?>
</div>



    <div class="way">
        <div class="tabel">
 <table>
    <tr>
        <td>
    <div class="time">
    <?php
    $date = date("F j h D");

    $hour      = date('H');

    if ($hour >= 20) {
        $greetings = "Good Night!";
    } elseif ($hour > 17) {
       $greetings = "Good Evening!";
    } elseif ($hour > 11) {
        $greetings = "Good Afternoon!";
    } elseif ($hour < 12) {
       $greetings = "Good Morning!";
    }
    echo $greetings;
    


?>
</div>
</td>
</tr>
</table>
</div>
</div>

<div class="profile">
    <div class="table">
        <table>
            <tr>
                <td>
    <h1>Biodata</h1>
    
    <p>Hello,my name is servasius vencel,ussually called vencel.</p>
    <p>I am 15 years old,im now study at Wikrama Vocational High school,</p>
    <p>as a software development and game developer student.</p>

    </td>
    </tr>
    </table>
    </div>

</div>
                     


<div class="contact">
    <table>
        <tr>
            <td>
                <h1> Contact me at:</h1>
                <a href="https://www.instagram.com/servasiusv/">
                    <p>instagram</p>
                </a>
            </td>
        </tr>
    </table>
</div>








</body>
</html>