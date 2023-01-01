<html>

<head>
    <title>HOME</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <?php
    include('connect.php');
    if(isset($_POST['chef']))
    {
        $sql = "select chef,count(*) as nor from survey
        group by chef
          having count(*) =(select max(nor) from 
            (select chef,count(*) as nor from survey group by chef) survey)";
            $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
                echo "id: " . $row["name"]. " - Name: " . $row["phone"]  .$row["age"]. "<br>";
            }
        } 
        else
        {
            echo "0 results";
        }

        mysqli_close($conn);
    }
    ?>
    <style>
        body {
            background: url('https://imgs.search.brave.com/651DCAdg52bGrQ3zhFp9J7gBP5D0gIqkU8FsMW8V7dE/rs:fit:1200:1080:1/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJmb3J1LmNv/bS93cC1jb250ZW50/L3VwbG9hZHMvMjAy/MC8wOC9mb29kLXdh/bGxwYXBlci0yMDA4/MDIxOTIxMzQzLmpw/Zw');
            background-attachment: fixed;
            background-size: cover;
            font-family: Roboto, Oxygen, Ubuntu;
            margin: 4%;
        }
        #nav-content {

            font-size: larger;
            position: fixed;
            top: 0;
            z-index: 100;
            position: fixed;
            right: 0.1vw;
            margin-top: 1.1vw;

        }
        a{
            text-decoration:none;
        }
        #logo-img {
            position: fixed;
            top: 0;
            left: 0;
            padding-left: 2%;
            padding-top: .5%;
            z-index: 200;
            height: 10%;
        }

        a {
            color: #f2f2f2;
            margin-right: 2.3vw;
        }

        .ht {
            padding-top: 80px;
        }

        .home-img {
            width: 100%;
            border: 0.5px solid white;
            border-radius: 5px;
        }
        button {

            background-color: #03113d;
            border-radius: 10px;
            border: #cccccc;
            color: #eeeeee;
            font-size: 15px;
            margin-left: 35%;
            width: 100px;
        }
        #rating{
            text-align:left;
            margin-left:25%;
        }
        textarea{
            margin-left:10%;
        }
        #title {
            color: white;
            text-align: center;
        }

        .abtimg {
            margin-left: 4%;
            margin-right: 4%;
        }

        .row {
            padding-top: 50px;
            font-size: 18px;
        }

        .abt {
            color: rgb(255, 255, 255);
        }

        #comp {
            margin-top: 8%;
        }
        #about{
            background-image: url('https://www.pngmart.com/files/22/Black-Background-PNG-Photo.png');
            margin-left: 20%;
            margin-right:20%;
            text-align: center;
        }
        #box {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
            margin-right: auto;
            margin-left: auto;
        }
        #t1{
            margin-left: 5%;
            margin-top: -2%;
            color: #eeeeee;
            font-size: xx-large;
        }
        form{
            background-image: url('https://www.pngmart.com/files/22/Black-Background-PNG-Photo.png');
            margin: 20%;
            margin-top:0%;
            text-align: center;
            color: white;
            font-size:large;
        }
    </style>
</head>

<body>
    <nav>
        <img id="logo-img" src="logo.png" alt="LOGO">
        <p id="t1">Restaurant Survey </p>
        <div>
            <div id="nav-content">
                <a href="#rating" class=" " >MOST RATED</a>
                <a href="survey.php" >SURVEY FORM</a>
                <a href="login.php"> LOGIN</a>
                <a href="register.php" >REGISTER</a>
            </div>
        </div>
    </nav>
    <div id="about">
        <div style="margin-top: 15%;">
            <h1 id="title">About us</h1>
            <div class="row">
                <div class="abtimg">
                    <img width="300vw;" height="200vw;" src="https://images.unsplash.com/photo-1585518419759-7fe2e0fbf8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZmFuY3klMjByZXN0YXVyYW50fGVufDB8fDB8fA%3D%3D&w=1000&q=80">
                </div>
                <div class="abt" style="margin-bottom: 15%">
                    <p style="margin:5% ;">
                        The places we prefer to eat vary according to our taste, culture and mood, along with our experience and our first impression of the place. In this website we will share about our favorite restaurants that leave us a feeling of calmness and happiness as well as the quality of the food and its tasty taste.
                        As we all know, public review sites typically attract only highly satisfied, or highly dissatisfied, guests. We have a survey form compiled with restaurant survey questions to help you get the most out of our surveys. These in-depth questions cover a breadth of topics including food, service, ambiance, reservations and off-premises dining. 
                        </p>
                        
                </div>
            </div>
        </div>
    </div>
    <form action="" method="post" >
        <div id="rating">
            <label>Most Rated Chef:</label>
            <textarea name="chef" style="height:20px;width:40%" >
                <?php
            $sql = "select chef,count(*) as nor from survey
            group by chef
              having count(*) =(select max(nor) from 
                (select chef,count(*) as nor from survey group by chef) survey)";
                $result = mysqli_query($con, $sql);
    
            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo $row['chef'].',';
                }
            } 
                    ?>
            </textarea><br>
            <label>Most Rated Dish:</label>
            <textarea name="dish" style="height:20px;width:40%" >
                <?php
            $sql = "select dish,count(*) as nor from survey
            group by dish
              having count(*) =(select max(nor) from 
                (select dish,count(*) as nor from survey group by dish) survey)";
                $result = mysqli_query($con, $sql);
    
            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo $row['dish'].',';
                }
            } 
                    ?>
            </textarea><br>
            <label>Most Rated Restaurant:</label>
            <textarea name="restaurant" style="height:20px;width:50%;margin-left:3.8%" >
                <?php
            $sql = "select restaurant,count(*) as nor from survey
            group by restaurant
              having count(*) =(select max(nor) from 
                (select restaurant,count(*) as nor from survey group by restaurant) survey)";
                $result = mysqli_query($con, $sql);
    
            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo $row['restaurant'].',';
                }
            } 
                    ?>
            </textarea><br>
            <label>Most Rated Taste:</label>
            <textarea name="taste" style="height:20px;width:50%" >
                <?php
            $sql = "select taste,count(*) as nor from survey
            group by taste
              having count(*) =(select max(nor) from 
                (select taste,count(*) as nor from survey group by taste) survey)";
                $result = mysqli_query($con, $sql);
    
            if (mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_assoc($result)) 
                {
                    echo $row['taste'].',';
                }
            } 
                    ?>
            </textarea><br>
        </div>
    </form>
</body>

</html>