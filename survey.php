<!DOCTYPE html>
<html >
  
<head>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <title>
        Survey Form
    </title>
    <?php     
        include('connect.php');
        
        if(isset($_REQUEST['submit'])!='')
        {
            if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['age']==''|| $_REQUEST['city']==''|| $_REQUEST['taste']==''|| $_REQUEST['chef']==''|| $_REQUEST['dish']==''|| $_REQUEST['restaurant']==''|| $_REQUEST['recommend']==''|| $_REQUEST['comment']=='')
            {
                echo '<script>alert("please fill the empty field.")</script>';
            }
            else
            {
                
                $sql="insert into survey(name,email,age,city,taste,chef,dish,restaurant,recommend,comment) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['age']."', '".$_REQUEST['city']."', '".$_REQUEST['taste']."', '".$_REQUEST['chef']."', '".$_REQUEST['dish']."', '".$_REQUEST['restaurant']."', '".$_REQUEST['recommend']."', '".$_REQUEST['comment']."')";
                if(mysqli_query($con,$sql))
                {
                    echo '<script>alert("Sucess")</script>';
                    header("Location: http://localhost/home.php");
                }
                else
                {
                    echo '<script>alert("There is some problem in inserting record")</script>';
                }
            }
        }
    ?>
    <style>
 
        body {
            background-image: url("https://images.pexels.com/photos/4552175/pexels-photo-4552175.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
            background-attachment: fixed;
            background-size:cover;
            background-repeat: no-repeat;
            font-family: Verdana;
            text-align: center;
        }
 
        form {
            background-color: #fff;
            max-width: 500px;
            margin: 50px auto;
            padding: 30px 20px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }
 
        .form-field {
            text-align: left;
            margin-bottom: 25px;
        }
 
        .form-field label {
            display: block;
            margin-bottom: 10px;
        }
 
        .form-field input,
        .form-field select,
        .form-field textarea {
            border: 1px solid #777;
            border-radius: 2px;
            font-family: inherit;
            padding: 10px;
            display: block;
            width: 95%;
        }
 
        .form-field input[type="radio"],
        .form-field input[type="checkbox"] {
            display: inline-block;
            width: auto;
        }
 
        button {
            background-color: rgb(160, 4, 43);
            border: 1px solid rgb(160, 4, 43);
            border-radius: 5px;
            font-size: 21px;
            display: block;
            width: 60%;
            margin-top: 50px;
            margin-bottom: 20px;
            margin-left: 20%;
            color:white;
        }

        h1 {
            color: rgb(160, 4, 43);
            font-family: monospace;
            font-size:40px;
        }
        marquee{
            width:"100%";
            direction:"left";
            height:"100px";
            color: rgb(255, 255, 255);
        }
    </style>
</head>
  
<body>
    <form action="" method="post">
        <h1>Survey Form</h1>
        <div class="form-field">
            <label>
                Name
            </label>
            <textarea name="name" style="height:10px" placeholder="Enter your name">
                <?php
            $sql = "select * from login";
                if(mysqli_query($con,$sql))
                    {
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_assoc($result);
                        $name=$row["username"];
                        echo $name;
                    }
                    ?>
            </textarea>
        </div>
  
        <div class="form-field">
            <label>
                Email
            </label>
            <input type="email" name="email" placeholder="Enter your email" />
        </div>
  
        <div class="form-field">
            <label>
                Age
            </label>
            <input type="text" name="age" placeholder="Enter your age" />
        </div>
  
        <div class="form-field">
            <label>
                City
            </label>
            <select name="city" id="city">
                <option value="ktm">Kottayam</option>
                <option value="ekm">Ernakulam</option>
                <option value="tsr">Thrissur</option>
                <option value="other">Other</option>
            </select>
        </div>
  
        <div class="form-field">
            <label>Taste of Interest
            </label>
            <label >
                <input type="checkbox"  name="taste" value="Spicy">Spicy</input></label>
            <label >
                <input type="checkbox" name="taste" value="Chinese">Chinese</input></label>
            <label>
                <input type="checkbox" name="taste" value="South Indian">South Indian</input></label>
            <label>
                <input type="checkbox" name="taste" value="Desserts">Desserts</input></label>
            <label>
                <input type="checkbox" name="taste" value="Snacks">Snacks</input></label>
            <label>
                <input type="checkbox" name="taste" value="Veg">Veg</input></label>
            <label >
                <input type="checkbox" name="taste" value="Non-veg">Non-veg</input></label>
            <label>
                <input type="checkbox" name="taste" value="Shakes/Juices">Shakes/Juices</input></label>
        </div>

        <div class="form-field">
            <label>Chef</label>
            <input type="text" name="chef" placeholder="Enter name of your favourite chef" />
        </div>
        
        <div class="form-field">
            <label>Dish</label>
            <input name="dish" type="text" placeholder="Enter name of your favourite dish">
        </div>

        <div class="form-field">
            <label>Restaurant</label>
            <input name="restaurant" type="text" placeholder="Enter name of your favourite restaurant">
        </div>

        <div class="form-field">
            <label>Would you recommend this Restaurant to a friend?</label>
             <label>
                <input type="radio"  id="recommed-1" name="recommend" value="Yes">Yes</input>
            </label>
            <label>
                <input type="radio" id="recommed-2" name="recommend" value="No">No</input>
            </label>
            <label>
                <input type="radio" id="recommed-3" name="recommend" value="Maybe">Maybe</input>
            </label>
        </div>
  
        
  
        <div class="form-field">
            <label>
                Any comments or suggestions
            </label>
            <textarea name="comment" placeholder="Enter your comment here">
            </textarea>
        </div>
  
        <button type="submit" name="submit">
            Submit
        </button>
    </form>
    <marquee >
        Thank you for taking part in this Survey.
    </marquee>
</body>
  
</html>